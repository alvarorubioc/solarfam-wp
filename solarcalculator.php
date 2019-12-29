<?php
/**
 * The template for displaying calculadora solar
 * 
 * Template Name: Calculadora
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Solarfam
 */

get_header();
?>
<main id="main" class="site-main">		
		
	
	<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/calculator', 'content' );

		endwhile; // End of the loop.
		?>
		<?php get_template_part( 'template-parts/calculator', 'form' ); ?>
		<?php get_template_part( 'template-parts/calculator', 'success' ); ?>
        <?php get_template_part( 'template-parts/section', 'cta' ); ?>
        <?php get_template_part( 'template-parts/section', 'more-text-services' ); ?>
		<?php get_template_part( 'template-parts/section', 'clients' ); ?>
		
		
	</main><!-- #main -->

<?php
get_footer();

