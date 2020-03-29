<?php

/**
 * Plugin Name:     Gutenberg Eventbrite
 * Description:     A gutenberg block that fetches eventbrite events
 * Version:         0.1.0
 * Author:          Jon Waldstein
 * License:         GPL-2.0-or-later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:     create-block
 *
 * @package         create-block
 */

/**
 * Registers all block assets so that they can be enqueued through the block editor
 * in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/applying-styles-with-stylesheets/
 */
function create_block_gutenberg_eventbrite_block_init()
{
    $dir = dirname(__FILE__);

    $script_asset_path = "$dir/build/index.asset.php";
    if (!file_exists($script_asset_path)) {
        throw new Error(
            'You need to run `npm start` or `npm run build` for the "create-block/gutenberg-eventbrite" block first.'
        );
    }
    $index_js     = 'build/index.js';
    $script_asset = require($script_asset_path);
    wp_register_script(
        'create-block-gutenberg-eventbrite-block-editor',
        plugins_url($index_js, __FILE__),
        $script_asset['dependencies'],
        $script_asset['version']
    );

    $style_css = 'style.css';
    wp_register_style(
        'create-block-gutenberg-eventbrite-block',
        plugins_url($style_css, __FILE__),
        array(),
        filemtime("$dir/$style_css")
    );

    register_block_type('create-block/gutenberg-eventbrite', array(
        'script' => 'create-block-gutenberg-eventbrite-block-editor',
        'style'         => 'create-block-gutenberg-eventbrite-block',
        'render_callback' => 'gutenberg_eventbrite_block',
    ));
}
add_action('init', 'create_block_gutenberg_eventbrite_block_init');

function gutenberg_eventbrite_block($attributes)
{
    $TRANSIENT_KEY = 'gutenberg_eventbrite_block';

    $transient = get_transient($TRANSIENT_KEY);

    if (empty($transient)) {

        $apiKey = $attributes['apiKey'];

        $response = wp_remote_get("https://www.eventbriteapi.com/v3/users/me/events/?token={$apiKey}&expand=ticket_classes&status=live&order_by=start_asc");

        $data = json_decode($response['body'], true);

        set_transient($TRANSIENT_KEY, $data['events'], 60);
    }


    echo '<script>window.eventbrite =' . wp_json_encode($transient) . '</script>';
    echo '<div id="root-eventbrite"></div>';
}
