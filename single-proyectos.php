<?php
/**
 * The template for displaying all single projects
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
				<div class="col-xs-12">
                    <h1 class="display"><?php single_post_title();?></h1>
				</div>
				<div class="col-xs-12 col-md-6">
					<p class="text-h4"><?php echo get_the_excerpt() ;?></p>
				<div class="divider-dots"></div>
				</div>
			</div>  
		</div>	
	</header>
	<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'proyectos' );

		endwhile; // End of the loop.
	?>
</main><!-- #main -->
<?php get_template_part( 'template-parts/section', 'cta' ); ?>
<?php get_template_part( 'template-parts/section', 'clients' ); ?>

<?php
get_footer();
