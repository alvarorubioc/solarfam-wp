<?php
/**
 * The template for displaying homepage
 * 
 * Template Name: Homepage
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Solarfam
 */

get_header();
?>

<main id="main" class="site-main">
    <header id="hero">
        <?php solarfam_post_thumbnail('full'); ?>
        <div class="container">
            <div class="row entry-title">
                <div class="col-xs-12 col-md-8">
                    <h1 class="display"><?php single_post_title();?></h1>
                    <p class="text-h4"><?php echo get_the_excerpt() ;?></p>
                    <div class="divider-dots"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-9 col-lg-7">
                    <div class="sf-cta__hero">
                        <svg class="icon" width="64" height="64" viewBox="0 0 32 32">
							<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/sprite-icons.svg#sun" />
                        </svg>
                        <span class="text-h5">Calcule el precio de producir su propia energía</span>
                        
                        <form class="sf-form-calcular" action="./calcular-instalacion-fotovoltaica-autoconsumo/">
                            <input class="sf-input" type="text" placeholder="Código postal" name="cp">
                            <button type="submit" class="btn btn--md btn--accent">Calcular</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>	
    </header>		
    <?php get_template_part( 'template-parts/section', 'subhero' ); ?>
    <?php get_template_part( 'template-parts/section', 'cta' ); ?>
    <?php get_template_part( 'template-parts/section', 'faqs' ); ?>
    <?php get_template_part( 'template-parts/section', 'clients' ); ?>
</main><!-- #main -->

<?php
get_footer();

