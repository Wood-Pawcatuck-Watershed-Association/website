<?php

/**
 * Template Name: Memberships
 */

use Roots\Sage\Classes\Theme;
?>

<?php while (have_posts()) : the_post(); ?>

    <?php if (get_the_content() || is_archive() || is_single()) : ?>
        <div class="container pt-3 pb-3">
            <div class="row">
                <div class="col-sm-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="container">
        <div class="row justify-content-around">
            <?php

            $Query = new WP_Query([
                'post_type' => 'cpt_memberships',
                'orderby' => 'menu_order',
                'order' => 'ASC',
                'posts_per_page' => '99'
            ]);

            while ($Query->have_posts()) : $Query->the_post();

                get_template_part('views/components/membership-card');

            endwhile;

            wp_reset_postdata();

            ?>
        </div>
    </div>

    <?php Theme::page_builder(); ?>

<?php endwhile; ?>
