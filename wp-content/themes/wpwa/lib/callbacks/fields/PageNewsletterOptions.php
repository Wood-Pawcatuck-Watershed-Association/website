<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Newsletter Page Options')
    ->where('post_template', '=', 'page-templates/template-newsletters.php')
    ->add_fields(array(
        Field::make('text', 'cta_button_text'),
        Field::make('text', 'cta_modal_heading'),
        Field::make('textarea', 'cta_modal_content'),
    ));
