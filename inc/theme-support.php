<?php

if ( ! function_exists( 'solarfam_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function solarfam_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on solarfam, use a find and replace
		 * to change 'solarfam' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'solarfam', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// Default thumbnail size
		add_image_size( 'img-header', 640, 480, true );
		add_image_size( 'img-card', 380, 192, true );
		    

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main-menu' => esc_html__( 'Primary', 'solarfam' ),
			'footer-menu' => esc_html__( 'Footer', 'solarfam' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

	}
endif;
add_action( 'after_setup_theme', 'solarfam_setup' );

// Add excerpt to pages
add_post_type_support( 'page', 'excerpt' );

/**
 * Register support for Gutenberg wide images in your theme
 */
function aling_wide_img() {
	add_theme_support( 'align-wide' );
  }
  add_action( 'after_setup_theme', 'aling_wide_img' );


// Adds support for editor color palette.
add_theme_support( 'editor-color-palette', array(
	array(
		'name'  => __( 'Primary', 'solarfam' ),
		'slug'  => 'primary',
		'color'	=> '#FF2B0F',
	),
	array(
		'name'  => __( 'Secondary', 'solarfam' ),
		'slug'  => 'secondary',
		'color' => '#FF660D',
	),
	array(
		'name'  => __( 'Accent', 'solarfam' ),
		'slug'  => 'accent',
		'color' => '#0249B3',
	   ),
	array(
		'name'  => __( 'White', 'solarfam' ),
		'slug'  => 'white',
		'color' => '#FFFFFF',
    ),   
) );

// Disables custom colors in block color palette.
add_theme_support( 'disable-custom-colors' );


// Add ACF options pages to CTP 

add_action('acf/init', 'my_acf_init');

function my_acf_init() {
	
	if( function_exists('acf_add_options_page') ) {
    
    // Add an options page manager
    acf_add_options_page();
		
	acf_add_options_page(array(
        'page_title'    => __('Textos página proyectos', 'solarfam'),
        'menu_title'    => __('Página proyectos', 'solarfam'),
        'menu_slug' => 'proyectos_page_setting',
        'capability'    => 'edit_posts',
        'parent_slug'   => 'edit.php?post_type=proyectos',

    ));
		
	}
	
}