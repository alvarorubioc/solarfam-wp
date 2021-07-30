<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Solarfam
 */

?>

<footer id="colophon" class="site-footer">						
	<div class="container">   
		<div class="row footer">
			<div class="col-xs-12 col-md-3">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer-1')) : ?>
				<?php endif; ?>
			</div>
			<div class="col-xs-6 col-md-3 col-md-offset-1 mt-2">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer-2')) : ?>
				<?php endif; ?>
			</div>
			<div class="col-xs-6 col-md-2 mt-2">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer-3')) : ?>
				<?php endif; ?>
			</div>
			<div class="col-xs-12 col-md-3 mt-2">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer-4')) : ?>
				<?php endif; ?>
			</div>
		</div>
	</div> 

	<div class="container site-info">
		<div class="row">
			<div class="col-xs-12"><hr></div>
			
			<div class="col-xs-12 col-md-4 start-md center-xs">
				<small>2019<span class="sep"> | </span><?php esc_html_e( 'Solarfam. Hacemos accesibles las energías renovables.', 'solarfam' ); ?></small>	
			</div>	
				
			<div class="col-xs-12 col-md-8 end-md center-xs">
				<ul id="footer-menu">
					<li class="ofuscado" onclick="location.href='/aviso-legal/'">Aviso Legal</li>
					<li class="ofuscado" onclick="location.href='/politica-de-privacidad/'">Política de privacidad</li>
					<li class="ofuscado" onclick="location.href='/politica-de-cookies/'">Cookies</li>
				</ul>
			</div>	
		</div>	
	</div><!-- .site-info -->
</footer><!-- #colophon -->
<?php wp_footer(); ?>

</body>
</html>

