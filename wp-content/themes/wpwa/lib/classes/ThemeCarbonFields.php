<?php

namespace Roots\Sage\Classes;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

final class ThemeCarbonFields
{

    private $class_methods;


    public function register_fields()
    {

        $this->class_methods = get_class_methods($this);

        foreach ($this->class_methods as $method) {
            add_action('carbon_fields_register_fields', array($this, $method));
        }
    }

    public function theme_options()
    {
        get_template_part('lib/callbacks/fields/ThemeOptions');
    }

    public function gutenberg()
    {

        get_template_part('lib/callbacks/fields/Gutenberg');
    }

    public function page_sidebar_options()
    {
        get_template_part('lib/callbacks/fields/PageSidebarOptions');
    }

    public function page_newsletter_options()
    {
        get_template_part('lib/callbacks/fields/PageNewsletterOptions');
    }

    public function bannner()
    {
        get_template_part('lib/callbacks/fields/Banner');
    }

    public function page_builder()
    {
        get_template_part('lib/callbacks/fields/PageBuilder');
    }

    public function membership()
    {
        get_template_part('lib/callbacks/fields/Membership');
    }

    public function annual_reports()
    {
        get_template_part('lib/callbacks/fields/AnnualReports');
    }

    public function newsletters()
    {
        get_template_part('lib/callbacks/fields/Newsletters');
    }
    public function alerts()
    {
        get_template_part('lib/callbacks/fields/Alerts');
    }

    public function events()
    {
        get_template_part('lib/callbacks/fields/Events');
    }
}
