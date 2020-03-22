<?php

namespace Roots\Sage\Classes;

class Setup
{

    public function init()
    {
        add_action('after_setup_theme', array($this, 'setup'));
        add_action('widgets_init', array($this, 'widgets_init'));
        add_action('wp_enqueue_scripts', array($this, 'assets'), 100);
    }
    /**
     * Theme setup
     */
    public function setup()
    {
        // Enable features from Soil when plugin is activated
        // https://roots.io/plugins/soil/
        add_theme_support('soil-clean-up');
        add_theme_support('soil-nav-walker');
        add_theme_support('soil-nice-search');
        add_theme_support('soil-jquery-cdn');
        add_theme_support('soil-relative-urls');

        // Make theme available for translation
        // Community translations can be found at https://github.com/roots/sage-translations
        load_theme_textdomain('sage', get_template_directory() . '/lang');

        // Enable plugins to manage the document title
        // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
        add_theme_support('title-tag');

        // Register wp_nav_menu() menus
        // http://codex.wordpress.org/Function_Reference/register_nav_menus
        register_nav_menus([
            'primary_navigation' => __('Primary Navigation', 'sage')
        ]);

        // Enable post thumbnails
        // http://codex.wordpress.org/Post_Thumbnails
        // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
        // http://codex.wordpress.org/Function_Reference/add_image_size
        add_theme_support('post-thumbnails');
        add_image_size('logo', 80, 100, false);


        /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 400,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        // Add support for Block Styles.
        add_theme_support('wp-block-styles');

        // Add support for full and wide align images.
        add_theme_support('align-wide');

        // Add support for editor styles.
        add_theme_support('editor-styles');

        // Enqueue editor styles.
        add_editor_style('style-editor.css');

        // Add custom editor font sizes.
        add_theme_support(
            'editor-font-sizes',
            array(
                array(
                    'name'      => __('Small', 'sage'),
                    'shortName' => __('S', 'sage'),
                    'size'      => 19.5,
                    'slug'      => 'small',
                ),
                array(
                    'name'      => __('Normal', 'sage'),
                    'shortName' => __('M', 'sage'),
                    'size'      => 22,
                    'slug'      => 'normal',
                ),
                array(
                    'name'      => __('Large', 'sage'),
                    'shortName' => __('L', 'sage'),
                    'size'      => 36.5,
                    'slug'      => 'large',
                ),
                array(
                    'name'      => __('Huge', 'sage'),
                    'shortName' => __('XL', 'sage'),
                    'size'      => 49.5,
                    'slug'      => 'huge',
                ),
            )
        );

        // Editor color palette.
        add_theme_support(
            'editor-color-palette',
            array(
                array(
                    'name'  => __('Primary', 'sage'),
                    'slug'  => 'primary',
                    'color' => '#333',
                ),
                array(
                    'name'  => __('Secondary', 'sage'),
                    'slug'  => 'secondary',
                    'color' => '#333',
                ),
                array(
                    'name'  => __('Dark Gray', 'sage'),
                    'slug'  => 'dark-gray',
                    'color' => '#111',
                ),
                array(
                    'name'  => __('Light Gray', 'sage'),
                    'slug'  => 'light-gray',
                    'color' => '#767676',
                ),
                array(
                    'name'  => __('White', 'sage'),
                    'slug'  => 'white',
                    'color' => '#FFF',
                ),
            )
        );

        // Add support for responsive embedded content.
        add_theme_support('responsive-embeds');


        // Use main stylesheet for visual editor
        // To add custom styles edit /assets/styles/layouts/_tinymce.scss
        add_editor_style(Theme::asset_path('styles/main.css'));
    }

    /**
     * Register sidebars
     */
    public function widgets_init()
    {
        register_sidebar([
            'name'          => __('Primary', 'sage'),
            'id'            => 'sidebar-primary',
            'before_widget' => '<section class="widget %1$s %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ]);

        register_sidebar([
            'name'          => __('Footer', 'sage'),
            'id'            => 'sidebar-footer',
            'before_widget' => '<section class="widget %1$s %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h6>',
            'after_title'   => '</h6>'
        ]);

        register_sidebar([
            'name'          => __('Footer Column 1', 'sage'),
            'id'            => 'footer-column-1',
            'before_widget' => '<section class="widget %1$s %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h6>',
            'after_title'   => '</h6>'
        ]);

        register_sidebar([
            'name'          => __('Footer Column 2', 'sage'),
            'id'            => 'footer-column-2',
            'before_widget' => '<section class="widget %1$s %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h6>',
            'after_title'   => '</h6>'
        ]);

        register_sidebar([
            'name'          => __('Footer Column 3', 'sage'),
            'id'            => 'footer-column-3',
            'before_widget' => '<section class="widget %1$s %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h6>',
            'after_title'   => '</h6>'
        ]);

        register_sidebar([
            'name'          => __('Footer Column 4', 'sage'),
            'id'            => 'footer-column-4',
            'before_widget' => '<section class="widget %1$s %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h6>',
            'after_title'   => '</h6>'
        ]);

        register_sidebar([
            'name'          => __('Footer Column 5', 'sage'),
            'id'            => 'footer-column-5',
            'before_widget' => '<section class="widget %1$s %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h6>',
            'after_title'   => '</h6>'
        ]);

        register_sidebar([
            'name'          => __('Footer Copyright', 'sage'),
            'id'            => 'footer-copyright',
            'before_widget' => '<section class="widget %1$s %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h6>',
            'after_title'   => '</h6>'
        ]);

        register_sidebar([
            'name'          => __('Projects', 'sage'),
            'id'            => 'projects-sidebar',
            'before_widget' => '<section class="widget %1$s %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h6>',
            'after_title'   => '</h6>'
        ]);

        register_sidebar([
            'name'          => __('Newsletters', 'sage'),
            'id'            => 'newsletters-sidebar',
            'before_widget' => '<section class="widget %1$s %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h6>',
            'after_title'   => '</h6>'
        ]);

        register_sidebar([
            'name'          => __('Board of Directors', 'sage'),
            'id'            => 'board-sidebar',
            'before_widget' => '<section class="widget %1$s %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h6>',
            'after_title'   => '</h6>'
        ]);

        register_sidebar([
            'name'          => __('Annual Reports', 'sage'),
            'id'            => 'annual-reports-sidebar',
            'before_widget' => '<section class="widget %1$s %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h6>',
            'after_title'   => '</h6>'
        ]);
    }


    /**
     * Determine which pages should NOT display the sidebar
     */
    public static function display_sidebar()
    {
        static $display;

        isset($display) || $display = in_array(true, [
            // The sidebar will NOT be displayed if ANY of the following return true.
            // @link https://codex.wordpress.org/Conditional_Tags
        ]);

        return apply_filters('sage/display_sidebar', $display);
    }

    /**
     * Theme assets
     */
    function assets()
    {
        wp_enqueue_style('sage/css', Theme::asset_path('css/main.css'), false, null);
        wp_enqueue_style('sage/googlefonts', '//fonts.googleapis.com/css?family=Lato:300,400,700,900|Open+Sans:300,400,600,700,900', false, null);
        //wp_enqueue_style('sage/fontawesome', '//use.fontawesome.com/releases/v5.0.6/css/all.css', false, null);

        if (is_single() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }

        wp_enqueue_script('sage/js', Theme::asset_path('js/main.js'), ['jquery', 'wp-element'], null, true);

        wp_localize_script('sage/js', 'WPREST', array(
            'root' => esc_url_raw(rest_url()),
            'nonce' => wp_create_nonce('wp_rest'),
            'current_ID' => get_the_ID()
        ));
    }
}
