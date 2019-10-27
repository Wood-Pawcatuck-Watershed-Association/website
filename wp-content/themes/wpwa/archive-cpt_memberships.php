<div class="container">
	<div class="row justify-content-around">
		<?php $Query = new WP_Query([
			'post_type' => 'cpt_memberships',
			'orderby' => 'menu_order',
			'order' => 'ASC',
			'posts_per_page' => '99'
		]);
		?>
		<?php while ($Query->have_posts()) : $Query->the_post(); ?>

			<?php get_template_part('templates/membership-card'); ?>

		<?php endwhile; ?>
	</div>
</div>

<?php the_posts_navigation(); ?>
