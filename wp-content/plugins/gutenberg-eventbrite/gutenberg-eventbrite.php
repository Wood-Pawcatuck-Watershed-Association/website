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

    $editor_css = 'editor.css';
    wp_register_style(
        'create-block-gutenberg-eventbrite-block-editor',
        plugins_url($editor_css, __FILE__),
        array(),
        filemtime("$dir/$editor_css")
    );

    $style_css = 'style.css';
    wp_register_style(
        'create-block-gutenberg-eventbrite-block',
        plugins_url($style_css, __FILE__),
        array(),
        filemtime("$dir/$style_css")
    );

    register_block_type('create-block/gutenberg-eventbrite', array(
        'editor_script' => 'create-block-gutenberg-eventbrite-block-editor',
        'editor_style'  => 'create-block-gutenberg-eventbrite-block-editor',
        'style'         => 'create-block-gutenberg-eventbrite-block',
        'render_callback' => 'gutenberg_eventbrite_block',
    ));
}
add_action('init', 'create_block_gutenberg_eventbrite_block_init');

function gutenberg_eventbrite_block($attributes)
{
    $apiKey = $attributes['apiKey'];

    $response = wp_remote_get("https://www.eventbriteapi.com/v3/users/me/events/?token={$apiKey}&status=live&order_by=start_asc");

    $data = json_decode($response['body'], true);

    ob_start();
?>
    <ul>
        <?php foreach ($data['events'] as $event) : ?>
            <?php
            $title = $event['title']['text'];
            $backgroundImage = $event['logo']['original']['url'];
            $startDate = $event['start']['local'];
            ?>
            <div class="event__single">
                <?php if ($backgroundImage) : ?>
                    <div class="h-32 flex-none bg-cover bg-center rounded-t text-center overflow-hidden" style="background-image: url(<?= $backgroundImage; ?>)"></div>
                <?php else : ?>
                    <div v-else class="h-32 flex-none bg-cover rounded-t text-center overflow-hidden" style="background-image: url('https://staging.wpwa.org/wp-content/uploads/2018/04/jaw-canoe.jpg')" title="WPWA Event"></div>
                <?php endif; ?>
                <div class="border-r border-b border-l border-grey-light bg-white rounded-b py-4 px-2 flex flex-col justify-between leading-normal shadow-md">
                    <div class="event__details flex">
                        <div class="event__details--left">
                            <div class="event__details--dateWrapper text-center">
                                <p class="event__details--dateMonth text-sm text-red uppercase my-0 font-sans">
                                    <time>Month</time>
                                </p>
                                <p class="event__details--dateDay text-xl text-grey-dark my-0 font-sans">
                                    <time>Day</time>
                                </p>
                            </div>
                        </div>
                        <div class="event__details--right ml-2">
                            <div class="event__details--rightInnerTop">
                                <h3 class="my-0 text-black font-semibold text-sm">
                                    <?= $title; ?>
                                </h3>
                                <div class="event__details--dateWrapper">
                                    <time class="event__details--date font-sans text-grey-dark text-xs">Date</time>
                                </div>
                                <p class="text-sm text-grey-dark flex items-center font-sans mb-2">
                                    <span v-if="this.eventTickets.ticket_classes && this.eventTickets.ticket_classes[0].cost && this.eventTickets.ticket_classes[0].cost.display">{{this.eventTickets.ticket_classes[0].cost.display}}</span>
                                    <span v-else>{{this.cost}}</span>
                                </p>
                            </div>
                            <div class="event__details--rightInnerBottom">
                                <div class="event__details--buttonWrapper flex justify-between">
                                    <button :data-tippy-content="event.description.html" v-if="event.description.html" class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 mr-2 rounded">info</button>
                                    <button :id="eventBriteModalId(event.id)" type="button" class="bg-orange hover:bg-blue-dark text-white font-bold py-2 px-4 rounded" v-show="event.status === 'live'">Sign up</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </ul>
<?php
    return ob_get_clean();
}
