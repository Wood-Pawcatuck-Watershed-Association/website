<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @package  ZGM
 */

namespace ZGM\Plugin\Classes;

use GuzzleHttp\Client;

final class Plugin
{


    /**
     * The unique identifier of this plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      string    $plugin_name    The string used to uniquely identify this plugin.
     */
    protected $plugin_name;

    /**
     * The current version of the plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      string    $version    The current version of the plugin.
     */
    protected $version;

    /**
     * Define the core functionality of the plugin.
     *
     * Set the plugin name and the plugin version that can be used throughout the plugin.
     * Load the dependencies, define the locale, and set the hooks for the admin area and
     * the public-facing side of the site.
     *
     * @since    1.0.0
     */

    protected static $events = array();

    public function __construct()
    {
        if (defined('THIS_PLUGIN_VERSION')) {
            $this->version = THIS_PLUGIN_VERSION;
        } else {
            $this->version = '1.0.0';
        }

        $this->plugin_name = 'zgm-plugin-boilerplate';
    }

    /**
     * The name of the plugin used to uniquely identify it within the context of
     * WordPress and to define internationalization functionality.
     *
     * @since     1.0.0
     * @return    string    The name of the plugin.
     */
    public function get_plugin_name()
    {
        return $this->plugin_name;
    }

    /**
     * Retrieve the version number of the plugin.
     *
     * @since     1.0.0
     * @return    string    The version number of the plugin.
     */
    public function get_version()
    {
        return $this->version;
    }
    /**
     * Intended to run first when the class is initiated
     */
    public function init()
    {

        /**
         * Plugin Activation Hook
         * @link https://developer.wordpress.org/reference/functions/register_activation_hook/
         */
        register_activation_hook(__FILE__, function () {
            // clear the permalinks
            flush_rewrite_rules();
            register_uninstall_hook(__FILE__, array($this, 'register_uninstall_hook'));
        });

        /**
         * Plugin Deactåivation Hook
         * @link https://developer.wordpress.org/reference/functions/register_deactivation_hook/
         */
        register_deactivation_hook(__FILE__, function () {
            // clear the permalinks
            flush_rewrite_rules();
            wp_clear_scheduled_hook('fetch_eventbrite');
        });
    }

    /**
     * Plugin Uninstall Hook
     * @link https://developer.wordpress.org/reference/functions/register_uninstall_hook/
     */
    public function register_uninstall_hook()
    {
        //
    }

    /**
     * Register all of the hooks related to the admin area functionality
     * of the plugin.
     *
     * @since    1.0.0
     * @access   private
     */
    public function define_admin_hooks()
    {
        add_action('fetch_eventbrite', array($this, 'fetch_eventbrite'));
    }

    /**
     * Register all of the hooks related to the public-facing functionality
     * of the plugin.
     *
     * @since    1.0.0
     * @access   private
     */
    public function define_public_hooks()
    {

        add_action('wp_enqueue_scripts', function () {

            wp_enqueue_style($this->plugin_name, Plugin::asset_path('main.css'), array(), $this->version, 'all');
        }, 'enqueue_styles');

        add_action('wp_enqueue_scripts', function () {

            wp_enqueue_script($this->plugin_name, Plugin::asset_path('main.js'), [], $this->version, true);
            wp_localize_script($this->plugin_name, 'WPEVENTBRITE', array(
                'token' => get_option('_eventbrite_oauth_token') ? get_option('_eventbrite_oauth_token') : 'I6HEXNTVQFQWEK2BR7AB',
                'organization_id' => get_option('_eventbrite_organization_id') ? get_option('_eventbrite_organization_id') : '277195183135',
                'events' => !empty(get_option('_eventbrite_events_json')) ? get_option('_eventbrite_events_json') : [],
                'ticket_classes' => !empty(get_option('_eventbrite_tickets_json')) ? get_option('_eventbrite_tickets_json') : [],
            ));
        }, 'enqueue_scripts');
    }

    /**
     * Asset Path Helper Function
     *
     * @since    1.0.0
     * @access   private
     */
    public static function asset_path($filename)
    {
        $dist_path = plugin_dir_url(dirname(dirname(__FILE__))) . '/dist/';
        $directory = dirname($filename) . '/';
        $file = basename($filename);
        return $dist_path . $directory . $file;
    }

    /**
     * Start Crons
     *
     * @since    1.0.0
     */
    public function crons()
    {
        if (get_option('_eventbrite_schedule_cron')) {
            if (!wp_next_scheduled('fetch_eventbrite')) {
                wp_schedule_event(time(), 'hourly', 'fetch_eventbrite');
            }
        }
    }

    /**
     * Fetch eventbrite api
     *
     * @since    1.0.0
     * @access   private
     */
    public static function fetch_eventbrite_now($continuation = null)
    {

        $eventbrite_organization_id = get_option('_eventbrite_organization_id');
        $eventbrite_oauth_token = get_option('_eventbrite_oauth_token');

        // Create a client with a base URI
        if ($continuation) {
            $client = new Client([
                'base_uri' => 'https://www.eventbriteapi.com/v3/',
                'query' => [
                    'token' => $eventbrite_oauth_token,
                    'status' => 'live',
                    //'status' => 'draft',
                    'continuation' => $continuation
                ]
            ]);
        } else {
            $client = new Client([
                'base_uri' => 'https://www.eventbriteapi.com/v3/',
                'query' => [
                    'token' => $eventbrite_oauth_token,
                    'status' => 'live',
                ]
            ]);
        }
        // Create a client with a base URI
        $client_tickets = new Client([
            'base_uri' => 'https://www.eventbriteapi.com/v3/',
            'query' => [
                'token' => $eventbrite_oauth_token,
            ]
        ]);

        if (!empty($eventbrite_organization_id) && !empty($eventbrite_oauth_token)) :

            try {

                if (empty(self::$events)) {

                    $response_events = $client->request('GET', "organizations/{$eventbrite_organization_id}/events/");
                    $response_events_json = json_decode($response_events->getBody()->getContents());

                    self::$events[] = $response_events_json;

                    if ($response_events_json->pagination->has_more_items === true) {

                        Plugin::fetch_eventbrite_now($response_events_json->pagination->continuation);
                    }
                } else {

                    $response_events = $client->request('GET', "organizations/{$eventbrite_organization_id}/events/");

                    $response_events_json = json_decode($response_events->getBody()->getContents());

                    self::$events[0]->events = array_merge(self::$events[0]->events, $response_events_json->events);

                    if ($response_events_json->pagination->has_more_items === true) {

                        Plugin::fetch_eventbrite_now($response_events_json->pagination->continuation);
                    }
                }
            } catch (RequestException $e) {
                echo Psr7\str($e->getRequest());
                if ($e->hasResponse()) {
                    echo Psr7\str($e->getResponse());
                }
            }

            update_site_option('_eventbrite_events_json', self::$events);

            $eventbrite_event_ids = [];
            foreach ($response_events_json->events as $response_event) :

                $response_event_id = $response_event->id;
                $eventbrite_event_ids[] = $response_event_id;

            endforeach;

            $eventbrite_event_tickets = [];
            foreach ($eventbrite_event_ids as $event_id) :

                try {

                    $response_tickets = $client_tickets->request('GET', "events/{$event_id}/ticket_classes/");
                } catch (RequestException $e) {
                    echo Psr7\str($e->getRequest());
                    if ($e->hasResponse()) {
                        echo Psr7\str($e->getResponse());
                    }
                }

                $ticket = json_decode($response_tickets->getBody()->getContents());

                if (empty($eventbrite_event_tickets)) {

                    $eventbrite_event_tickets[] = $ticket->ticket_classes[0];
                } else {

                    $eventbrite_event_tickets[] = $ticket->ticket_classes[0];
                }

            endforeach;
            update_site_option('_eventbrite_tickets_json', $eventbrite_event_tickets);

        endif;
    }

    /**
     * Fetch eventbrite api
     *
     * @since    1.0.0
     * @access   private
     */
    public function fetch_eventbrite()
    {

        self::fetch_eventbrite_now();
    }
}
