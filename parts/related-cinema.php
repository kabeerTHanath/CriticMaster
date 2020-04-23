<!-- Related One -->
<section id="related-one" class="related mt-4"> 
<div class="card-header" style="text-transform: uppercase;color: #000;"><a href="https://www.thecritic.in/category/cinema/">CINEMA</a></div>
      <div class="row">        

                  <?php
                  // WP_Query arguments
                  $args = array (
                      'order' => 'DESC',
                      'showposts' => 6,
                      'category_name'=> 'Cinema'
                  );

                  $count = 0; 
                  // The Query

                      $the_query = new WP_Query( $args );
                  // The Loop
                  while ( $the_query->have_posts() ) : $the_query->the_post();
                  $count++;
                  if ( $count == 1 ) : ?>


                <div class="col-sm-6">
                <div class="card mb-4">
                  
                <?php  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>
                 <a href="<?php the_permalink(); ?>"> <img class="card-img-top img-fluid" src="<?php echo esc_url($featured_img_url) ?>" title="<?php the_title_attribute(); ?>"></a>

                  <div class="card-body px-2 bg-light"> 

                      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h4><?php the_title(); ?></h4></a>

                       <p class="card-text d-none d-sm-block"><?php echo  excerpt(20); ?></p>
                  </div>
                </div>

              </div>

              <div class="col-sm-6 rlp">
                <?php else : ?>

                   <div class="row no-gutters bg-light mb-1 mt-1 mt-sm-2">
                      <div class="col-sm-4 col-4">
                        <?php the_post_thumbnail('thumb')?>   
                      </div>

                      <div class="col-sm-8 col-8 pl-2 pt-2 border">
                        <h6><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h6>
                      </div>
                   </div>
                
                 
            <?php endif; ?>
            <?php endwhile; ?>

            </div>
            <?php wp_reset_postdata(); ?>   

        </div>
    </section>