<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Home Page Options' )
    ->where( 'post_id', '=', get_option( 'page_on_front' ) )
    ->add_fields( array(
        Field::make('text', 'front_page_text')
    ));