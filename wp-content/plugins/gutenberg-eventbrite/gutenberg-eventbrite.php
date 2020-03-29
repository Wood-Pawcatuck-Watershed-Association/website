<?php

/**
 * Plugin Name:     Gutenberg Eventbrite
 * Description:     A gutenberg block that fetches eventbrite events
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
        'sandtrail-studios-gutenberg-eventbrite-block-script',
        plugins_url($index_js, __FILE__),
        $script_asset['dependencies'],
        $script_asset['version']
    );

    $style_css = 'style.css';
    wp_register_style(
        'sandtrail-studios-gutenberg-eventbrite-block-style',
        plugins_url($style_css, __FILE__),
        array(),
        filemtime("$dir/$style_css")
    );

    register_block_type('sandtrail-studios/gutenberg-eventbrite', array(
        'script' => 'sandtrail-studios-gutenberg-eventbrite-block-script',
        'style'  => 'sandtrail-studios-gutenberg-eventbrite-block-style',
        'render_callback' => 'gutenberg_eventbrite_block',
    ));
}
add_action('init', 'gutenberg_eventbrite_block_init');

function gutenberg_eventbrite_block($attributes)
{
    if (is_admin()) return;

    $TRANSIENT_KEY = 'gutenberg_eventbrite_block';

    $transient = get_transient($TRANSIENT_KEY);

    $apiKey = $attributes['apiKey'];

    if (empty($transient)) {

        $response = wp_remote_get("https://www.eventbriteapi.com/v3/users/me/events/?token={$apiKey}&expand=ticket_classes&status=live&order_by=start_asc");

        $data = json_decode($response['body'], true);

        set_transient($TRANSIENT_KEY, $data['events'], 60);

        $transient = get_transient($TRANSIENT_KEY);
    }

    ob_start();

    echo '<script>window.eventbrite =' . wp_json_encode($transient) . '</script>';

    echo '<div id="root-eventbrite"></div>';

    return ob_get_clean();
}
