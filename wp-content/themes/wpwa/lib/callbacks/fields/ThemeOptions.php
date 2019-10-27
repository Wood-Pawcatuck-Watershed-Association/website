<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', __( 'Website Settings', 'sage' ) )
    ->add_tab( __('Header'), array(
        Field::make( 'image', 'site_logo', 'Logo' ),
        Field::make( 'image', 'mobile_logo', 'Mobile Logo' )
    ))
    ->add_tab( __('Footer'), array(
        Field::make( 'textarea', 'footer_copy', 'Footer Copy' ),
    ))
    ->add_tab( __('Global'), array(
        Field::make( 'text', 'global_join_link', 'Global Join Link' ),
        Field::make( 'text', 'global_donate_link', 'Global Donate Link' )
    ));