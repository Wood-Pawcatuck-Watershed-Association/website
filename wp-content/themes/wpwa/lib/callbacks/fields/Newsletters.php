<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

$newsletter_labels = array(
    'plural_name' => 'Newsletters',
    'singular_name' => 'Newsletter',
);

Container::make('post_meta', 'Newsletter Options')
    ->where('post_type', '=', 'cpt_newsletters')
    ->add_fields(array(
        Field::make('complex', 'newsletter_seasons', 'Newsletter Issues (Seasons)')
            ->set_layout('tabbed-vertical')
            ->setup_labels($newsletter_labels)
            ->add_fields(array(
                Field::make('text', 'newsletter_season', 'Newsletter Season'),
                Field::make('radio', 'upload_or_path', 'Report File')
                    ->set_width(50)
                    ->add_options(array(
                        'upload' => 'Upload',
                        'path' => 'Path'
                    )),
                Field::make('file', 'newsletter_upload', 'Upload Report (PDF)')
                    ->set_width(50),
                Field::make('text', 'newsletter_path', 'Report Path (URL)')
                    ->set_width(50),
            ))
            ->set_default_value(array(
                array(
                    'newsletter_season' => 'Winter',
                ),
                array(
                    'newsletter_season' => 'Spring',
                ),
                array(
                    'newsletter_season' => 'Summer',
                ),
                array(
                    'newsletter_season' => 'Fall',
                ),
            ))
            ->set_header_template('
			    <%- newsletter_season ? newsletter_season : "Newsletter" %>
			'),
    ));
