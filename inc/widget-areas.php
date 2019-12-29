<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function solarfam_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'solarfam' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'solarfam' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<p class="text-h5" class="widget-title">',
		'after_title'   => '</p>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'solarfam' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'solarfam' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="text-h5 widget-title">',
		'after_title'   => '</div>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'solarfam' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'solarfam' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="text-h5 widget-title">',
		'after_title'   => '</div>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'solarfam' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'solarfam' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="text-h5 widget-title">',
		'after_title'   => '</div>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'solarfam' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'solarfam' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="text-h5 widget-title">',
		'after_title'   => '</div>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Clients', 'solarfam' ),
		'id'            => 'clients-5',
		'description'   => esc_html__( 'Add widgets here.', 'solarfam' ),
		'before_widget' => '<div class="col-xs-6"><div id="%1$s" class="sf-card widget %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="text-h5 widget-title">',
		'after_title'   => '</div>',
	) );

}
add_action( 'widgets_init', 'solarfam_widgets_init' );
