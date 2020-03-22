<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Event Options')
    ->where('post_type', '=', 'cpt_events')
    ->add_fields(array(
        Field::make('text', 'event_heading'),
        Field::make('rich_text', 'event_description'),
        Field::make('date', 'event_start_date'),
        Field::make('date', 'event_end_date'),
    ));
Container::make('post_meta', 'Events Template')
    ->where('post_template', '=', 'page-templates/template-events.php')
    ->add_fields(array(
        Field::make('rich_text', 'events_template_before_content'),
        Field::make('rich_text', 'events_template_after_content'),
    ));
