<?php
/**
 * Template part for displaying page content in solarcalculator.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Solarfam
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
	<header id="hero">
		<?php solarfam_post_thumbnail(); ?>
		<div class="container">
			<div class="row entry-title">
				<div class="col-xs-12 col-md-10">
					<h1 class="display"><?php single_post_title();?></h1>
					<h2 class="text-h3"><?php echo get_the_excerpt() ;?></h2>
				</div>
			</div>
			 <div class="row">
                <div class="col-xs-12 col-md-9 col-lg-6">
                    <div class="sf-cta__hero-calcular">
                        <svg class="icon" width="64" height="64" viewBox="0 0 32 32">
							<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/sprite-icons.svg#sun" />
                        </svg>
                        <span class="text-h5">Calcule el precio de producir su propia energía</span>
                        <button id="btn-calcular" class="btn btn--md btn--accent">Calcular</button>
                    </div>
                </div>
            </div>
		</div>	
	</header>

</div><!-- #post-<?php the_ID(); ?> -->



