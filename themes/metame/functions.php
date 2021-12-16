<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */

add_action( 'wp_enqueue_scripts', 'Divi_child_style' );
function Divi_child_style() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',array('parent-style'));
}

/**
 * Your code goes below.
 */

/*function load_css() {
	wp_register_style('wpwp', get_theme_file_uri() . '/css/wpwp_custom.css', array(), false, 'all' );
	wp_enqueue_style('wpwp');
}
add_action('wp_enqueue_scripts', 'load_css');*/

/*function load_js() {
	wp_register_script('wpwp_js', get_theme_file_uri() . '/js/wpwp_custom.js', 'jquery', false, true );
	wp_enqueue_script('wpwp_js');
}
add_action('wp_enqueue_scripts', 'load_js');*/

// smacss
function metame_assets() {
	wp_register_style( 'metame-stylesheet', get_theme_file_uri() . '/dist/css/bundle.css', array(), '1.0.0', 'all' );
	wp_enqueue_style('metame-stylesheet');
	wp_enqueue_script('metame_js', get_theme_file_uri() . '/dist/js/bundle.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'metame_assets');

function metame_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';

	return $mimes;
}
add_filter( 'upload_mimes', 'metame_mime_types' );

