<?php
use Roots\Sage\Classes\BootstrapNavwalker;

$site_logo = function_exists('carbon_get_theme_option') ? carbon_get_theme_option('site_logo') : null;
?>
<header>

    <div class="header navbar navbar-expand-md bg-dark">
        <div class="container">
            <a class="navbar-brand"
                href="<?= get_home_url('/'); ?>">
                <?= $site_logo ? wp_get_attachment_image($site_logo, 'logo', false, array('class'=> 'img-fluid nav-logo')) : get_bloginfo('name');?>
            </a>
            <?php
            wp_nav_menu([
                'menu'            => 'primary_navigation',
                'theme_location'  => 'primary_navigation',
                'container'       => 'nav',
                'container_id'    => 'primary-navigation',
                'container_class' => 'collapse navbar-collapse',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav ml-auto Lato-Bold',
                'depth'           => 2,
                'fallback_cb'     => 'BootstrapNavwalker::fallback',
                'walker'          => new BootstrapNavwalker()
            ]);
            ?>
            <div class="header__buttons d-none d-sm-flex">
                <a href="/donate/" class="btn btn-blue btn-lg ml-2">Donate</a>
                <a href="/renew/" class="btn btn-green btn-lg ml-2">Renew</a>
            </div>

            <button class="hamburger hamburger--squeeze navbar-toggler" type="button" data-toggle="collapse"
                data-target="#primary-navigation" aria-label="Toggle navigation" aria-expanded="false">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>

</header>
