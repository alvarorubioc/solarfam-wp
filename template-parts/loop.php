<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Solarfam
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('sf-card'); ?>>
	<div class="sf-card-image">
		<?php solarfam_posted_in(); ?>
		<?php solarfam_post_thumbnail(); ?>
	</div>

	<div class="sf-card-content">
		<?php solarfam_posted_on(); ?>
		<h2 class="text-h3"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?></a></h2>
        <p class="text"><?php the_excerpt() ;?></p>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->

