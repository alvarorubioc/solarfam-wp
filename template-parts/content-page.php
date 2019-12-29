<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Solarfam
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
	<header id="hero">
		<?php solarfam_post_thumbnail(); ?>
		<div class="container">
			<div class="row entry-title">
				<div class="col-xs-12 col-md-8">
					<h1 class="display"><?php single_post_title();?></h1>
					<p class="text-h4"><?php echo get_the_excerpt() ;?></p>
					<div class="divider-dots"></div>
				</div>
			</div>  
		</div>	
	</header>

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
