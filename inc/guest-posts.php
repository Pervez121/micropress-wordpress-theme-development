<?php

// Register Custom Post Type Guest Post
function create_guestpost_cpt() {

	$labels = array(
		'name' => _x( 'Guest Posts', 'Post Type General Name', 'Micropress' ),
		'singular_name' => _x( 'Guest Post', 'Post Type Singular Name', 'Micropress' ),
		'menu_name' => _x( 'Guest Posts', 'Admin Menu text', 'Micropress' ),
		'name_admin_bar' => _x( 'Guest Post', 'Add New on Toolbar', 'Micropress' ),
		'archives' => __( 'Guest Post Archives', 'Micropress' ),
		'attributes' => __( 'Guest Post Attributes', 'Micropress' ),
		'parent_item_colon' => __( 'Parent Guest Post:', 'Micropress' ),
		'all_items' => __( 'All Guest Posts', 'Micropress' ),
		'add_new_item' => __( 'Add New Guest Post', 'Micropress' ),
		'add_new' => __( 'Add New', 'Micropress' ),
		'new_item' => __( 'New Guest Post', 'Micropress' ),
		'edit_item' => __( 'Edit Guest Post', 'Micropress' ),
		'update_item' => __( 'Update Guest Post', 'Micropress' ),
		'view_item' => __( 'View Guest Post', 'Micropress' ),
		'view_items' => __( 'View Guest Posts', 'Micropress' ),
		'search_items' => __( 'Search Guest Post', 'Micropress' ),
		'not_found' => __( 'Not found', 'Micropress' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'Micropress' ),
		'featured_image' => __( 'Featured Image', 'Micropress' ),
		'set_featured_image' => __( 'Set featured image', 'Micropress' ),
		'remove_featured_image' => __( 'Remove featured image', 'Micropress' ),
		'use_featured_image' => __( 'Use as featured image', 'Micropress' ),
		'insert_into_item' => __( 'Insert into Guest Post', 'Micropress' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Guest Post', 'Micropress' ),
		'items_list' => __( 'Guest Posts list', 'Micropress' ),
		'items_list_navigation' => __( 'Guest Posts list navigation', 'Micropress' ),
		'filter_items_list' => __( 'Filter Guest Posts list', 'Micropress' ),
	);
	$args = array(
		'label' => __( 'Guest Post', 'Micropress' ),
		'description' => __( 'Posts By Guests', 'Micropress' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-welcome-write-blog',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author', 'post-formats', 'custom-fields'),
		'taxonomies' => array('category', 'tags'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'guest-post', $args );

}
add_action( 'init', 'create_guestpost_cpt', 0 );




?>