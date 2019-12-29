<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Solarfam
 */

get_header();
?>

	
<main id="main" class="site-main">
	<header id="hero">
		<div class="container">
			<div class="row entry-title">
				<div class="col-xs-12 col-md-8">
					<?php solarfam_posted_in(); ?>
					<h1 class="display"><?php single_post_title();?></h1>
				</div>
			</div>  
		</div>	
	</header>
	<div class="container move-up">
		<div class="row">
			<div class="col-xs-12 col-md-8">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

		endwhile; // End of the loop.
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
