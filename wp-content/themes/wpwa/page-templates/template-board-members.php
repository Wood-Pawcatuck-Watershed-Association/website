<?php

/**
 * Template Name: Board of Directors
 */

use Roots\Sage\Classes\Theme;

while (have_posts()) : the_post();

    $Query = new WP_Query([
        'post_type' => 'cpt_boardmembers',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => '99'
    ]);
?>
    <div class="container pb-5">
        <div class="row justify-content-around">
            <div class="col-md-4 d-none d-md-block">
                <div class="page-sidebar">
                    <?php
                    if (is_active_sidebar('board-sidebar')) :
                        dynamic_sidebar('board-sidebar');
                    endif;
                    ?>
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

                <ul class="list-group list-group-flush d-inline-block">
                    <?php

                    while ($Query->have_posts()) : $Query->the_post();

                        get_template_part('views/board-member');

                    endwhile;
                    wp_reset_postdata();

                    ?>
                </ul>
            </div>
        </div>
    </div>

<?php endwhile; ?>
