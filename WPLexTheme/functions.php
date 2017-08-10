<?php
/**
 * Functions and definitions
 *
 * The functions.php is file consists of functions that help you 
 * override default configurations in wordpress theme.
 *
 *
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 *
 * @package Wordpress - xela
 * @subpackage xela
 * @since xela 1.0
 *
 *
**/

/**
 *
 * NOW: Override default configuration for your wordpress theme.
 *
**/

/*
 * Enable support for Post Formats.
 *
 * See: https://codex.wordpress.org/Post_Formats
 */
// add_theme_support( 'post-formats', array(
// 	'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
// ) );


if (function_exists('add_theme_support')) {


	//Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );
	add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Cus

	//Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'widgets' );


}
// register wp_nav_menu
function register_my_menus() {
    register_nav_menus( array(
    	'primary-menu' => __( 'Primary Menu' )
    ));
}
add_action( 'init', 'register_my_menus'); // register wp_nav_menu
/**
  *
  *	Add styles and scripts here. 
  *	CSS / JS
  *	Reminder: If your css is design to override another css, make sure it will the last style in order.
  *
**/

function import_scripts_and_styles() {

	/**
	  * OHM and Xela used default Css Framework
	  * Bootstrap v3.3.6 (http://getbootstrap.com)
	  *
	**/
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '', false );
	wp_enqueue_style( 'custom-style.css', get_template_directory_uri() . '/assets/css/custom-style.css', array(), '', false );

	// Overrides other css style
	wp_enqueue_style( 'custom-css' , get_template_directory_uri() . '/style.css', array(), '', false );

	// Overrides other js scripts
	wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '', true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '', true );
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom-script.js', array(), '', true );

}
add_action('wp_enqueue_scripts', 'import_scripts_and_styles');
?>