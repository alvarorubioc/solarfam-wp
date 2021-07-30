<?php
/**
 * The template for displaying contact and thanks pages
 * 
 * Template Name: Contact
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
			the_post(); ?>

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
                        <div class="row sf-box end-xs">
                            <div class="col-xs-12 col-md-8">
                                <div class="sf-cta__hero">
                                    <div>
                                        <p class="text-h2">+34 948 247 353</p>
                                        <strong>Teléfono</strong>
                                    </div>
                                    <div>
                                        <p class="text-h2">info@solarfam.com</p>
                                        <strong>Email</strong>
                                    </div>	
                                </div>
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

		<?php endwhile; // End of the loop.
		?>
		<?php get_template_part( 'template-parts/section', 'related-projects' ); ?>
		<?php get_template_part( 'template-parts/section', 'clients' ); ?>
		
		
	</main><!-- #main -->

<?php
get_footer();

