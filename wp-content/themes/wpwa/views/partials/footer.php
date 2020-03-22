<?php
$footer_copy = function_exists('carbon_get_theme_option') ? carbon_get_theme_option('footer_copy') : null;
$date = date('Y ');
?>
<?php get_template_part('views/components/cta'); ?>
<footer class="footer text-light">
    <div class="footer__top bg-dark">
        <div class="container">
            <div class="row pt-5 pb-5">

                <?php if (is_active_sidebar('footer-column-1')) : ?>
                    <div class="col-md d-flex justify-content-md-center">
                        <?php dynamic_sidebar('footer-column-1'); ?>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('footer-column-2')) : ?>
                    <div class="col-md d-flex justify-content-md-center">
                        <?php dynamic_sidebar('footer-column-2'); ?>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('footer-column-3')) : ?>
                    <div class="col-md d-flex justify-content-md-center">
                        <?php dynamic_sidebar('footer-column-3'); ?>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('footer-column-4')) : ?>
                    <div class="col-md d-flex justify-content-md-center">
                        <?php dynamic_sidebar('footer-column-4'); ?>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('footer-column-5')) : ?>
                    <div class="col-md d-flex justify-content-md-center">
                        <?php dynamic_sidebar('footer-column-5'); ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <div class="footer__bottom bg-pitchBlack">
        <div class="container text-light">
            <div class="row pt-3 pb-0">
                <div class="col d-flex justify-content-md-center">
                    <?php if (!empty($footer_copy)) : ?>
                        <?= "<p><small>&copy; {$date} {$footer_copy}</small></p>"; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</footer>
