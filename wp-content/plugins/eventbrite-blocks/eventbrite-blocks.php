<?php

/**
 * Plugin Name:     Eventbrite Blocks
 * Description:     A gutenberg block that fetches eventbrite events and displays them
 * Version:         1.0.0
 * Author:          Jon Waldstein
 * Author URI:      https://jonwaldstein.com
 * License:         GPL-2.0-or-later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:     sandtrail-studios
 *
 * @package         sandtrail-studios
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Setup constants
define('EVENTBRITE_BLOCKS_SCRIPT_ASSET_PATH', dirname(__FILE__) . '/build/index.asset.php');
define('EVENTBRITE_BLOCKS_SCRIPT_ASSET', require(EVENTBRITE_BLOCKS_SCRIPT_ASSET_PATH));
define('EVENTBRITE_BLOCKS_INDEX_JS', 'build/index.js');
define('EVENTBRITE_BLOCKS_LOCALIZED_SCRIPT_NAME', 'eventbriteBlocks');
define('EVENTBRITE_BLOCKS_SCRIPT_NAME', 'sandtrail-studios-eventbrite-blocks-script');

/**
 * Registers all block assets so that they can be enqueued through the block editor
 * in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/applying-styles-with-stylesheets/
 */
add_action('init', function () {

    if (!file_exists(EVENTBRITE_BLOCKS_SCRIPT_ASSET_PATH)) {
        throw new Error(
            'You need to run `npm start` or `npm run build` for the "sandtrail-studios/eventbrite-blocks-card" block first.'
        );
    }

    if (!function_exists('register_block_type')) {
        // Gutenberg is not active.
        return;
    }

    wp_register_script(
        EVENTBRITE_BLOCKS_SCRIPT_NAME,
        plugins_url(EVENTBRITE_BLOCKS_INDEX_JS, __FILE__),
        EVENTBRITE_BLOCKS_SCRIPT_ASSET['dependencies'],
        EVENTBRITE_BLOCKS_SCRIPT_ASSET['version']
    );

    // mock our data in js for the editor
    wp_localize_script(
        EVENTBRITE_BLOCKS_SCRIPT_NAME,
        EVENTBRITE_BLOCKS_LOCALIZED_SCRIPT_NAME,
        [
            'events' => [],
            'attributes' => []
        ]
    );

    register_block_type('sandtrail-studios/eventbrite-blocks-events-card', array(
        'editor_script' => EVENTBRITE_BLOCKS_SCRIPT_NAME,
        'render_callback' => 'render_eventbrite_blocks_card',
    ));
});

/**
 * Add a block category for "Eventbrite Blocks" if it doesn't exist already.
 *
 * @param array $categories Array of block categories.
 *
 * @return array
 */

add_filter('block_categories', function ($categories) {
    $category_slugs = wp_list_pluck($categories, 'slug');

    return in_array('sandtrail-studios-eventbrite-blocks', $category_slugs, true) ? $categories : array_merge(
        $categories,
        array(
            array(
                'slug'  => 'sandtrail-studios-eventbrite-blocks',
                'title' => __('Eventbrite Blocks', 'sandtrail-studios'),
                'icon'  => null,
            ),
        )
    );
});

/**
 * Render callback for eventbrite blocks event card
 *
 * @param object $attributes
 *
 */
function render_eventbrite_blocks_card($attributes)
{
    // do not render in the backend
    if (is_admin()) return;

    // set transient key based on the individual blocks
    $TRANSIENT_KEY = "eventbrite_blocks_{$attributes['id']}";

    // get transient based on current transient key
    $transient = get_transient($TRANSIENT_KEY);

    // if transient is empty or attributes have changed
    if (!$transient || $transient['attributes'] !== $attributes) {

        $status = $attributes['status'] ? $attributes['status'] : 'live';

        // make GET request to eventbrite api based on user's attribute settings
        $response = wp_remote_get("https://www.eventbriteapi.com/v3/users/me/events/?token={$attributes['apiKey']}&expand=ticket_classes,venue&status={$status}&order_by=start_asc&time_filter=current_future");

        // decode fetched data to json
        $data = json_decode($response['body'], true);

        // set transient data with current transient key for 1 minute
        set_transient($TRANSIENT_KEY, [
            'events' => $data['events'],
            'attributes' => $attributes,
            'date' => date('Y-m-d')
        ], 60);

        // get transient based on current block
        $transient = get_transient($TRANSIENT_KEY);
    }

    // remove apiKey from attributes so it's not accessible on the front-end
    if (!empty($transient['attributes']['apiKey'])) {
        unset($transient['attributes']['apiKey']);
    }

    // enqueue our script for the front-end
    wp_enqueue_script(EVENTBRITE_BLOCKS_SCRIPT_NAME);

    // access our transient data in js
    wp_localize_script(
        EVENTBRITE_BLOCKS_SCRIPT_NAME,
        EVENTBRITE_BLOCKS_LOCALIZED_SCRIPT_NAME,
        [
            'events' => $transient['events'],
            'attributes' => $transient['attributes'],
        ]
    );

    ob_start();

    // use js to render events in this div
    echo '<div id="root-eventbrite-blocks" class="eventbrite-blocks eventbrite-blocks-css-wrapper"></div>';

    return ob_get_clean();
}
