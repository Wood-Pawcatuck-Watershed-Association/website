<?php
// Register Taxonomy Section Page
// Taxonomy Key: sectionpage

$labels = array(
	'name'              => _x( 'Section Pages', 'taxonomy general name', 'sage' ),
	'singular_name'     => _x( 'Section Page', 'taxonomy singular name', 'sage' ),
	'search_items'      => __( 'Search Section Pages', 'sage' ),
	'all_items'         => __( 'All Section Pages', 'sage' ),
	'parent_item'       => __( 'Parent Section Page', 'sage' ),
	'parent_item_colon' => __( 'Parent Section Page:', 'sage' ),
	'edit_item'         => __( 'Edit Section Page', 'sage' ),
	'update_item'       => __( 'Update Section Page', 'sage' ),
	'add_new_item'      => __( 'Add New Section Page', 'sage' ),
	'new_item_name'     => __( 'New Section Page Name', 'sage' ),
	'menu_name'         => __( 'Section Page', 'sage' ),
);
$args = array(
	'labels' => $labels,
	'description' => __( 'Categorize your sections by pages', 'sage' ),
	'hierarchical' => true,
	'public' => true,
	'publicly_queryable' => false,
	'show_ui' => true,
	'show_in_menu' => true,
	'show_in_nav_menus' => false,
	'show_in_rest' => true,
	'show_tagcloud' => false,
	'show_in_quick_edit' => true,
	'show_admin_column' => true,
);
register_taxonomy( 'sectionpage', array('sections', ), $args );
