<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Block;

Container::make( 'theme_options', __( 'EventBrite Options' ) )
    ->add_tab( 'api', array(
        Field::make( 'checkbox', 'eventbrite_schedule_cron', 'EventBrite Schedule Cron' ),
        Field::make( 'text', 'eventbrite_oauth_token', 'EventBrite OAuth Token' ),
        Field::make( 'text', 'eventbrite_organization_id', 'EventBrite organization ID' ),
        Field::make( 'textarea', 'eventbrite_events_json', 'EventBrite Events Json' ),
        Field::make( 'textarea', 'eventbrite_tickets_json', 'EventBrite Tickets Json' ),
    ) );