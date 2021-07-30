<div class="col-xs-12 col-sm-6 col-md-4 slideanim slide">
    <article id="post-<?php the_ID(); ?>" <?php post_class('sf-card'); ?>>
        <div class="sf-card-image">  
            <span class="ofuscado" onclick="location.href='<?php the_permalink(); ?>'">
                <?php the_post_thumbnail('img-card'); ?>
            </span>    
        </div>

        <div class="sf-card-content">
            <h3 class="text-h4"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?></a></h3>
            <div class="entry-meta">
                <div class="project-info">
                    <svg class="icon" width="24" height="24" viewBox="0 0 32 32">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/sprite-icons.svg#bolder" />
                    </svg>
                    <span><?php the_field('category_project'); ?></span>
                </div>
                <div class="project-info">
                    <svg class="icon" width="24" height="24" viewBox="0 0 32 32">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/sprite-icons.svg#briefcase" />
                    </svg>
                    <span><?php the_field('client_project'); ?></span>
                </div>
                <div class="project-info">
                    <svg class="icon" width="24" height="24" viewBox="0 0 32 32">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/sprite-icons.svg#map-pin" />
                    </svg>
                    <span><?php the_field('place_project'); ?></span>
                </div>
                
            </div><!-- .entry-meta -->
        </div>
    </article><!-- #post-<?php the_ID(); ?> -->
</div>          