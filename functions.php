<?php
/**
 * site functions and definitions
 *
 * @package site
 */

if ( ! function_exists( 'site_setup' ) ) :
function site_setup() {
	add_image_size('home-thumb',600,600,true);
	add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
}
endif; // site_setup
add_action( 'after_setup_theme', 'site_setup' );

/**
 * Enqueue scripts and styles.
 */
function site_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'style-animate', get_template_directory_uri() ."/node_modules/animate.css/animate.min.css" );
	wp_enqueue_script( 'script-jquery', get_template_directory_uri() .'/node_modules/jquery/dist/jquery.min.js');
	wp_enqueue_script( 'script-popper', get_template_directory_uri() .'/node_modules/popper.js/dist/umd/popper.min.js');
	wp_enqueue_script( 'script-bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js');
	wp_enqueue_script( 'script-wow', get_template_directory_uri() . '/node_modules/wowjs/dist/wow.min.js');
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js',array(),false,true);
}

add_action( 'wp_enqueue_scripts', 'site_scripts' );

/**
 * Load integration
 */
require 'inc/woocommerce-hooks.php';
require  'inc/woocommerce-functions.php';

