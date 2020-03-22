<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Page Banner')
    ->where('post_id', '=', get_option('page_on_front'))
    ->add_fields(array(
        Field::make('image', 'banner_background_image')->set_value_type('url'),
        Field::make('text', 'banner_heading'),
        Field::make('text', 'banner_sub_heading'),
        Field::make('text', 'banner_button_text'),
        Field::make('text', 'banner_button_link')
    ));
