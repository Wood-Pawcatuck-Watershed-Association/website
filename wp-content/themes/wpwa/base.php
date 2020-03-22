<?php

use Roots\Sage\Classes\Wrapper;
use Roots\Sage\Classes\Setup;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part('views/partials/head'); ?>

<body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
    do_action('get_header');
    get_template_part('views/partials/header');
    get_template_part('views/partials/banner');
    ?>
    <div class="wrap">
        <div class="content">
            <main class="main-content">
                <?php include Wrapper::template_path(); ?>
            </main><!-- /.main -->
            <?php if (Setup::display_sidebar()) : ?>
                <aside class="sidebar">
                    <?php include Wrapper::sidebar_path(); ?>
                </aside><!-- /.sidebar -->
            <?php endif; ?>
        </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
    do_action('get_footer');
    get_template_part('views/partials/footer');
    wp_footer();
    ?>
</body>

</html>
