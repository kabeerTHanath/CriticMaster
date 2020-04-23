<?php /* Template Name: Home Page The Critic */ ?>

<?php
    get_header(); 
    b4st_main_before();
?>

<main id="main" class="container mt-2 px-sm-0 px-md-3">
  <div class="row pl-sm-0">

    <div class="left_area col-sm-8 ml-sm-0">
      <div class="row">

    <div class="col-md-8 col-sm-12 pr-md-0">
    <?php $do_not_duplicate = array(); ?>
  <?php query_posts( array('posts_per_page' => 1,'category_name' =>'Latest news', 'order' => 'DESC')); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    $do_not_duplicate[] = $post->ID; ?> 

        <div class="card featured bg-light sm-mb-0 mb-4" role="main">
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

    <div class="col-md-4 col-sm-12">
    <!-- Right Side Posts  --> <!-- Right Side Posts  --> <!-- Right Side Posts-->
    <div class="row no-gutters">
   
    <?php query_posts( array( 'posts_per_page' => 2,'category_name' =>'Latest news',

    'offset'=>1,  'order' => 'DESC' ) ); 
     while ( have_posts() ) : the_post();

      if (!in_array($post->ID, $do_not_duplicate)): ?>

        <div class="col-md-12 col-sm-6 card mb-sm-2 mb-4">
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



<?php get_template_part('parts/related-kerala');?>

<?php get_template_part('parts/related-national');?>

<?php get_template_part('parts/related-cinema');?>

<?php get_template_part('parts/related-culture');?>

<?php get_template_part('parts/related-rights');?>

<?php get_template_part('parts/related-ecology');?>

<?php get_template_part('parts/related-analysis');?>

</div><!--Left Area Close-->

    <?php get_sidebar(); ?>
  </div><!-- /.row -->
</main><!-- /.container -->

<?php 
    b4st_main_after();
    get_footer(); 
?>
