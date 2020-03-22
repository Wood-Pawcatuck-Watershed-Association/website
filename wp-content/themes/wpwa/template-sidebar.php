<?php

/**
 * Template Name: Sidebar Left
 */

use Roots\Sage\Classes\Theme;
?>
<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/content', 'page-sidebar'); ?>

  <?php Theme::page_builder(); ?>

<?php endwhile; ?>
