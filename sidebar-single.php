<?php
/**!
 * The Sidebar Single
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
    dynamic_sidebar('sidebar-widget-area-article');
    b4st_sidebar_after();
  ?>


  <section id="recent" class="my-4 bg-light" >

<h5 class="pt-2 ml-2">RECENT ARTICLES</h5>
 <?php   $recentpost = new WP_Query( array( 'posts_per_page' => 15, 'order' => 'DESC'  ) );
  while ( $recentpost->have_posts() ) : $recentpost->the_post(); ?>


 <div class="row no-gutters border mb-2">

<div class="col-sm-3 col-3">

<?php  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); ?>
<a href="<?php the_permalink(); ?>"> <img class="card-img-top img-fluid" src="<?php echo esc_url($featured_img_url) ?> "> </a>

</div>

<div class="col-sm-9 col-9 pl-2 mt-1 pt-2">

 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h4><?php the_title(); ?></h4></a>
</div>
                 
</div>

<?php endwhile; wp_reset_postdata(); ?>
</section>

  

</div>

</div>
<?php endif; ?>
