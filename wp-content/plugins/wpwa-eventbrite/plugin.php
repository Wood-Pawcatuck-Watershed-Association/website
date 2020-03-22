<?php
/**
 * @package ZGM_Basic
 * @version 1.0
 */
/*
Plugin Name: Eventbritify
Plugin URI: https://github.com/Wood-Pawcatuck-Watershed-Association/website
Description: This is a plugin for adding eventbrite events
Author: Jon Waldstein
Version: 1.0
Author URI: https://jonwaldstein.com
Text Domain: zgm
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

// Require once the Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}


/**
 * Initialize all Theme Functions
 */
if ( class_exists( 'ZGM\\Plugin\\Classes\\Plugin' ) ) {
  $Plugin = new ZGM\Plugin\Classes\Plugin();
  $Plugin->init();
  $Plugin->define_admin_hooks();
  $Plugin->define_public_hooks();
  $Plugin->crons();
}

/**
 * Initialize all the Carbon Fields
 */
if ( class_exists( 'ZGM\\Plugin\\Classes\\PluginCarbonFields' ) ) {

  add_action( 'after_setup_theme', function(){
    // Require once the Composer Autoload
    if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
      \Carbon_Fields\Carbon_Fields::boot();
    }
  });

  $PluginCarbonFields = new ZGM\Plugin\Classes\PluginCarbonFields();
  $PluginCarbonFields->register_fields();
}
