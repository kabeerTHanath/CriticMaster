<?php /* Template Name: Slider */ ?>
<?php
    get_header(); 
    b4st_main_before();
?>

<main id="main" class="container mt-5">
  <div class="row">

    <div class="col-sm-8">
      <div id="content" role="main">


  
  
   <section class="key-post-slider slider">
    <?php
    $args = array( 'posts_per_page' => 8);

    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <div class="slide">
            <div class="card"><?php the_post_thumbnail();?></div>
            <div class="card-body">
              <div class="card-text"><?php the_title();?></div>
            </div>
        </div>
    <?php endforeach; 
    wp_reset_postdata();?>
   </section>


   




      </div><!-- /#content -->
    </div>

    

  </div><!-- /.row -->
</main><!-- /.container -->

<?php 
    b4st_main_after();
    get_footer(); 
?>
