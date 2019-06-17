<?php
/*
===========================
  [[[ Custom Post Types ]]]
===========================
*/

// Clear Rewrite Rules for CPT's
function ex_theme_terlet() {
  flush_rewrite_rules();
}
add_action('after_switch_theme', 'ex_theme_terlet');

// CPT - Work
function cpt_work() {
	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'exonym' ),
		'singular_name'         => _x( 'Work', 'Post Type Singular Name', 'exonym' ),
		'menu_name'             => __( 'Work', 'exonym' ),
		'name_admin_bar'        => __( 'Work', 'exonym' ),
		'archives'              => __( 'Project Archives', 'exonym' ),
		'attributes'            => __( 'Project Attributes', 'exonym' ),
		'parent_item_colon'     => __( 'Parent Project:', 'exonym' ),
		'all_items'             => __( 'All Projects', 'exonym' ),
		'add_new_item'          => __( 'Add New Project', 'exonym' ),
		'add_new'               => __( 'Add New', 'exonym' ),
		'new_item'              => __( 'New Project', 'exonym' ),
		'edit_item'             => __( 'Edit Project', 'exonym' ),
		'update_item'           => __( 'Update Project', 'exonym' ),
		'view_item'             => __( 'View Project', 'exonym' ),
		'view_items'            => __( 'View Work', 'exonym' ),
		'search_items'          => __( 'Search Project', 'exonym' ),
		'not_found'             => __( 'Not found', 'exonym' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'exonym' ),
		'featured_image'        => __( 'Featured Image', 'exonym' ),
		'set_featured_image'    => __( 'Set featured image', 'exonym' ),
		'remove_featured_image' => __( 'Remove featured image', 'exonym' ),
		'use_featured_image'    => __( 'Use as featured image', 'exonym' ),
		'insert_into_item'      => __( 'Insert into Project', 'exonym' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Project', 'exonym' ),
		'items_list'            => __( 'Work list', 'exonym' ),
		'items_list_navigation' => __( 'Projects list navigation', 'exonym' ),
		'filter_items_list'     => __( 'Filter work list', 'exonym' ),
	);
	$args = array(
		'label'                 => __( 'Work', 'exonym' ),
		'description'           => __( 'Post Type Description', 'exonym' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'taxonomies'            => array( 'work-cats' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-hammer',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'work', $args );

}
add_action( 'init', 'cpt_work', 0 );

// CTax - Work Categories
function ctax_workcats() {

	$labels = array(
		'name'                       => _x( 'Work Categories', 'Taxonomy General Name', 'exonym' ),
		'singular_name'              => _x( 'Work Category', 'Taxonomy Singular Name', 'exonym' ),
		'menu_name'                  => __( 'Work Categories', 'exonym' ),
		'all_items'                  => __( 'All Categories', 'exonym' ),
		'parent_item'                => __( 'Parent Category', 'exonym' ),
		'parent_item_colon'          => __( 'Parent Category:', 'exonym' ),
		'new_item_name'              => __( 'New Category Name', 'exonym' ),
		'add_new_item'               => __( 'Add New Category', 'exonym' ),
		'edit_item'                  => __( 'Edit Category', 'exonym' ),
		'update_item'                => __( 'Update Category', 'exonym' ),
		'view_item'                  => __( 'View Category', 'exonym' ),
		'separate_items_with_commas' => __( 'Separate categories with commas', 'exonym' ),
		'add_or_remove_items'        => __( 'Add or remove categories', 'exonym' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'exonym' ),
		'popular_items'              => __( 'Popular categories', 'exonym' ),
		'search_items'               => __( 'Search Categories', 'exonym' ),
		'not_found'                  => __( 'Not Found', 'exonym' ),
		'no_terms'                   => __( 'No Categories', 'exonym' ),
		'items_list'                 => __( 'Categories list', 'exonym' ),
		'items_list_navigation'      => __( 'Categories list navigation', 'exonym' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'rewrite'                    => false,
	);
	register_taxonomy( 'work-cats', array( 'work' ), $args );

}
add_action( 'init', 'ctax_workcats', 0 );
