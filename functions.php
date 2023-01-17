<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package theme
 */

/**
 * Enqueue scripts and styles.
 */
function theme_scripts() {
    wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/dist/css/app.min.css', array(), wp_get_theme()->get( 'Version' )  );
    wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/dist/js/app.min.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

