<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Solarfam
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'solarfam' ); ?></a>

<header id="masthead" class="container">
	<div class="solarfam-nav">
		<div class="site-branding">
			<?php the_custom_logo();?>
		</div><!-- .site-branding -->
	
		<div class="site-contact-btn">
			<a href="tel:+34948247353" class="btn btn--primary">
				<svg class="icon" width="24" height="24" viewBox="0 0 32 32">
					<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/sprite-icons.svg#phone" />
				</svg>
				<span>948 24 73 53</span>
			</a>
		</div>
			
		
		<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle btn btn--sm btn--accent" aria-controls="primary-menu" aria-expanded="false"></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'main-menu',
				'menu_id' => 'primary-menu',
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			) );
			?>
		</nav><!-- #site-navigation -->
	</div>	
</header><!-- #masthead -->

	
