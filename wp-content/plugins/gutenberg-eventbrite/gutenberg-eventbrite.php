<?php

/**
 * Plugin Name:     Eventbrite Cards Block
 * Description:     A gutenberg block that fetches eventbrite events and displays them as cards
 * Version:         1.0.0
 * Author:          Jon Waldstein
 * License:         GPL-2.0-or-later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:     sandtrail-studios
 *
 * @package         sandtrail-studios
 */

/**
 * Registers all block assets so that they can be enqueued through the block editor
 * in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/applying-styles-with-stylesheets/
 */
function gutenberg_eventbrite_block_init()
{
    $dir = dirname(__FILE__);

    $script_asset_path = "$dir/build/index.asset.php";
    if (!file_exists($script_asset_path)) {
        throw new Error(
            'You need to run `npm start` or `npm run build` for the "sandtrail-studios/gutenberg-eventbrite" block first.'
        );
    }

    $index_js     = 'build/index.js';
    $script_asset = require($script_asset_path);
    wp_register_script(
        'sandtrail-studios-eventbrite-cards-block-script',
        plugins_url($index_js, __FILE__),
        $script_asset['dependencies'],
        $script_asset['version']
    );

    register_block_type('sandtrail-studios/gutenberg-eventbrite', array(
        'script' => 'sandtrail-studios-eventbrite-cards-block-script',
        'style'  => 'sandtrail-studios-eventbrite-cards-block-style',
        'render_callback' => 'gutenberg_eventbrite_block',
    ));
}
add_action('init', 'gutenberg_eventbrite_block_init');

function gutenberg_eventbrite_block($attributes)
{
    if (is_admin()) return;

    $TRANSIENT_KEY = "gutenberg_eventbrite_block_{$attributes['id']}";

    $transient = get_transient($TRANSIENT_KEY);

    $apiKey = $attributes['apiKey'];
    $status = $attributes['status'];

    if (empty($transient) || $transient['attributes'] !== $attributes) {

        $response = wp_remote_get("https://www.eventbriteapi.com/v3/users/me/events/?token={$apiKey}&expand=ticket_classes,venue&status={$status}&order_by=start_asc&time_filter=current_future");

        $data = json_decode($response['body'], true);

        if (!empty($attributes['apiKey'])){
            unset($attributes['apiKey']);
        }

        set_transient($TRANSIENT_KEY, [
            'events' => $data['events'],
            'attributes' => $attributes,
        ], 60);

        $transient = get_transient($TRANSIENT_KEY);
    }

    ob_start();

    $transient_events_json = wp_json_encode($transient['events']);
    $transient_attributes_json = wp_json_encode($transient['attributes']);

    echo "<script>
        window.eventbriteCardsBlockExports = {
            events: {$transient_events_json},
            attributes: {$transient_attributes_json},
        }
    </script>";

    echo '<div id="root-eventbrite"></div>';

    return ob_get_clean();
}
