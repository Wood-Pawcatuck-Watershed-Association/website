<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

$content_type = [
    'text' => 'Text',
    'text_two_column' => 'Text Two Columns',
    'text_multi_column' => 'Text Multi Columns',
    'textarea' => 'Textarea',
    'shortcode' => 'Shortcode',
    'heading' => 'Heading',
    'image' => 'Image',
    'button' => 'Button',
    'space' => 'Space',
    'video' => 'Video',
    'video_card' => 'Video Card',
    'card' => 'Card',
    'accordion' => "Accordion",
    'faq' => "FAQ",
    'divider' => "Divider",
    'navigation' => "Navigation",
    'media_gallery' => 'Media Gallery'
];
$color_array = [
    '#ffffff',
    '#000000',
    '#333333',
    '#495EB1',
    '#63AF65',
    '#FF9F00'
];
$icon_array = [
    '' => '',
    'far fa-arrow-alt-circle-right' => 'Arrow Alt Circle Right',
    'far fa-arrow-alt-circle-down' => 'Arrow Alt Circle Down',
];
$text_align = [
    '' => '',
    'text-left' => 'Text Left',
    'text-center' => 'Text Center',
    'text-right' => 'Text Right',
];
$text_transform = [
    '' => '',
    'text-lowercase' => 'Lowercase',
    'text-uppercase' => 'Uppercase',
    'text-capitalize' => 'Capitalize',
];
$col_sm = [
    '' => '',
    'col-sm-1' => '1',
    'col-sm-2' => '2',
    'col-sm-3' => '3',
    'col-sm-4' => '4',
    'col-sm-5' => '5',
    'col-sm-6' => '6',
    'col-sm-7' => '7',
    'col-sm-8' => '8',
    'col-sm-9' => '9',
    'col-sm-10' => '10',
    'col-sm-11' => '11',
    'col-sm-12' => '12',
];
$col_md = [
    '' => '',
    'col-md-1' => '1',
    'col-md-2' => '2',
    'col-md-3' => '3',
    'col-md-4' => '4',
    'col-md-5' => '5',
    'col-md-6' => '6',
    'col-md-7' => '7',
    'col-md-8' => '8',
    'col-md-9' => '9',
    'col-md-10' => '10',
    'col-md-11' => '11',
    'col-md-12' => '12',
];
$col_lg = [
    '' => '',
    'col-lg-1' => '1',
    'col-lg-2' => '2',
    'col-lg-3' => '3',
    'col-lg-4' => '4',
    'col-lg-5' => '5',
    'col-lg-6' => '6',
    'col-lg-7' => '7',
    'col-lg-8' => '8',
    'col-lg-9' => '9',
    'col-lg-10' => '10',
    'col-lg-11' => '11',
    'col-lg-12' => '12',
];
$font_array = [
    '' => '',
    'openSans' => 'openSans'
];
$font_tags = [
    '' => '',
    'h2' => 'h2',
    'h3' => 'h3',
    'h4' => 'h4',
    'h5' => 'h5',
    'h6' => 'h6',
    'p' =>  'p',
    'span' => 'span',
    'div' => 'div'
];
$padding_top = [
    '' => '',
    'pt-0' => '0',
    'pt-1' => '1',
    'pt-2' => '2',
    'pt-3' => '3',
    'pt-4' => '4',
    'pt-5' => '5',
];

$padding_bottom = [
    '' => '',
    'pb-0' => '0',
    'pb-1' => '1',
    'pb-2' => '2',
    'pb-3' => '3',
    'pb-4' => '4',
    'pb-5' => '5',
];

$padding_left = [
    '' => '',
    'pl-0' => '0',
    'pl-1' => '1',
    'pl-2' => '2',
    'pl-3' => '3',
    'pl-4' => '4',
    'pl-5' => '5',
];

$padding_right = [
    '' => '',
    'pr-0' => '0',
    'pr-1' => '1',
    'pr-2' => '2',
    'pr-3' => '3',
    'pr-4' => '4',
    'pr-5' => '5',
];

$margin_top = [
    '' => '',
    'mt-0' => '0',
    'mt-1' => '1',
    'mt-2' => '2',
    'mt-3' => '3',
    'mt-4' => '4',
    'mt-5' => '5',
];

$margin_bottom = [
    '' => '',
    'mb-0' => '0',
    'mb-1' => '1',
    'mb-2' => '2',
    'mb-3' => '3',
    'mb-4' => '4',
    'mb-5' => '5',
];

$margin_left = [
    '' => '',
    'ml-0' => '0',
    'ml-1' => '1',
    'ml-2' => '2',
    'ml-3' => '3',
    'ml-4' => '4',
    'ml-5' => '5',
];

$margin_right = [
    '' => '',
    'mr-0' => '0',
    'mr-1' => '1',
    'mr-2' => '2',
    'mr-3' => '3',
    'mr-4' => '4',
    'mr-5' => '5',
];

$opacity = [
    '' => '',
    '0.1' => '10%',
    '0.2' => '20%',
    '0.3' => '30%',
    '0.4' => '40%',
    '0.5' => '50%',
    '0.6' => '60%',
    '0.7' => '70%',
    '0.8' => '80%',
    '0.9' => '90%',
    '1.0' => '100%',
];

$background_position = [
    '' => '',
    'center top' => 'Center Top',
    'center center' => 'Center Center',
    'center bottom' => 'Center Bottom',
    'left top' => 'Left Top',
    'left center' => 'Left Center',
    'left bottom' => 'Left Bottom',
    'right top' => 'Right Top',
    'right center' => 'Right Center',
    'right bottom' => 'Right Bottom',
    '25% top' => '25% Top',
    '25% center' => '25% Center',
    '25% bottom' => '25% Bottom',
];

$background_size = [
    'cover' => 'Cover',
    'contain' => 'Contain',
    'auto' => 'Auto'
];

Container::make( 'post_meta', 'Page Builder' )//PAGE BUILDER FIELDS
    ->where( 'post_type', '=', 'sections')
    ->or_where( 'post_id', '=', get_option( 'page_on_front' ) )
    ->add_fields( array(
    Field::make( 'complex', 'page_builder' )
        ->set_layout('tabbed-vertical')
        ->setup_labels(array(
            'plural_name' => 'Sections',
            'singular_name' => 'Section',
        ))
        ->add_fields( 'dynamic_section', "Section", array(
            Field::make("separator", "section_settings"),
            Field::make('text', 'section_title'),
            Field::make('checkbox', 'full_width_section')->set_width(20),
            Field::make('checkbox', 'content_contained')->set_width(20),
            Field::make('checkbox', 'vertical_align')->set_width(20),
            Field::make('checkbox', 'mobile_center_text')->set_width(20),
            Field::make('checkbox', 'mobile_reverse_columns')->set_width(20),
            Field::make('checkbox', 'hide_on_small')->set_width(30),
            Field::make('checkbox', 'hide_on_medium')->set_width(30),
            Field::make('checkbox', 'hide_on_large')->set_width(30),
            Field::make('checkbox', 'add_section_background'),
            Field::make('image', 'section_background_image')->set_value_type('url')->set_width(50)
            ->set_conditional_logic(array(
                 array(
                    'field' => 'add_section_background',
                    'value' => true,  
                ),
            )),
            Field::make('select', 'section_background_image_position')
            ->set_conditional_logic(array(
                 array(
                    'field' => 'add_section_background',
                    'value' => true,  
                ),
            ))
            ->set_width(50)
            ->add_options($background_position),
            Field::make( 'color', 'section_background_color')
            ->set_width(50)->set_palette( $color_array )
            ->set_conditional_logic(array(
                 array(
                    'field' => 'add_section_background',
                    'value' => true,  
                ),
            )),
            Field::make( 'select', 'section_background_color_opacity')->set_width(50)
            ->set_conditional_logic(array(
                 array(
                    'field' => 'add_section_background',
                    'value' => true,  
                ),
            ))
            ->add_options($opacity)->set_default_value( '' ),
            Field::make("select", "section_padding_top", "Padding Top")
            ->set_width(25)
            ->add_options($padding_top)->set_default_value( 'pt-4' ),
            Field::make("select", "section_padding_bottom", "Padding Bottom")
            ->set_width(25)
            ->add_options($padding_bottom)->set_default_value( 'pb-4' ),
            Field::make("select", "section_padding_left", "Padding Left")
            ->set_width(25)
            ->add_options($padding_left)->set_default_value( '' ),
            Field::make("select", "section_padding_right", "Padding Right")
            ->set_width(25)
            ->add_options($padding_right)->set_default_value( '' ),
             Field::make("select", "section_margin_top", "Margin Top")
            ->set_width(25)
            ->add_options($margin_top)->set_default_value( 'mt-0' ),
            Field::make("select", "section_margin_bottom","Margin Bottom")
            ->set_width(25)
            ->add_options($margin_bottom)->set_default_value( 'mb-0' ),
            Field::make("select", "section_margin_left", "Margin Left")
            ->set_width(25)
            ->add_options($margin_left)->set_default_value( '' ),
            Field::make("select", "section_margin_right","Margin Right")
            ->set_width(25)
            ->add_options($margin_right)->set_default_value( '' ),
            Field::make('text', 'section_class'),
            Field::make('text', 'section_id'),
            Field::make("select", "row_padding_top", "Row Padding Top")
            ->set_width(50)
            ->add_options($padding_top)->set_default_value( '' ),
            Field::make("select", "row_padding_bottom", "Row Padding Bottom")
            ->set_width(50)
            ->add_options($padding_bottom)->set_default_value( '' ),
            Field::make("separator", 'columns_seperator',"Columns"),
            Field::make( 'complex', 'columns' )
             ->set_layout('tabbed-horizontal')
             ->set_max(6)
             ->setup_labels( array(
                'plural_name' => 'Columns',
                'singular_name' => 'Column'
             ))   
            ->add_fields( 'column', array(
                Field::make('text', 'column_class'),
                Field::make('text', 'column_inner_class'),
                Field::make('checkbox', 'column_class_override')->set_width(30),
                Field::make('checkbox', 'add_column_background')->set_width(30),
                Field::make('checkbox', 'column_inner_options')->set_width(30),
                Field::make('checkbox', 'hide_on_small')->set_width(30),
                Field::make('checkbox', 'hide_on_medium')->set_width(30),
                Field::make('checkbox', 'hide_on_large')->set_width(30),
                Field::make('image', 'column_background_image')->set_value_type('url')->set_width(50)
                ->set_conditional_logic(array(
                     array(
                        'field' => 'add_column_background',
                        'value' => true,  
                    ),
                )),
                Field::make('select', 'column_background_image_position')
                ->set_conditional_logic(array(
                     array(
                        'field' => 'add_column_background',
                        'value' => true,  
                    ),
                ))
                ->set_width(50)
                ->add_options($background_position),
                Field::make( 'color', 'column_background_color')
                ->set_width(50)->set_palette( $color_array )
                ->set_conditional_logic(array(
                     array(
                        'field' => 'add_column_background',
                        'value' => true,  
                    ),
                )),
                Field::make( 'select', 'column_background_color_opacity')->set_width(50)
                ->set_conditional_logic(array(
                     array(
                        'field' => 'add_column_background',
                        'value' => true,  
                    ),
                ))
                ->add_options($opacity)->set_default_value( '1.0' ),
                Field::make("select", "column_class_override_sm", "Col SM")
                ->add_options($col_sm)->set_default_value( '' )->set_width(30)
                ->set_conditional_logic(array(
                     array(
                        'field' => 'column_class_override',
                        'value' => true,  
                    ),
                )),
                Field::make("select", "column_class_override_md", "Col MD")
                ->add_options($col_md)->set_default_value( '' )->set_width(30)
                ->set_conditional_logic(array(
                     array(
                        'field' => 'column_class_override',
                        'value' => true,  
                    ),
                )),
                Field::make("select", "column_class_override_lg", "Col LG")
                ->add_options($col_lg)->set_default_value( '' )->set_width(30)
                ->set_conditional_logic(array(
                     array(
                        'field' => 'column_class_override',
                        'value' => true,  
                    ),
                )),
                Field::make("select", "column_padding_top", "Padding Top")
                ->set_width(25)
                ->add_options($padding_top)->set_default_value( 'pt-4' ),
                Field::make("select", "column_padding_bottom", "Padding Bottom")
                ->set_width(25)
                ->add_options($padding_bottom)->set_default_value( 'pb-4' ),
                Field::make("select", "column_padding_left", "Padding Left")
                ->set_width(25)
                ->add_options($padding_left)->set_default_value( '' ),
                Field::make("select", "column_padding_right", "Padding Right")
                ->set_width(25)
                ->add_options($padding_right)->set_default_value( '' ),
                 Field::make("select", "column_margin_top", "Margin Top")
                ->set_width(25)
                ->add_options($margin_top)->set_default_value( '' ),
                Field::make("select", "column_margin_bottom","Margin Bottom")
                ->set_width(25)
                ->add_options($margin_bottom)->set_default_value( '' ),
                Field::make("select", "column_margin_left", "Margin Left")
                ->set_width(25)
                ->add_options($margin_left)->set_default_value( '' ),
                Field::make("select", "column_margin_right","Margin Right")
                ->set_width(25)
                ->add_options($margin_right)->set_default_value( '' ),
                Field::make("select", "column_inner_padding_top", "Inner Padding Top")
                ->set_conditional_logic(array(
                     array(
                        'field' => 'column_inner_options',
                        'value' => true,  
                    ),
                ))
                ->set_width(25)
                ->add_options($padding_top)->set_default_value( '' ),
                Field::make("select", "column_inner_padding_bottom", "Inner Padding Bottom")
                ->set_conditional_logic(array(
                     array(
                        'field' => 'column_inner_options',
                        'value' => true,  
                    ),
                ))
                ->set_width(25)
                ->add_options($padding_bottom)->set_default_value( '' ),
                Field::make("select", "column_inner_padding_left", "Inner Padding Left")
                ->set_conditional_logic(array(
                     array(
                        'field' => 'column_inner_options',
                        'value' => true,  
                    ),
                ))
                ->set_width(25)
                ->add_options($padding_left)->set_default_value( '' ),
                Field::make("select", "column_inner_padding_right", "Inner Padding Right")
                ->set_conditional_logic(array(
                     array(
                        'field' => 'column_inner_options',
                        'value' => true,  
                    ),
                ))
                ->set_width(25)
                ->add_options($padding_right)->set_default_value( '' ),
                 Field::make("select", "column_inner_margin_top", "Inner Margin Top")
                 ->set_conditional_logic(array(
                     array(
                        'field' => 'column_inner_options',
                        'value' => true,  
                    ),
                ))
                ->set_width(25)
                ->add_options($margin_top)->set_default_value( '' ),
                Field::make("select", "column_inner_margin_bottom","Inner Margin Bottom")
                ->set_conditional_logic(array(
                     array(
                        'field' => 'column_inner_options',
                        'value' => true,  
                    ),
                ))
                ->set_width(25)
                ->add_options($margin_bottom)->set_default_value( '' ),
                Field::make("select", "column_inner_margin_left", "Inner Margin Left")
                ->set_conditional_logic(array(
                     array(
                        'field' => 'column_inner_options',
                        'value' => true,  
                    ),
                ))
                ->set_width(25)
                ->add_options($margin_left)->set_default_value( '' ),
                Field::make("select", "column_inner_margin_right","Inner Margin Right")
                ->set_conditional_logic(array(
                     array(
                        'field' => 'column_inner_options',
                        'value' => true,  
                    ),
                ))
                ->set_width(25)
                ->add_options($margin_right)->set_default_value( '' ),
                Field::make( 'complex', 'column_content' )
                 ->setup_labels( array(
                    'plural_name' => 'Content',
                    'singular_name' => 'Content'
                 ))
                 ->add_fields( 'content-block', array(
                    Field::make("select", "content_type")
                    ->add_options($content_type),
                    Field::make( 'color', 'content_text_color')
                    ->set_palette( $color_array )
                    ->set_conditional_logic(array(
                        'relation' => 'OR',
                         array(
                            'field' => 'content_type',
                            'value' => 'text', 
                            'compare' => '=', 
                        ),
                    )),
                    Field::make( 'rich_text', 'content_text' )
                    ->set_conditional_logic(array(
                        'relation' => 'OR',
                         array(
                            'field' => 'content_type',
                            'value' => 'text', 
                            'compare' => '=', 
                        ),
                    )),
                    Field::make( 'color', 'content_text_two_column_color', "Text Color")
                    ->set_palette( $color_array )
                    ->set_conditional_logic(array(
                        'relation' => 'OR',
                         array(
                            'field' => 'content_type',
                            'value' => 'text_two_column', 
                            'compare' => '=', 
                        ),
                    )),
                    Field::make( 'rich_text', 'content_text_two_column_left', "Text Left" )
                    ->set_conditional_logic(array(
                        'relation' => 'OR',
                         array(
                            'field' => 'content_type',
                            'value' => 'text_two_column', 
                            'compare' => '=', 
                        ),
                    )),
                    Field::make( 'rich_text', 'content_text_two_column_right', "Text Right" )
                    ->set_conditional_logic(array(
                        'relation' => 'OR',
                         array(
                            'field' => 'content_type',
                            'value' => 'text_two_column', 
                            'compare' => '=', 
                        ),
                    )),
                    Field::make( 'color', 'content_text_multi_column_color', "Text Color")
                    ->set_palette( $color_array )
                    ->set_conditional_logic(array(
                        'relation' => 'OR',
                         array(
                            'field' => 'content_type',
                            'value' => 'text_multi_column', 
                            'compare' => '=', 
                        ),
                    )),
                    Field::make('complex', 'content_text_multi_columns', "Columns")
                       ->set_layout('tabbed-horizontal')
                        ->setup_labels( array(
                            'plural_name' => 'Columns',
                            'singular_name' => 'Column'
                        ))
                        ->add_fields(array(
                            Field::make('rich_text', 'content'),
                        ))
                        ->set_conditional_logic(array(
                             array(
                                'field' => 'content_type',
                                'value' => 'text_multi_column', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make( 'image', 'content_image' )
                    ->set_conditional_logic(array(
                        'relation' => 'OR',
                         array(
                            'field' => 'content_type',
                            'value' => 'image', 
                            'compare' => '=', 
                        ),
                    )),
                      Field::make( 'select', 'content_image_size', "Image Size" )
                       ->add_options(array(
                            'thumnnail' => 'Thumbnail',
                            'medium' => 'Medium',
                            'large' => 'Large',
                            'full' => 'Full'
                        ))
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'image', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('text', 'content_button_class',"Button Class")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'button', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('select', 'content_button_style',"Button Style")
                        ->add_options(array(
                            'btn-link' => 'Link',
                            'btn-btn' => 'Button',
                        ))
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'button', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('color', 'content_button_link_color',"Button Link Color")
                        ->set_palette( $color_array )
                        ->set_conditional_logic(array(
                            array(
                                'field' => 'content_type',
                                'value' => 'button', 
                                'compare' => '=', 
                            ),
                            'relation' => 'AND',
                             array(
                                'field' => 'content_button_style',
                                'value' => 'btn-link', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('select', 'content_button_color',"Button Color")
                        ->add_options(array(
                            'custom' => 'Custom',
                        ))
                        ->set_conditional_logic(array(
                            array(
                                'field' => 'content_type',
                                'value' => 'button', 
                                'compare' => '=', 
                            ),
                            'relation' => 'AND',
                             array(
                                'field' => 'content_button_style',
                                'value' => 'btn-btn', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make("color", "content_button_background", "Button Background Color")
                    ->set_palette( $color_array )
                     ->set_conditional_logic(array(
                            array(
                                'field' => 'content_type',
                                'value' => 'button', 
                                'compare' => '=', 
                            ),
                            'relation' => 'AND',
                             array(
                                'field' => 'content_button_color',
                                'value' => 'custom', 
                                'compare' => '=', 
                            ),
                            'relation' => 'AND',
                             array(
                                'field' => 'content_button_style',
                                'value' => 'btn-btn', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('text', 'content_button_text',"Button Text")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'button', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('text', 'content_button_aria_label',"Button Aria Label")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'button', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('text', 'content_button_custom_attribute',"Button Custom Attribute")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'button', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('text', 'content_button_link',"Button Link")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'button', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('select', 'content_button_size',"Button Size")
                        ->add_options(array(
                            'btn-sm' => 'Small',
                            'btn-md' => 'Medium',
                            'btn-lg' => 'Large',
                        ))
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'button', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('select', 'content_button_icon', "Button Icon")
                        ->add_options($icon_array)
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'button', 
                                'compare' => '=',
                            ),
                        )),
                    Field::make('color', 'content_button_icon_color',"Button Icon Color")
                    ->set_palette( $color_array )
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'button', 
                                'compare' => '=',
                            ),
                        )),
                    Field::make('checkbox', 'content_button_target_video',"Target Video")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'button', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('text', 'content_space')
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'space', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('image', 'content_card_image')
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'card', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('select', 'content_card_image_position')
                    ->set_conditional_logic(array(
                        'relation' => 'OR',
                         array(
                                'field' => 'content_type',
                                'value' => 'card', 
                                'compare' => '=', 
                            ),
                    ))->add_options($background_position)->set_width(50),
                    Field::make('select', 'content_card_image_size')
                    ->set_conditional_logic(array(
                        'relation' => 'OR',
                         array(
                                'field' => 'content_type',
                                'value' => 'card', 
                                'compare' => '=', 
                            ),
                    ))->add_options($background_size)->set_width(50),
                     Field::make('image', 'content_card_image_mobile')
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'card', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('select', 'content_card_image_mobile_position')
                    ->set_conditional_logic(array(
                        'relation' => 'OR',
                         array(
                                'field' => 'content_type',
                                'value' => 'card', 
                                'compare' => '=', 
                            ),
                    ))->add_options($background_position)->set_width(50),
                    Field::make('select', 'content_card_image_mobile_size')
                    ->set_conditional_logic(array(
                        'relation' => 'OR',
                         array(
                                'field' => 'content_type',
                                'value' => 'card', 
                                'compare' => '=', 
                            ),
                    ))->add_options($background_size)->set_width(50),
                    Field::make( 'color', 'content_card_heading_color', "Heading Color")
                    ->set_width(50)->set_palette( $color_array )
                    ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'card', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('select', 'content_card_heading_font', "Heading Font")
                    ->add_options($font_array)->set_default_value( '' )
                    ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'card', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('select', 'content_card_heading_tag', "Heading Tag")
                        ->add_options($font_tags)
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'card', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('select', 'content_card_heading_tag_class', "Heading Tag Class")
                        ->set_help_text( 'This will give a heading the ability to inherit the style of another' )
                        ->add_options($font_tags)
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'card', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('textarea', 'content_card_heading_text', "Heading Text")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'card', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('select', 'content_card_heading_transform', "Heading Transform")
                        ->add_options($text_transform)
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'card', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('select', 'content_card_heading_align', "Heading Align")
                        ->add_options($text_align)
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'card', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make( 'color', 'content_card_text_color', "Text Color")
                    ->set_width(50)->set_palette( $color_array )
                    ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'card', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('rich_text', 'content_card_text', "Card Text")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'card', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('text', 'content_card_cta_text', "Card CTA Text")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'card', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('text', 'content_card_cta_aria_label', "Card CTA Aria Label")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'card', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('text', 'content_card_cta_link', "Card CTA Link")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'card', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('checkbox', 'content_card_cta_link_target', "Card CTA Link Target New Window")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'card', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('checkbox', 'content_card_cta_custom_attribute', "Card CTA Link Custom Attribute")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'card', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('checkbox', 'content_card_multicolumn', "Multi Column Card Content")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'card', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('complex', 'content_card_columns')
                       ->set_layout('tabbed-horizontal')
                        ->setup_labels( array(
                            'plural_name' => 'Columns',
                            'singular_name' => 'Column'
                        ))
                        ->add_fields(array(
                            Field::make('rich_text', 'content'),
                        ))
                        ->set_conditional_logic(array(
                            array(
                                'field' => 'content_card_multicolumn',
                                'value' => true, 
                                'compare' => '=', 
                            ),
                            'relation' => 'AND',
                             array(
                                'field' => 'content_type',
                                'value' => 'card', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('text', 'content_video', "Video URL")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'video', 
                                'compare' => '=', 
                            ),
                        )),
                     Field::make('image', 'content_video_image', "Video Preview Image")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'video', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('textarea', 'content_video_transcript', "Video Transcript")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'video', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('text', 'content_video_transcript_heading', "Video Transcript Heading")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'video', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('text', 'content_video_card', "Video URL")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'video_card', 
                                'compare' => '=', 
                            ),
                        )),
                     Field::make('image', 'content_video_card_image', "Video Preview Image")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'video_card', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('textarea', 'content_video_card_text', "Video Text")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'video_card', 
                                'compare' => '=', 
                            ),
                        )), 
                    Field::make('text', 'content_video_card_button_text', "Video Button Text")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'video_card', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('textarea', 'content_video_card_transcript', "Video Transcript")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'video_card', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('text', 'content_video_card_transcript_heading', "Video Transcript Heading")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'video_card', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('textarea', 'content_textarea_text', "Textarea Content")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'textarea', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('text', 'content_shortcode', "Shortcode")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'shortcode', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make( 'color', 'content_heading_color', "Heading Color")
                    ->set_width(50)->set_palette( $color_array )
                    ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'heading', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('select', 'content_heading_font', "Heading Font")
                    ->add_options($font_array)->set_default_value( '' )
                    ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'heading', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('select', 'content_heading_tag', "Heading Tag")
                        ->add_options($font_tags)
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'heading', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('select', 'content_heading_tag_class', "Heading Tag Class")
                        ->set_help_text( 'This will give a heading the ability to inherit the style of another' )
                        ->add_options($font_tags)
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'heading', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('textarea', 'content_heading_text', "Heading Text")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'heading', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('select', 'content_heading_transform', "Heading Transform")
                        ->add_options($text_transform)
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'heading', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('select', 'content_heading_align', "Heading Align")
                        ->add_options($text_align)
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'heading', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make( 'complex', 'content_accordion' )
                        ->setup_labels( array(
                            'plural_name' => 'Accordions',
                            'singular_name' => 'Accordion'
                        ))
                        ->add_fields(array(
                            Field::make('text', 'title'),
                            Field::make('textarea', 'content'),
                        )) 
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'accordion', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make( 'complex', 'content_faq' )
                        ->setup_labels( array(
                            'plural_name' => 'Faqs',
                            'singular_name' => 'Faq'
                        ))
                        ->add_fields(array(
                            Field::make('text', 'title'),
                            Field::make('rich_text', 'content'),
                        )) 
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'faq', 
                                'compare' => '=', 
                            ),
                        ))->set_header_template( '
                        <%- "FAQ: " + title %>
                    ' ),
                    Field::make( 'checkbox', 'content_divider', "Add Divider" )
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'divider', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make( 'text', 'content_navigation_heading', "Navigation Heading Left" )
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'navigation', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make( 'text', 'content_navigation_heading_select', "Navigation Heading Select" )
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'navigation', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make( 'complex', 'content_navigation' )
                        ->setup_labels( array(
                            'plural_name' => 'Navigation',
                            'singular_name' => 'Nav'
                        ))
                        ->add_fields(array(
                            Field::make('text', 'title'),
                            Field::make('text', 'link'),
                            Field::make('text', 'css_class'),
                        )) 
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'navigation', 
                                'compare' => '=', 
                            ),
                        ))->set_header_template( '
                        <%- "Nav: " + title %>
                    ' ),
                    Field::make('media_gallery', 'media_gallery')
                    ->set_type( array( 'image', 'video' ) )
                    ->set_duplicates_allowed( false )
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'media_gallery', 
                                'compare' => '=', 
                            ),
                        )),
                ))->set_header_template( '<%- content_type %>' )//Content Block Complex--End  
            ))//Column Complex--End
        ))//Dynamic Section Complex--End
        ->add_fields( 'sections', array(
         Field::make( 'association', 'section_sections' )
            ->set_types( array(
                array(
                    'type' => 'post',
                    'post_type' => 'sections',
                ),
            ))
        ))
        ->add_fields( 'media_gallery', array(
            Field::make( 'media_gallery', 'media_gallery' )
            ->set_type( array( 'image', 'video' ) )
            ->set_duplicates_allowed( false ),
        ))
        ->add_fields( 'feature_cards', array(
            Field::make( 'complex', 'feature_cards' )
            ->set_layout('tabbed-horizontal')
            ->setup_labels(array(
                'plural_name' => 'Cards',
                'singular_name' => 'Card',
            ))
            ->add_fields( array(
                Field::make('text', 'title'),
                Field::make('textarea', 'content'),
                Field::make('text', 'link'),
                Field::make('text', 'learn_more_text')
                ->set_default_value('Learn More')
            ))
        ))
));//Page Builder Fields Array--End