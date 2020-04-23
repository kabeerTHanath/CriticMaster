<section class="d-none d-lg-block bg-light" style="background: #fff;height: 40px;width: 100%; border: solid 1px #000;overflow: hidden;">
<?php query_posts( array( 'posts_per_page' => 6 ) ); ?>

    <div class="row no-gutters">
      <div class="px-2 py-2" style="width: 12%;background:#da251c !important;color: #fff; font-size: 1rem">Breaking News</div>
     

      <div id="carousel-testimony" class="py-2 pl-2 carousel carousel slide" data-ride="carousel" data-interval="2000" style="width: 86%">
     
        <div class="carousel-inner">  
        	  <?php if (have_posts() ) : while (have_posts() ) : the_post();
        	   $i++ ?>
        	  <?php if($i==1) { ?>
    	  
    	     <div class="carousel-item active">
    	  
    	     <?php } else { ?>
    	  
    	     <div class="carousel-item">
    	   
        	     <?php } ?>
        	  
             <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><p class="mb-0"><?php the_title() ?></p></a>
              

            </div><!--Item -->

    	     <?php endwhile; endif; ?>
         
            </div><!--Item Active-->
      </div>
        <?php wp_reset_query(); ?>

    </div>

  </div>

</section>
