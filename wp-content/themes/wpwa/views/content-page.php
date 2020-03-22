<?php if (get_the_content() || is_archive() || is_single()): ?>
<div class="container pt-3 pb-3">
    <div class="row">
        <div class="col-sm-12">
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php endif; ?>