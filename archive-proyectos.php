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
		<?php 
			$image = get_field('image_project_page', 'options');
			if( !empty( $image ) ): ?>
				<div class="post-thumbnail"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
		<?php endif; ?>
			<div class="container">
				<div class="row entry-title">
					<div class="col-xs-12 col-md-6">
						<h1 class="display"><?php the_field( 'title_project_page', 'options' ); ?></h1>
						<p class="text-h4"><?php the_field( 'excerpt_project_page', 'options' ); ?></p>
						<div class="divider-dots"></div>
					</div>

					<?php if( get_field('hero_video', 'options') ): ?>
						<div class="col-xs-12 col-md-6 center-xs"> 
							<div class="embed-container">
								<?php the_field('hero_video', 'options'); ?>   
							</div>
						</div>
                	<?php endif; ?> 

				</div>
				<?php if ( have_rows( 'features_projects', 'options' ) ) : ?>
					<?php while ( have_rows( 'features_projects', 'options' ) ) : the_row(); ?>
						<div class="row sf-box">
							<div class="col-xs-12 col-md-8">
								<div class="sf-cta__hero">
									<div>
										<p class="text-h2"><?php the_sub_field( 'features_projects_number_1' ); ?></p>
										<strong><?php the_sub_field( 'features_projects_text_1' ); ?></strong>
									</div>
									<div>
										<p class="text-h2"><?php the_sub_field( 'features_projects_number_2' ); ?></p>
										<strong><?php the_sub_field( 'features_projects_text_2' ); ?></strong>
									</div>
									<div>
										<p class="text-h2"><?php the_sub_field( 'features_projects_number_3' ); ?></p>
										<strong><?php the_sub_field( 'features_projects_text_3' ); ?></strong>
									</div>	
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?> 
			</div>	
		</header>
		
	<div class="container">
		<div class="row mt-4">
			<div class="col-xs-12">
				<h2><?php the_field( 'subtitle_project_page', 'options' ); ?></h2>
			</div>
		</div>
		
		<div class="row mt-4">
			
			<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/loop', 'proyectos' );

				endwhile;


				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;

				// don't display the button if there are not enough posts
				if (  $wp_query->max_num_pages > 1 )
					echo '<div class="sf-loadmore mt-4 col-xs-12 center-xs">Mostrar más</div>';
			?>
			
		</div>
	</div><!-- .container -->
</main><!-- #main -->
<?php get_template_part( 'template-parts/section', 'cta' ); ?>
<?php get_template_part( 'template-parts/section', 'clients' ); ?>

<?php
get_footer();