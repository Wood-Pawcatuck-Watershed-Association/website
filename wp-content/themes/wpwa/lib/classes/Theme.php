<?php

namespace Roots\Sage\Classes;


final class Theme
{
    public function add_filters()
    {
        if (class_exists('Roots\\Sage\\Classes\\ThemeFilters')) {
            $Filters = new ThemeFilters();
            $Filters->init();
        }
    }

    public function add_actions()
    {
        if (class_exists('Roots\\Sage\\Classes\\ThemeActions')) {
            $Actions = new ThemeActions();
            $Actions->init();
        }
        if (class_exists('Roots\\Sage\\Classes\\Setup')) {
            $Setup = new Setup();
            $Setup->init();
        }
    }

    public function register_custom_taxonomies()
    {
        add_action('init', function () {
            get_template_part('lib/callbacks/ct/ct-projecttype');
            get_template_part('lib/callbacks/ct/ct-sectionpage');
        });
    }

    public function register_custom_post_types()
    {
        add_action('init', function () {
            get_template_part('lib/callbacks/cpt/cpt-events');
            get_template_part('lib/callbacks/cpt/cpt-memberships');
            get_template_part('lib/callbacks/cpt/cpt-annualreports');
            get_template_part('lib/callbacks/cpt/cpt-boardmembers');
            get_template_part('lib/callbacks/cpt/cpt-newsletters');
            get_template_part('lib/callbacks/cpt/cpt-projects');
            get_template_part('lib/callbacks/cpt/cpt-sections');
            get_template_part('lib/callbacks/cpt/cpt-alerts');
            get_template_part('lib/callbacks/cpt/cpt-featuredEvents');
        }, 0);
    }

    public static function asset_path($filename)
    {
        $dist_path = get_template_directory_uri() . '/dist/';
        $directory = dirname($filename) . '/';
        $file = basename($filename);
        static $manifest;

        if (empty($manifest)) {
            $manifest_path = get_template_directory() . '/dist/' . 'assets.json';
            $manifest = new JsonManifest($manifest_path);
        }

        if (array_key_exists($file, $manifest->get())) {
            return $dist_path . $directory . $manifest->get()[$file];
        } else {
            return $dist_path . $directory . $file;
        }
    }

    /**
     * Page titles
     */
    public static function title()
    {
        if (is_home()) {
            if (get_option('page_for_posts', true)) {
                return get_the_title(get_option('page_for_posts', true));
            } else {
                return __('Latest Posts', 'sage');
            }
        } elseif (is_single() && get_post_type() === 'cpt_memberships') {
            return 'Membership Level: ' . get_the_title();
        } elseif (is_single()) {
            return single_post_title();
        } elseif (is_tax()) {
            return single_term_title();
        } elseif (is_archive()) {
            return post_type_archive_title();
        } elseif (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        } elseif (is_404()) {
            return __('Not Found', 'sage');
        } else {
            return get_the_title();
        }
    }

    /**
     * Page Builder
     */
    public static function page_builder($current_post_id = '')
    {
        include(locate_template('templates/page-builder.php'));
    }
}
