<?php

/**
 * Template Name: Newsletters
 */

use Roots\Sage\Classes\Theme;

while (have_posts()) : the_post();

    $cta_button_text = carbon_get_the_post_meta('cta_button_text');
    $cta_modal_heading = carbon_get_the_post_meta('cta_modal_heading');
    $cta_modal_content = carbon_get_the_post_meta('cta_modal_content');

    $Query = new WP_Query([
        'post_type' => 'cpt_newsletters',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => '99'
    ]);
?>

    <div class="container pb-5">
        <div class="row justify-content-around">
            <div class="col-md-4 d-none d-md-block">
                <div class="page-sidebar">
                    <?php if (is_active_sidebar('newsletters-sidebar')) : ?>
                        <?php dynamic_sidebar('newsletters-sidebar'); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-8">
                <?php if (get_the_content() || is_archive() || is_single()) : ?>
                    <div class="row pb-4">
                        <div class="col">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="row justify-content-around mb-5">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-orange text-white" data-toggle="modal" data-target="#newsletterModal">
                        <?= !empty($cta_button_text) ? $cta_button_text : 'Sign up for our Newsletter'; ?>
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="newsletterModal" tabindex="-1" role="dialog" aria-labelledby="newsletterModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="newsletterModalLabel">
                                        <?= !empty($cta_modal_heading) ? $cta_modal_heading : 'Newsletter Signup'; ?>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div>
                                    <?= !empty($cta_modal_content) ? $cta_modal_content : null; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="accordion-newsletter" id="accordionNewsletter">
                        <?php while ($Query->have_posts()) : $Query->the_post(); ?>
                            <div class="list-group mb-2" role="tablist">
                                <?php get_template_part('views/components/newsletter'); ?>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endwhile; ?>
