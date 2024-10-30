<?php 
    /*
    Plugin Name: Corporate Testimonials powered by ASSIST
    Plugin URI: https://assist-software.net/
    Description: Plugin for displaying Testimonials and Team
    Author: Assist
    Version: 1.0
    Author URI: https://assist-software.net/
    */

if(!defined('catwp_plugin_dir')) {

    define('catwp_plugin_dir', plugin_dir_path( __FILE__ ));

}    

if(!defined('catwp_plugin_url')) {

  define('catwp_plugin_url', plugin_dir_url( __FILE__ ));

}

function catwp_team_post_type() {
   
   // Labels
	$labels = array(
		'name' 					=> __('CATWP_Team', 'catwp_corporate-assist'),
		'singular_name'			=> __('CATWP_Team', 'catwp_corporate-assist'),
		'menu_name' 			=> 'Our Team',
		'add_new' 				=> __('Add New', 'catwp_corporate-assist'),
		'add_new_item' 			=> __("Add New Profile", 'catwp_corporate-assist'),
		'edit_item' 			=> __("Edit Profile", 'catwp_corporate-assist'),
		'new_item' 				=> __("New Profile", 'catwp_corporate-assist'),
		'view_item' 			=> __("View Profile", 'catwp_corporate-assist'),
		'search_items' 			=> __("Search Profiles", 'catwp_corporate-assist'),
		'not_found' 			=> __("No Profiles Found", 'catwp_corporate-assist'),
		'not_found_in_trash' 	=> __("No Profiles Found in Trash", 'catwp_corporate-assist'),
		'parent_item_colon' 	=> ''
	);
	
	// Register post type
	register_post_type('team' , array(
		'labels' 				=> $labels,
		'public' 				=> true,
		'has_archive' 			=> false,
		'menu_icon' 			=> catwp_plugin_url . 'images/teamicon.png',
		'rewrite' 				=> false,
		'supports' 				=> array('title', 'editor', 'thumbnail', 'custom-fields'),
	) );
}
add_action( 'init', 'catwp_team_post_type', 0 );

function catwp_testimoniale_post_type() {
   
   // Labels
	$labels = array(
		'name' 							=> __("CATWP_Testimoniale", 'catwp_corporate-assist'),
		'singular_name' 				=> __("CATWP_Testimoniale", 'catwp_corporate-assist'),
		'menu_name' 					=> 'Testimonial Page',
		'add_new' 						=> __("Add New", 'catwp_corporate-assist'),
		'add_new_item' 					=> __("Add New Profile", 'catwp_corporate-assist'),
		'edit_item' 					=> __("Edit Profile", 'catwp_corporate-assist'),
		'new_item' 						=> __("New Profile", 'catwp_corporate-assist'),
		'view_item' 					=> __("View Profile", 'catwp_corporate-assist'),
		'search_items' 					=> __("Search Profiles", 'catwp_corporate-assist'),
		'not_found' 					=> __("No Profiles Found", 'catwp_corporate-assist'),
		'not_found_in_trash' 			=> __("No Profiles Found in Trash", 'catwp_corporate-assist'),
		'parent_item_colon' 			=> ''
	);
	
	// Register post type
	register_post_type('testimoniale' , array(
		'labels'	 					=> $labels,
		'public' 						=> true,
		'has_archive' 					=> false,
		'menu_icon' 					=> catwp_plugin_url . 'images/testimonial.png',
		'rewrite' 						=> false,
		'supports' 						=> array('title', 'editor', 'thumbnail', 'custom-fields')
	) );
}
add_action( 'init', 'catwp_testimoniale_post_type', 0 );
