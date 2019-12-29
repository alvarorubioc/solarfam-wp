<?php
/**
 * solarfam functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package solarfam
 */

// Register widget areas
require get_template_directory().'/inc/theme-support.php';

// Register widget areas
require get_template_directory().'/inc/widget-areas.php';

// Register scripts and stylesheets
require get_template_directory().'/inc/enqueue-scripts.php';

// Register custom post type
require get_template_directory().'/inc/custom-post-type.php';

// Register pagination function
require get_template_directory().'/inc/pagination.php';


// Disable wp emoji
require (get_template_directory().'/inc/disable-emoji.php');

/**
 * Implement the Custom LOGO feature.
 */
require get_template_directory() . '/inc/custom-logo.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * Load more portfolio items.
 */
require get_template_directory() . '/inc/load-more.php';


// add_filter( 'wpcf7_load_js', '__return_false' );
// add_filter( 'wpcf7_load_css', '__return_false' );
