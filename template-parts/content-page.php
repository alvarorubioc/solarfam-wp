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
			<div class="row sf-box">
				<div class="col-xs-12 col-md-8">
				<?php 
                        $link_1 = get_field('btn_hero_1');
                        if( $link_1 ): 
                            $link_url = $link_1['url'];
                            $link_title = $link_1['title'];
                            $link_target = $link_1['target'];    
                            ?>    
                            <a style="margin-right:20px;" class="mb-2 btn btn--lg btn--accent middle-xs" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                <div style="padding-right:8px;"><?php echo esc_html( $link_title ); ?></div>
                                <img style="padding-top:4px;" src="<?php echo get_template_directory_uri(); ?>/assets/img/youtube-icon.png" />
                            </a>
                    <?php endif; ?> 
                    <?php 
                        $link_2 = get_field('btn_hero_2');
                        if( $link_2 ): 
                            $link_url = $link_2['url'];
                            $link_title = $link_2['title'];
                            $link_target = $link_2['target'];    
                            ?>    
                            <a class="btn btn--lg btn--primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?> 
                    
				<!--<div class="sf-cta__hero-calcular">
						<svg class="icon" width="64" height="64" viewBox="0 0 32 32">
							<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/sprite-icons.svg#sun" />
						</svg>
						<span class="text-h5">Calcule el precio de producir su propia energía</span>
						
						<form class="sf-form-calcular" action="./calcular-instalacion-fotovoltaica-autoconsumo/#calculator-form">
							<input class="sf-input" type="text" placeholder="Código postal" maxlength="5" name="cp">
							<button id="btn-calcular" type="submit" class="btn btn--md btn--accent">Calcular</button>
						</form>
					</div>-->
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
