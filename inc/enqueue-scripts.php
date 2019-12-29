<?php
/**
 * Enqueue scripts and styles.
 */

function solarfam_scripts() {
	wp_enqueue_style( 'solarfam-style', get_stylesheet_uri() );

	wp_enqueue_script( 'solarfam-js', get_template_directory_uri() . '/assets/js/solarfam.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'solarfam_scripts' );