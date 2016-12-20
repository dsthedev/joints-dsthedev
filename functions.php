<?php

function dstd_site_scripts() {
	global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

	wp_enqueue_style( 'dstd-custom-css', get_stylesheet_directory_uri() . '/style.css', array(), '', 'all' );

	wp_enqueue_script( 'dstd-custom-js', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );
}
add_action('wp_enqueue_scripts', 'dstd_site_scripts', 999);

function dstd_home_url_sc() {
	return home_url();
}
add_shortcode( 'home_url','dstd_home_url_sc' );

if (class_exists('acf_pro')) {
	define('HAS_ACFPRO', TRUE);
} else {
	define('HAS_ACFPRO', FALSE);
}


/*FIN*/