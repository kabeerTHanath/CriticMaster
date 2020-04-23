<?php /* Template Name: Slide Page The Critic */ ?>

<?php
    get_header('slide'); 
    b4st_main_before();
?>

<main id="main" class="container mt-2" >
  <div class="row">

    <div class="left_area col-md-8">
      <div class="row">

    <div class="col-md-8 pr-0">
    <?php $do_not_duplicate = array(); ?>
  <?php query_posts( array('posts_per_page' => 1,'category_name' =>'Latest news', 'order' => 'DESC')); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    $do_not_duplicate[] = $post->ID; ?> 

        <div class="card featured bg-light" role="main">
            <?php  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>
            <a href="<?php the_permalink(); ?>"> <img class="card-img-top img-fluid" src="<?php echo esc_url($featured_img_url) ?>" title="<?php the_title_attribute(); ?>"> </a>
            <div class="card-body px-2">     
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h1 style="margin-top: -10px;"><?php the_title(); ?></h1></a>
            

            </div> <!--/#content -->
        </div>

    <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>
    </div><!-- Maim  Featured post Ends -->
    <!-- Maim  Featured post End --><!-- Maim  Featured post Ends -->

    <div class="col-sm-4">
    <!-- Right Side Posts  --> <!-- Right Side Posts  --> <!-- Right Side Posts-->
    <div class="row no-gutters">
   
    <?php query_posts( array( 'posts_per_page' => 3 , 'order' => 'DESC' ) ); 
     while ( have_posts() ) : the_post();

      if (!in_array($post->ID, $do_not_duplicate)): ?>

        <div class="col-sm-12 card mb-2">
          <div class="tl-height">
          <?php $post_tags = get_the_tags() ?>
          <?php  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'small'); ?>
          <a href="<?php the_permalink(); ?>"> <img class="card-img-top img-fluid" src="<?php echo esc_url($featured_img_url) ?>"  title="<?php the_title_attribute(); ?>"> </a>
        </div>

        <div class="card-body pl-2 pt-1 pb-0 bg-light">

        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">

        <h4><?php the_title(); ?></h4>

        </a> </div>
        </div>

              <?php endif;endwhile; ?>
              <?php wp_reset_query(); ?>
      <!-- Right Side Posts Ends here   --><!-- Right Side Posts Ends here   -->
      <!-- Right Side Posts Ends here   --><!-- Right Side Posts Ends here   -->


    </div>
  </div>
</div><!--Row-->



<?php get_template_part('parts/slide');?>



</div><!--Left Area Close-->

    <?php get_sidebar(); ?>
  </div><!-- /.row -->
</main><!-- /.container -->

<?php 
    b4st_main_after();
    get_footer(); 
?>
