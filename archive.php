<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Solarfam
 */

get_header();
?>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Solarfam
 */

get_header();
?>

<main id="main" class="site-main">
	<?php if ( have_posts() ) : ?>
		<header id="hero">
			<div class="container">
				<div class="row entry-title">
					<div class="col-xs-12 col-md-8">
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
						?>
						<div class="divider-dots"></div>
					</div>
				</div>
			</div>	
		</header>
		
	<div class="container move-up">
		<div class="row">
			<div class="col-xs-12 col-md-8">
				<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/loop', get_post_type() );

					endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
				?>
			</div>
			<div class="col-xs-12 col-md-3 col-md-offset-1">
				<?php get_sidebar (); ?>	
			</div>
		</div>
	</div><!-- .container -->
</main><!-- #main -->
<?php get_template_part( 'template-parts/section', 'cta' ); ?>

<?php
get_footer();

