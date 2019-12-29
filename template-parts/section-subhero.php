<section id="subhero" class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4">
            <?php if ( have_rows( 'subtitle_description_home' ) ) : ?>
                <?php while ( have_rows( 'subtitle_description_home' ) ) : the_row(); ?>
                    <h2><?php the_sub_field( 'subtitle_home' ); ?></h2>
                    <p class="big"><?php the_sub_field( 'description_home' ); ?></p>
                <?php endwhile; ?>
            <?php endif; ?>  
        </div>
            
        <?php if ( have_rows( 'main_services_home' ) ) : ?>
            <?php while ( have_rows( 'main_services_home' ) ) : the_row(); ?>
                
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="sf-card">
                        <div class="sf-card-image">
                            <?php $img_cardhome_1 = get_sub_field( 'img_cardhome_1' ); ?>
                            <?php if ( $img_cardhome_1 ) { ?>
                                <?php echo wp_get_attachment_image( $img_cardhome_1, 'img-card' ); ?>
                            <?php } ?>
                            <div class="icon-circle-bg"> 
                                <svg class="icon" width="32" height="32" viewBox="0 0 32 32">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/sprite-icons.svg#arrow-right" />
                                </svg>
                            </div> 
                        </div>
                        <div class="sf-card-content">
                            <h3 class="text-h4"><a href="<?php the_sub_field( 'link_cardhome_1' ); ?>" title="<?php the_sub_field( 'title_cardhome_1' ); ?>"><?php the_sub_field( 'title_cardhome_1' ); ?></a></h3>
                            <p><?php the_sub_field( 'description_cardhome_1' ); ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="sf-card">
                        <div class="sf-card-image">
                            <?php $img_cardhome_2 = get_sub_field( 'img_cardhome_2' ); ?>
                            <?php if ( $img_cardhome_2 ) { ?>
                                <?php echo wp_get_attachment_image( $img_cardhome_2, 'img-card' ); ?>
                            <?php } ?>
                            <div class="icon-circle-bg"> 
                                <svg class="icon" width="32" height="32" viewBox="0 0 32 32">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/sprite-icons.svg#arrow-right" />
                                </svg>
                            </div> 
                        </div>
                        <div class="sf-card-content">
                            <h3 class="text-h4"><a href="<?php the_sub_field( 'link_cardhome_2' ); ?>" title="<?php the_sub_field( 'title_cardhome_2' ); ?>"><?php the_sub_field( 'title_cardhome_2' ); ?></a></h3>
                            <p><?php the_sub_field( 'description_cardhome_2' ); ?></p>
                        </div>
                    </div>
                </div>    
            <?php endwhile; ?>
        <?php endif; ?>
    </div>    
</section>