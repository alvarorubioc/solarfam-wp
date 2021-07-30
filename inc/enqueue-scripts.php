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
	if ( 'proyectos' === get_post_type() ) {
		wp_enqueue_script( 'lightbox-js', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js', array('jquery'));
	}
}
add_action( 'wp_enqueue_scripts', 'solarfam_scripts' );



