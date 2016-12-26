<?php

function dstd_site_scripts() {
	global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

	wp_enqueue_style( 'dstd-custom-css', get_stylesheet_directory_uri() . '/style.css', array(), '', 'all' );

	wp_enqueue_script( 'dstd-custom-js', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );

	if (is_page_template('templates/front-page.php')) {
		wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/assets/js/slick/slick.min.js', array( 'jquery' ), '', true );
		wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/assets/js/slick/slick.min.css', array(), '', 'all' );
		wp_enqueue_style( 'slick-theme-css', get_stylesheet_directory_uri() . '/assets/js/slick/slick-theme.min.css', array(), '', 'all' );
	}
}
add_action('wp_enqueue_scripts', 'dstd_site_scripts', 999);

function dstd_home_url_sc() {
	return str_replace(array('http://'/*,'https://'*/), '', get_home_url());
}
add_shortcode( 'home_url','dstd_home_url_sc' );

if (class_exists('acf_pro')) {
	define('HAS_ACFPRO', TRUE);
} else {
	define('HAS_ACFPRO', FALSE);
}


/*FIN*/