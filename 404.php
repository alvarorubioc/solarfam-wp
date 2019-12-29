<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Solarfam
 */

get_header();
?>

	
		<main id="main">
			
			<section class="error-404 not-found">
				<div id="hero">
					<div class="container">
						<div class="row entry-title">
							<div class="col-xs-12 col-md-8">
								<h1 class="display"><?php esc_html_e( 'Oops! Página no encontrada', 'solarfam' ); ?></h1>
								<p class="text-h4"><?php esc_html_e( 'Parece que no podemos encontrar lo que buscas. Prueba con otra dirección o usa el buscador para encontrar lo que necesitas.', 'solarfam' ); ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-md-8">
								<?php get_search_form();?> 
							</div>
						</div>  
					</div>	
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	

<?php
get_footer();
