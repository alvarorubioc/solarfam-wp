<?php $posts = get_field('related_projects');

if( $posts ): ?>
	<section id="sf-related-projects">
		<div class="container">
			
			<div class="row center-xs mb-2">
		 		<div class="col-xs-12 col-md-8">
		 			<h2><?php esc_html_e( 'Proyectos realizados ', 'solarfam' ); echo get_the_title( $post->post_parent );?></h2>
				</div>
			</div>	

			<div class="row">
			    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			        <?php setup_postdata($post);
                    
                        get_template_part( 'template-parts/loop', 'proyectos' );
                
                    endforeach; ?>
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>		
			</div>

		</div>	
	</section>
<?php endif; ?>