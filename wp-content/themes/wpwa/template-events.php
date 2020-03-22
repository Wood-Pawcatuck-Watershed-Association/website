<?php

/**
 * Template Name: Events Template
 */

use Roots\Sage\Classes\Theme;

?>
<?php while (have_posts()) : the_post(); ?>
    <?php $events_template_before_content = carbon_get_the_post_meta('events_template_before_content'); ?>
    <?php $events_template_after_content = carbon_get_the_post_meta('events_template_after_content'); ?>
    <?php
    $events_query = new WP_Query([
        'post_type' => 'cpt_events',
        'posts_per_page' => '99',
        'orderby'    => 'meta_value',
        'order' => 'asc',
        'meta_query' => array(
            'date' => array(
                'key' => 'event_start_date',
                'compare' => '>',
            ),
        ),
    ]);
    ?>
    <section class="container-fluid pt-3 pb-3">
        <?php if (!empty($events_template_before_content)) : ?>
            <div class="container">
                <div class="row mb-8">
                    <div class="col-sm-12">
                        <?= wpautop($events_template_before_content); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-lg-6 mb-8">
                <h2 class="text-center">Ongoing Events</h2>
                <div class="mt-10">
                    <?php while ($events_query->have_posts()) : $events_query->the_post(); ?>
                        <?php
                        $event_id = get_the_ID();
                        $event_heading = carbon_get_post_meta($event_id, 'event_heading');
                        $event_description = carbon_get_post_meta($event_id, 'event_description');
                        $date_now = new DateTime('now', new DateTimeZone('America/New_York'));
                        $date_now = $date_now->format('Y-m-d');
                        $date_expired = carbon_get_post_meta($event_id, 'event_end_date');
                        $thumbnail = get_the_post_thumbnail_url($event_id, 'post-thumbnail');
                        ?>
                        <?php if ($date_now < $date_expired) : ?>
                            <div class="max-w-md lg:max-w-sm px-2 mb-4 h-full mx-auto">
                                <div class="event__single">
                                    <?php if ($thumbnail) : ?>
                                        <div class="h-32 flex-none bg-cover bg-center rounded-t text-center overflow-hidden" style="background-image: url(<?= $thumbnail; ?>);">
                                        </div>
                                    <?php endif; ?>
                                    <div class="border-r border-b border-l border-grey-light bg-white rounded-b py-4 px-2 flex flex-col justify-between leading-normal shadow-md">
                                        <div class="event__details flex">
                                            <div class="event__details--right ml-2">
                                                <div class="event__details--rightInnerTop">
                                                    <h3 class="my-0 text-black font-semibold text-lg mb-4">
                                                        <?= !empty($event_heading) ? $event_heading : the_title(); ?>
                                                    </h3>
                                                </div>
                                                <div class="event__details--rightInnerBottom">
                                                    <?= wpautop($event_description); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="col-lg-6">
                <?php the_content(); ?>
            </div>
        </div>
        <?php if (!empty($events_template_after_content)) : ?>
            <div class="container">
                <div class="row mt-8">
                    <div class="col-sm-12">
                        <?= wpautop($events_template_after_content); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </section>

<?php endwhile;
