<?php
namespace Roots\Sage\Classes;

class ThemeActions
{
	public function init()
  {
  	add_action('customize_register', array($this,'customize_register') );
		add_action('customize_preview_init', array($this,'customize_preview_js') );
  }

  /**
	 * Add postMessage support
	 */
	public function customize_register($wp_customize) {
	  $wp_customize->get_setting('blogname')->transport = 'postMessage';
	}


	/**
	 * Customizer JS
	 */
	public function customize_preview_js() {
	  wp_enqueue_script('sage/customizer', Theme::asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
	}
}