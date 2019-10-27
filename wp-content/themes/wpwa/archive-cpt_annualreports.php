<?php $Query = new WP_Query([
	'post_type' => 'cpt_annualreports',
	'orderby' => 'date',
	'order' => 'DESC',
	'posts_per_page' => '99'
]);
?>
<div class="container pb-5">
	<div class="row justify-content-around">
		<div class="col-md-4 d-none d-md-block">
			<div class="page-sidebar">
  			<?php if (is_active_sidebar('annual-reports-sidebar')): ?>
	  			<?php dynamic_sidebar('annual-reports-sidebar'); ?>
	  		<?php endif; ?>
			</div>
		</div>
		<div class="col-md-8">
			<ul class="list-files list-group list-group-flush d-inline-block">
			<?php while ($Query->have_posts()) : $Query->the_post(); ?>

				<?php get_template_part('templates/annual-report'); ?>

			<?php endwhile; ?>
			</ul>
		</div>
	</div>
</div>

<?php //the_posts_navigation(); ?>
