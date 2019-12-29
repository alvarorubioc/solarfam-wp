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

	<div class="">
		<?php solarfam_post_thumbnail(); ?>
		
		<div class="entry-meta">
			<?php
			solarfam_posted_on();
			solarfam_posted_by();
			?>
		</div><!-- .entry-meta -->
	<div class="entry-content">
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

