<?php

/**
 * Plugin Name:     Eventbrite Blocks
 * Description:     A gutenberg block that fetches eventbrite events and displays them
 * Version:         1.0.0
 * Author:          Jon Waldstein
 * License:         GPL-2.0-or-later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:     sandtrail-studios
 *
 * @package         sandtrail-studios
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Setup constants
define('SCRIPT_ASSET_PATH', dirname(__FILE__).'/build/index.asset.php');
define('SCRIPT_ASSET', require(SCRIPT_ASSET_PATH));
define('INDEX_JS', 'build/index.js');

/**
 * Registers all block assets so that they can be enqueued through the block editor
 * in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/applying-styles-with-stylesheets/
 */

add_action('init', function()
{

    if (!file_exists(SCRIPT_ASSET_PATH)) {
        throw new Error(
            'You need to run `npm start` or `npm run build` for the "sandtrail-studios/eventbrite-blocks-card" block first.'
        );
    }

    if ( ! function_exists( 'register_block_type' ) ) {
        // Gutenberg is not active.
        return;
    }

    wp_register_script(
        'sandtrail-studios-eventbrite-blocks-script',
        plugins_url(INDEX_JS, __FILE__),
        SCRIPT_ASSET['dependencies'],
        SCRIPT_ASSET['version']
    );

    register_block_type('sandtrail-studios/eventbrite-blocks-card', array(
        'editor_script' => 'sandtrail-studios-eventbrite-blocks-script',
        'render_callback' => 'render_eventbrite_blocks_card',
    ));

});


function render_eventbrite_blocks_card($attributes)
{
    // do not render in the backend
    if (is_admin()) return;

    // set transient key based on the individual blocks
    $TRANSIENT_KEY = "gutenberg_eventbrite_block_{$attributes['id']}";

    // get transient based on current transient key
    $transient = get_transient($TRANSIENT_KEY);

    // if transient is empty or attributes have changed
    if (empty($transient) || $transient['attributes'] !== $attributes) {

        // make GET request to eventbrite api based on user's attribute settings
        $response = wp_remote_get("https://www.eventbriteapi.com/v3/users/me/events/?token={$attributes['apiKey']}&expand=ticket_classes,venue&status={$attributes['status']}&order_by=start_asc&time_filter=current_future");

        // decode fetched data to json
        $data = json_decode($response['body'], true);

        // remove apiKey from attributes so it's not accessible on the front-end
        if (!empty($attributes['apiKey'])){
            unset($attributes['apiKey']);
        }

        // set transient data with current transient key for 1 minute
        set_transient($TRANSIENT_KEY, [
            'events' => $data['events'],
            'attributes' => $attributes,
        ], 60);

        // get transient based on current block
        $transient = get_transient($TRANSIENT_KEY);
    }

    // prepare and encode transient data to json
    $transient_events_json = wp_json_encode($transient['events']);
    $transient_attributes_json = wp_json_encode($transient['attributes']);

    // enqueue our script for the front-end
    wp_enqueue_script(
        'sandtrail-studios-eventbrite-blocks-script',
        plugins_url(INDEX_JS, __FILE__),
        SCRIPT_ASSET['dependencies'],
        SCRIPT_ASSET['version']
    );

    ob_start();

    // add inline script that assigns our window data to be accessed in our js
    wp_add_inline_script('sandtrail-studios-eventbrite-blocks-script',"
        window.eventbriteCardsBlockExports = {
            events: {$transient_events_json},
            attributes: {$transient_attributes_json},
        }" );

    // use js to render events in this div
    echo '<div id="root-eventbrite"></div>';

    return ob_get_clean();
}
