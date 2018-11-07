<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Karigar Custom Post Types
 * Description:       Plugin to add custom post types in Karigar theme.
 * Version:           1.0.0
 * Author:            Ahmad Shyk
 * Author URI:        https://ahmadshyk.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       karigar-cpt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


function karigar_cpt_activation() {
	karigar_custom_post_types();
	flush_rewrite_rules();
}

register_activation_hook( __FILE__, 'karigar_cpt_activation' );

function karigar_custom_post_types() {
	/**
	 * Post Type: Services.
	 */

	$services_labels = array(
		"name" => __( "Services", "karigar" ),
		"singular_name" => __( "Service", "karigar" ),
		"menu_name" => __( "Services", "karigar" ),
		"all_items" => __( "All Services", "karigar" ),
		"add_new" => __( "Add New", "karigar" ),
		"add_new_item" => __( "Add New Service", "karigar" ),
		"edit_item" => __( "Edit Service", "karigar" ),
		"new_item" => __( "New Service", "karigar" ),
		"view_item" => __( "View Service", "karigar" ),
		"view_items" => __( "View Services", "karigar" ),
		"search_items" => __( "Search Service", "karigar" ),
		"not_found" => __( "No Services Found", "karigar" ),
		"not_found_in_trash" => __( "No Service Found in Trash", "karigar" ),
		"filter_items_list" => __( "Filter Services List", "karigar" ),
		"items_list_navigation" => __( "Services List Navigation", "karigar" ),
		"items_list" => __( "Services List", "karigar" ),
	);

	$args = array(
		"label" => __( "Services", "karigar" ),
		"labels" => $services_labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "service", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor" ),
	);

	register_post_type( "service", $args );

	/**
	 * Post Type: Work.
	 */

	$portfolio_labels = array(
		"name" => __( "Portfolio Items", "karigar" ),
		"singular_name" => __( "Portfolio Item", "karigar" ),
		"menu_name" => __( "Portfolio", "karigar" ),
		"all_items" => __( "All Portfolio Items", "karigar" ),
		"add_new" => __( "Add New", "karigar" ),
		"add_new_item" => __( "Add New Portfolio Item", "karigar" ),
		"edit_item" => __( "Edit Portfolio Item", "karigar" ),
		"new_item" => __( "New Portfolio Item", "karigar" ),
		"view_item" => __( "View Portfolio Item", "karigar" ),
		"view_items" => __( "View Portfolio Items", "karigar" ),
		"search_items" => __( "Search Portfolio Item", "karigar" ),
		"not_found" => __( "No Portfolio Items Found", "karigar" ),
		"not_found_in_trash" => __( "No Portfolio Item Found in Trash", "karigar" ),
		"filter_items_list" => __( "Filter Portfolio List", "karigar" ),
		"items_list_navigation" => __( "Portfolio List Navigation", "karigar" ),
		"items_list" => __( "Portfolio List", "karigar" ),
	);

	$args = array(
		"label" => __( "Portfolio", "karigar" ),
		"labels" => $portfolio_labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "portfolio", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "thumbnail" ),
	);

	register_post_type( "portfolio", $args );

}

add_action( 'init', 'karigar_custom_post_types' );