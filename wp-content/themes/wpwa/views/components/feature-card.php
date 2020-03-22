	<div class="col-sm-12 mb-5">
	    <a href="<?= get_the_permalink(); ?>" class="feature-card">
	        <div class="feature-card__header">
	            <h5 class="feature-card__title"><?php the_title(); ?></h5>
	            <?php $project_types = get_the_terms(get_the_ID(), 'ct_project-type'); ?>
	            <?php if (!empty($project_types)) : ?>
	                <?php foreach ($project_types as $type) : ?>
	                    <p href="#" class="badge badge-green"><?= $type->name; ?></p>
	                <?php endforeach; ?>
	            <?php endif; ?>
	        </div>
	        <div class="feature-card__body">
	            <p class="feature-card__text"><?php echo wp_strip_all_tags(get_the_excerpt(), true); ?></p>
	        </div>
	        <div class="feature-card__footer text-right">
	            <div class="feature-card__footer--link">
	                <em class="feature-card__footer--linkLearnMore">
	                    Learn more
	                </em>
	                <span class="feature-card__footer--linkArrow">
	                    <i class="fas fa-long-arrow-alt-right fa-lg color-blue"></i>
	                </span>
	            </div>
	        </div>
	    </a>
	</div>
