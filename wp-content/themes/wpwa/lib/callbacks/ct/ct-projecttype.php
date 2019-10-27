<?php

	$labels = array(
		'name'              => _x( 'Project Types', 'taxonomy general name', 'sage' ),
		'singular_name'     => _x( 'Project Type', 'taxonomy singular name', 'sage' ),
		'search_items'      => __( 'Search Project Types', 'sage' ),
		'all_items'         => __( 'All Project Types', 'sage' ),
		'parent_item'       => __( 'Parent Project Type', 'sage' ),
		'parent_item_colon' => __( 'Parent Project Type:', 'sage' ),
		'edit_item'         => __( 'Edit Project Type', 'sage' ),
		'update_item'       => __( 'Update Project Type', 'sage' ),
		'add_new_item'      => __( 'Add New Project Type', 'sage' ),
		'new_item_name'     => __( 'New Project Type Name', 'sage' ),
		'menu_name'         => __( 'Project Type', 'sage' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Project Types', 'sage' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'query_var'	=> true,
		'rewrite'	=> array('slug' => 'project-types', 'with_front' => false),
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => false,
		'show_in_rest' => true,
		'show_tagcloud' => false,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
	);
	register_taxonomy( 'ct_project-type', array('cpt_projects', ), $args );