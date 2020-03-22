<?php

$labels = array(
    'name' => __('Board of Directors', 'Post Type General Name', 'sage'),
    'singular_name' => __('Board Member', 'Post Type Singular Name', 'sage'),
    'menu_name' => __('Board Members', 'sage'),
    'name_admin_bar' => __('Board Member', 'sage'),
    'archives' => __('Board of Directors', 'sage'),
    'attributes' => __('Board Member Attributes', 'sage'),
    'parent_item_colon' => __('Parent Board Member:', 'sage'),
    'all_items' => __('All Board Members', 'sage'),
    'add_new_item' => __('Add New Board Member', 'sage'),
    'add_new' => __('Add New', 'sage'),
    'new_item' => __('New Board Member', 'sage'),
    'edit_item' => __('Edit Board Member', 'sage'),
    'update_item' => __('Update Board Member', 'sage'),
    'view_item' => __('View Board Member', 'sage'),
    'view_items' => __('View Board Members', 'sage'),
    'search_items' => __('Search Board Member', 'sage'),
    'not_found' => __('Not found', 'sage'),
    'not_found_in_trash' => __('Not found in Trash', 'sage'),
    'featured_image' => __('Featured Image', 'sage'),
    'set_featured_image' => __('Set featured image', 'sage'),
    'remove_featured_image' => __('Remove featured image', 'sage'),
    'use_featured_image' => __('Use as featured image', 'sage'),
    'insert_into_item' => __('Insert into Board Member', 'sage'),
    'uploaded_to_this_item' => __('Uploaded to this Board Member', 'sage'),
    'items_list' => __('Board Members list', 'sage'),
    'items_list_navigation' => __('Board Members list navigation', 'sage'),
    'filter_items_list' => __('Filter Board Members list', 'sage'),
);
$args = array(
    'label' => __('Board Member', 'sage'),
    'description' => __('Board Members', 'sage'),
    'labels' => $labels,
    'menu_icon' => 'dashicons-id',
    'supports' => array('title', 'editor', 'thumbnail',),
    'taxonomies' => array(),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 7,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'has_archive' => false,
    'rewrite' => array('slug' => 'board-of-directors'),
);
register_post_type('cpt_boardmembers', $args);
