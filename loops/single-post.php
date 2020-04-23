<?php
/*
The Single Post
===============
*/
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
    <header class="mb-4">


      <?php  the_post_thumbnail('large'); ?>



      <h1 class="mt-4">
        <?php the_title()?>
      </h1>
      <div class="header-meta text-muted">
        


        <small class="d-block d-sm-none"> <?php  the_author_posts_link(); ?></small>
        
        <b class="d-none d-sm-block"> <?php  the_author_posts_link(); ?></b>

    

      </div>
    </header>


    <main class="article">


      <blockquote class="blockquote bg-light p-4">
        <?php the_excerpt() ?>
      </blockquote>


      <?php
       
        the_content();

        wp_link_pages();
      ?>


      <hr><h4 style="color: red;">
  ഞങ്ങളുടെ ഫേസ്ബുക് പേജ് ലൈക് ചെയ്യൂ..
</h4>
<div class="fb-like" data-href="https://www.facebook.com/thecritic.in/" data-width="" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div><hr>

    
  <?php wpb_set_post_views(get_the_ID());

        if ( is_user_logged_in() )
        {
          ?>

           <p style="color: green; font-weight: bolder;">
           <?php echo wpb_get_post_views(get_the_ID()); ?>
           </p>
         
         <?php } ?>

    </main>


        <?php
          _e('Published On ', 'b4st');
          b4st_post_date();
        ?>




    <footer class="mt-5 border-top pt-3">
      <p>
            
        <?php _e('Category: ', 'b4st'); the_category(', ') ?> | <?php if (has_tag()) { the_tags('Tags: ', ', '); ?> | <?php } _e('Comments', 'b4st'); ?>: <?php printf( number_format_i18n( get_comments_number() ) ); ?> | <?php wpb_get_post_views(get_the_ID()); ?> 
      </p>

      <p class="disclimer">'ക്രിട്ടിക്കില്‍ പ്രസിദ്ധീകരിക്കുന്ന ലേഖനങ്ങള്‍ ലേഖകരുടെ അഭിപ്രായങ്ങളാണ്.. അവ പൂര്‍ണ്ണമായും ക്രിട്ടിക്കിന്റെ അഭിപ്രായങ്ങളാകണമെന്നില്ല - എഡിറ്റര്‍'</p>
      
    </footer>
  </article>
<?php

// This continues in the single post loop
    if ( comments_open() || get_comments_number() ) :
      //comments_template();
      comments_template('/loops/single-post-comments.php');
    endif;
    
  endwhile; else :
    get_template_part('loops/404');
  endif;
?>






<div class="row mt-5 mb-4 border-top pt-3 post_link">
  <div class="col-6 border">
    <?php previous_post_link('%link', '<i class="fas fa-fw fa-arrow-left"></i> Previous post: '.'%title'); ?>
  </div>
  <div class="col-6 text-right border">
    <?php next_post_link('%link', 'Next post: '.'%title' . ' <i class="fas fa-fw fa-arrow-right"></i>'); ?>
  </div>
</div>




