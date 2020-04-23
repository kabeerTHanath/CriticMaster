<?php
    get_header(); 
    b4st_main_before();
?>
<main id="main" class="container">
  <div class="row">
    <div class="col-sm">
      <div id="content" role="main">

       
        <?php get_template_part('loops/single-post', get_post_format()); ?>
      </div><!-- /#content -->
    </div>
    <?php get_sidebar('single'); ?>
    
    
  </div><!-- /.row -->
</main><!-- /.container -->

<?php 
    b4st_main_after();
    get_footer(); 
?>
