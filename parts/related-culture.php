<!---Realated Two Section--><!---Realated Two Section--><!---Realated Two Section--><!---Realated Two Section--><!---Realated Two Section--><!---Realated Two Section--><!---Realated Two Section-->
<section id="related-two" class="related">
      <div class="row">
        <div class="col-sm-6 mt-4">
                  <?php
                  // WP_Query arguments
                  $args = array (
                      'order' => 'DESC',
                      'showposts' => 6,
                      'category_name'=> 'Culture'
                  );
                  $count = 0; 
                  // The Query

                      $the_query = new WP_Query( $args );
                  // The Loop
                  while ( $the_query->have_posts() ) : $the_query->the_post();
                  $count++;
                  if ( $count == 1 ) : ?>

                <div class="card mb-4">
                  <div class="card-header" style="text-transform: uppercase;color: #000;">
                       <a href="https://www.thecritic.in/category/culture/">CULTURE</a>
                  </div>
                <?php  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>
                 <a href="<?php the_permalink(); ?>"> <img class="card-img-top img-fluid" src="<?php echo esc_url($featured_img_url) ?>" title="<?php the_title_attribute(); ?>"></a>

                  <div class="card-body bg-light">        
                      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h4><?php the_title(); ?></h4></a>
                  </div>
                </div>
                <?php else : ?>

                  <div id="second" class="row no-gutters bg-light mb-1 mt-1"> 
                      <div class="col-md-4 col-4">
                        <?php the_post_thumbnail('thumb')?>  
                      </div>

                    <div class="col-sm-8 col-8 border">
                        <div class="card-body p-2">  <h6><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h6>

                        </div>
                    </div>
                  </div>

            <?php endif; ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
  
            
        </div>


        <div class="col-sm-6 mt-4 rlp">
                  <?php
                  // WP_Query arguments
                  $args = array (
                      'order' => 'DESC',
                      'showposts' => 6,
                      'category_name'=> 'Gender'
                  );
                  $count = 0; 
                  // The Query
                      $the_query = new WP_Query( $args );
                  // The Loop
                  while ( $the_query->have_posts() ) : $the_query->the_post();
                  $count++;
                  if ( $count == 1 ) : ?>
                <div class="card mb-4">
                  <div class="card-header" style="text-transform: uppercase;color: #000;">
                      <a href="https://www.thecritic.in/category/gender/">GENDER</a>
                  </div>

                  <?php  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>
                 <a href="<?php the_permalink(); ?>"><img class="card-img-top img-fluid" src="<?php echo esc_url($featured_img_url) ?> "> </a>
                  
                  <div class="card-body bg-light">        
                      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h4><?php the_title(); ?></h4></a>
                  </div>
                </div>

                <?php else : ?>

                <div id="third" class="row no-gutters bg-light mb-1 mt-1"> 
                      <div class="col-md-4 col-4">
                        <?php the_post_thumbnail('thumb')?>  
                      </div>

                    <div class="col-sm-8 col-8 border">
                        <div class="card-body p-2">  <h6><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h6>

                        </div>
                    </div>
                </div>

            <?php endif; ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

            

        </div>
      </div>
    </section>