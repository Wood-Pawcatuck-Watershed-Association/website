<?php
use Roots\Sage\Classes\Theme;
?>
<?php while (have_posts()) : the_post(); ?>
	
  <?php if (get_the_content() || is_archive() || is_single()): ?>

			<?php the_content(); ?>

	<?php endif; ?>

  <?php Theme::page_builder(); ?>
  
<?php endwhile; ?>
