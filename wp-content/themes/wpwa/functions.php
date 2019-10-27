<?php
/**
 * Composer Autoload - Using PSR4 with Namespace Roots\Sage pointing to the lib folder.
 */
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}


/**
 * Initialize all Theme Functions
 */
if ( class_exists( 'Roots\\Sage\\Classes\\Theme' ) ) {
  $Theme = new Roots\Sage\Classes\Theme();
  $Theme->add_filters();
  $Theme->add_actions();
  $Theme->register_custom_taxonomies();
  $Theme->register_custom_post_types();
  $Theme->add_shortcodes();
  $Theme->register_widgets();
}


/**
 * Initialize all the Carbon Fields
 */
if ( class_exists( 'Roots\\Sage\\Classes\\ThemeCarbonFields' ) ) {

  add_action( 'after_setup_theme', function(){
    // Require once the Composer Autoload
    if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
      \Carbon_Fields\Carbon_Fields::boot();
    }
  });

  $ThemeCarbonFields = new Roots\Sage\Classes\ThemeCarbonFields();
  $ThemeCarbonFields->register_fields();
}