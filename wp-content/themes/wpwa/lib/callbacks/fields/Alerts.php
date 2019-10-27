<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Alert Options' )
		->where('post_type', '=', 'cpt_alerts')
    ->add_fields( array(
        Field::make('text', 'alert_heading'),
        Field::make('rich_text', 'alert_description'),
        Field::make( 'date', 'alert_start_date'),
        Field::make( 'date', 'alert_end_date'),
    ));