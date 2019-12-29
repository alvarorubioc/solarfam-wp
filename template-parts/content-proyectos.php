<?php
/**
 * Template part for displaying projects page in single-proyectos.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Solarfam
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('sf-project'); ?>> 
	<div class="container move-up">
		<div class="row bottom-xs reverse">
			<div class="col-xs-12 col-md-4 last-xs">
				<?php the_field('resumen_project'); ?>
			</div>
			<div class="col-xs-12 col-md-8">
					<?php if( get_field('video_project') ): ?>
						<div class="embed-container"><?php the_field('video_project'); ?></div>
					<?php else : 
						solarfam_post_thumbnail('full');	
					endif; ?>

					<div class="project-info mt-2">
						<svg class="icon" width="32" height="32" viewBox="0 0 32 32">
							<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/sprite-icons.svg#bolder" />
						</svg>
						<strong><?php the_field('category_project'); ?></strong>
						<svg class="icon" width="32" height="32" viewBox="0 0 32 32">
							<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/sprite-icons.svg#briefcase" />
						</svg>
						<strong><?php the_field('client_project'); ?></strong>
						<svg class="icon" width="32" height="32" viewBox="0 0 32 32">
							<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/sprite-icons.svg#map-pin" />
						</svg>
						<strong><?php the_field('place_project'); ?></strong>
					</div>
			</div>
		</div>
	</div>
	
	<?php if( get_field('testimonial_project') ): ?>
		<div class="testimonial mt-4">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-4">
						<?php if( get_field('logo_testimonial_project') ): ?>
							<div class="sf-card">
								<div class="sf-card-content">	
									<img src="<?php the_field('logo_testimonial_project'); ?>" />
								</div>
							</div>
						<?php endif; ?>
					</div>
					
					<div class="col-xs-12 col-md-7 col-md-offset-1">
						<p><strong><?php _e('Testimonio de la empresa', 'solarfam');?></strong></p>
						<blockquote><?php the_field('testimonial_project'); ?></blockquote>
						<p>- <?php the_field('name_testimonial_project'); ?> -</p>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<div class="entry-content">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'solarfam' ),
						'after'  => '</div>',
					) );
					?>
				</div>
			</div>
		</div>	
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
