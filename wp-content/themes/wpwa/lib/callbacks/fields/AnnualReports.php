<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Annual Reports Options' )
		->where('post_type', '=', 'cpt_annualreports')
    ->add_fields( array(
    	Field::make( 'radio', 'upload_or_path', 'Report File' )
    	->set_width(50)
	    ->add_options( array(
	        'upload' => 'Upload',
	        'path' => 'Path'
	    	)),
    		Field::make( 'file', 'report_upload', 'Upload Report (PDF)' )
    		->set_width(50)
    		->set_conditional_logic( array(
		        array(
		            'field' => 'upload_or_path',
		            'value' => 'upload',
		        )
		    )),
		    Field::make( 'text', 'report_path', 'Report Path (URL)' )
    		->set_width(50)
    		->set_conditional_logic( array(
		        array(
		            'field' => 'upload_or_path',
		            'value' => 'path',
		        )
		    )),
    ));