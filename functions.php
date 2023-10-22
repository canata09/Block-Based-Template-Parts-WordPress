<?php
/**
 * EYM MAK functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package EYM_MAK
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function eym_mak_setup() {

	
	/**
	 * Setting the Groundwork
	 *
	 */
	add_theme_support( 'block-template-parts' );
	
}
add_action( 'after_setup_theme', 'eym_mak_setup' );



/**
 * Enqueue bootstrap styles.
 */
function theme_enqueue_scripts() {
    // Enqueue Bootstrap stylesheet
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2');

    // Enqueue main stylesheet
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // Enqueue Bootstrap script
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), '4.5.2', true);

    // Enqueue custom script
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');


/**
 * Enqueue Carousel Styles
 */
function enqueue_carousel_styles() {
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/owl-carousel.css');
	wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/owl-carousel.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_carousel_styles');


