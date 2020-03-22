<?php if (get_the_content()): ?>
<div class="container pt-3 pb-3">
    <div class="row">
    		<div class="col-md-4 d-none d-md-block">
    			<div class="page-sidebar">
    				<?php $page_sidebar = carbon_get_the_post_meta('page_sidebar'); ?>
	    			<?php if (is_active_sidebar($page_sidebar)): ?>
			  			<?php dynamic_sidebar($page_sidebar); ?>
			  		<?php endif; ?>
    			</div>
    		</div>
        <div class="col-md-8">
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php endif; ?>