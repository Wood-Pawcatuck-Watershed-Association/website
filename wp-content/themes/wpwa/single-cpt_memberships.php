<?php while (have_posts()) : the_post(); ?>
<div <?php post_class('container'); ?>>
    <div class="row mb-4">
        <div class="col">
            <a href="/memberships"><i class="fas fa-long-arrow-alt-left"></i> Back to Memberships</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= wpautop(carbon_get_the_post_meta('membership_signup_form_description')); ?>
        </div>
        <div class="col-md-6">
            <?php the_content(); ?>
            <div id="bloomerang-loading" class="text-center">
                <p class="mt-4">Loading Form...</p>
                <i class="fa-3x fas fa-circle-notch fa-spin"></i>
            </div>
            <?php if (!empty(carbon_get_the_post_meta('bloomerang_fallback_link'))) : ?>
            <div id="bloomerang-fallback" class="text-center" style="display:none;">
                <p class="mt-4">
                    <div>
                        <h4>There seems to be an issue loading the form. <br>The button below will take you to our
                            secure form.</h4>
                        <a class="btn btn-orange text-white"
                            href="<?= carbon_get_the_post_meta('bloomerang_fallback_link'); ?>"
                            target="_blank">Click Here</a>
                    </div>
                </p>
                <p>&nbsp;</p>
            </div>
            <?php endif; ?>
            <?= carbon_get_the_post_meta('membership_signup_form'); ?>
            <script>
                window.onload = function() {
                    if (Bloomerang._isReady) {
                        setTimeout(function() {
                            document.getElementById('bloomerang-loading').style.display = 'none';
                        }, 500);
                    } else {
                        document.getElementById('bloomerang-loading').style.display = 'none';
                        if (document.getElementById('bloomerang-fallback')) {
                            document.getElementById('bloomerang-fallback').style.display = 'block';
                        }
                    }
                };
            </script>
        </div>
    </div>
</div>
<?php endwhile;
