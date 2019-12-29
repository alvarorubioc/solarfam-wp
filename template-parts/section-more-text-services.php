<?php $posts = get_field('text_left_page');

if( $posts ): ?>
	<section id="sf-text-services">
		<div class="container">
			<div class="row bottom-md mt-4">
                <div class="col-xs-12 col-md-5">
                    <?php the_field ('text_left_page'); ?>
                </div>
                <div class="col-xs-12 col-md-6 col-md-offset-1">
                    <?php the_field ('text_right_page'); ?>
                </div>
			</div>

		</div>	
	</section>
<?php endif; ?>