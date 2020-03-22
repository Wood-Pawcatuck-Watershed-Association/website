<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Sidebar Page Options')
    ->where('post_template', '=', 'page-templates/template-sidebar.php')
    ->set_context('side')
    ->add_fields(array(
        Field::make('sidebar', 'page_sidebar', 'Select a Sidebar')
            ->set_excluded_sidebars(
                array('default-sidebar', 'footer-column-1', 'footer-column-2', 'footer-column-3', 'footer-column-4', 'footer-column-5', 'sidebar-footer', 'footer-copyright')
            )
    ));
