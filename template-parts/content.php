<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Solarfam
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
	<div class="entry-meta">
		<?php
		solarfam_posted_on();
		?>
	</div><!-- .entry-meta -->
	<div class="">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'solarfam' ),
			'after'  => '</div>',
		) );
		?>
			
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->

<div class="row center-xs">
	<div class="divider-dots"></div>
</div>	

