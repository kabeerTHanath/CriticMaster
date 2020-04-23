<?php
/**!
 * The Sidebar
 * Note: The main column has simply Bootstrap flexbox "col-sm" so it will expand
 * to occupy the whole row (if no sidebar) or to occupy whatever part of the row
 * is available (if there is a sidebar, or more than one sidebar, etc.).
 *
 * (So, you don't need to set the main column to col-sm-8 or whatever.)
 */
?>

<?php if( is_active_sidebar('sidebar-widget-area') ): ?>
<div id="sidebar" class="sidebar col-sm-4 px-0" role="navigation">

<div class="container rlp">


  <?php
    b4st_sidebar_before();
    dynamic_sidebar('sidebar-widget-area');
    b4st_sidebar_after();
  ?>

  <section id="recent" class="my-4 bg-light pt-2" >

<h5 class="pl-3 text-danger "><a href="https://www.thecritic.in/category/current-news/">CURRENT NEWS</a></h5>
 <?php   $recentpost = new WP_Query( array( 'posts_per_page' => 6,'category_name'=> 'Current News', 'order' => 'DESC'  ) );
  while ( $recentpost->have_posts() ) : $recentpost->the_post(); ?>


 <div class="row no-gutters border mb-2">

<div class="col-sm-3 col-3">

<?php  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); ?>
<a href="<?php the_permalink(); ?>"> <img class="card-img-top img-fluid" src="<?php echo esc_url($featured_img_url) ?> "> </a>

</div>

<div class="col-sm-9 col-9 pl-2 mt-1">

 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h4><?php the_title(); ?></h4></a>
</div>
                 
</div>

<?php endwhile; wp_reset_postdata(); ?>
</section>


<section id="recent" class="my-4 bg-light pt-2" >

<h5 class="pl-3 text-danger"><a href="https://www.thecritic.in/category/politics">SPORTS</a></h5>
 <?php   $recentpost = new WP_Query( array( 'posts_per_page' => 6,'category_name'=> 'Sports', 'order' => 'DESC'  ) );
  while ( $recentpost->have_posts() ) : $recentpost->the_post(); ?>


 <div class="row no-gutters border mb-2">

<div class="col-sm-3 col-3">

<?php  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); ?>
<a href="<?php the_permalink(); ?>"> <img class="card-img-top img-fluid" src="<?php echo esc_url($featured_img_url) ?> "> </a>

</div>

<div class="col-sm-9 col-9 pl-2 mt-1">

 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h4><?php the_title(); ?></h4></a>
</div>
                 
</div>

<?php endwhile; wp_reset_postdata(); ?>
</section>






<?php
    b4st_sidebar_before();
    dynamic_sidebar('sidebar-widget-area-2');
    b4st_sidebar_after();
  ?>




<section id="recent" class="my-4 bg-light pt-2" >

<h5 class="pl-3 text-danger"><a href="https://www.thecritic.in/category/literature/">LITERATURE</a></h5>
 <?php   $recentpost = new WP_Query( array( 'posts_per_page' => 6,'category_name'=> 'literature', 'order' => 'DESC'  ) );
  while ( $recentpost->have_posts() ) : $recentpost->the_post(); ?>


 <div class="row no-gutters border mb-2">

<div class="col-sm-3 col-3">

<?php  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); ?>
<a href="<?php the_permalink(); ?>"> <img class="card-img-top img-fluid" src="<?php echo esc_url($featured_img_url) ?> "> </a>

</div>

<div class="col-sm-9 col-9 pl-2 mt-1">

 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h4><?php the_title(); ?></h4></a>
</div>
                 
</div>

<?php endwhile; wp_reset_postdata(); ?>
</section>




<section id="recent" class="my-4 bg-light pt-2" >

<h5 class="pl-3 text-danger"><a href="https://www.thecritic.in/category/social">SOCIAL MEDIA</a></h5>
 <?php   $recentpost = new WP_Query( array( 'posts_per_page' => 6,'category_name'=> 'Social', 'order' => 'DESC'  ) );
  while ( $recentpost->have_posts() ) : $recentpost->the_post(); ?>


 <div class="row no-gutters border mb-2">

<div class="col-sm-3 col-3">

<?php  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); ?>
<a href="<?php the_permalink(); ?>"> <img class="card-img-top img-fluid" src="<?php echo esc_url($featured_img_url) ?> "> </a>

</div>

<div class="col-sm-9 col-9 pl-2 mt-1">

 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h4><?php the_title(); ?></h4></a>
</div>
                 
</div>

<?php endwhile; wp_reset_postdata(); ?>
</section>







  <section id="recent" class="my-4 bg-light pt-2" >

<h5 class="pl-3 text-danger"><a href="https://www.thecritic.in/category/latest-news/">RECENT ARTICLES</a></h5>
 <?php   $recentpost = new WP_Query( array( 'posts_per_page' => 6, 'order' => 'DESC' ) );
  while ( $recentpost->have_posts() ) : $recentpost->the_post(); ?>


 <div class="row no-gutters border mb-2">

<div class="col-sm-3 col-3">

<?php  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); ?>
<a href="<?php the_permalink(); ?>"> <img class="card-img-top img-fluid" src="<?php echo esc_url($featured_img_url) ?> "> </a>

</div>

<div class="col-sm-9 col-9 pl-2 mt-1">

 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h4><?php the_title(); ?></h4></a>
</div>
                 
</div>

<?php endwhile; wp_reset_postdata(); ?>
</section>


<?php
    b4st_sidebar_before();
    dynamic_sidebar('sidebar-widget-area-3');
    b4st_sidebar_after();
?>



<section id="recent" class="my-4 bg-light pt-2" >

<h5 class="pl-3 text-danger"><a href="https://www.thecritic.in/category/#/">MOST READ ARTICLES</a></h5>


 <?php   $popularpost = new WP_Query( array( 'posts_per_page' => 6, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
while ( $popularpost->have_posts() ) : $popularpost->the_post();  ?>


 <div class="row no-gutters border mb-2">

<div class="col-sm-3 col-3">

<?php the_post_thumbnail() ?>



</div>

<div class="col-sm-9 col-9 pl-2 mt-1">

 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h4><?php the_title(); ?></h4></a>
</div>
                 
</div>

<?php endwhile; wp_reset_postdata(); ?>
</section>




  

</div>

</div>
<?php endif; ?>
