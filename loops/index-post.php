<?php
/*
The Index Post (or excerpt)
===========================
Used by index.php, category.php and author.php
*/
?>
<div class="col-sm-4 d-flex align-items-stretch">
<article role="article" id="post_<?php the_ID()?>" <?php post_class("mb-5"); ?> >
  <header class="card h-300">

    <?php the_post_thumbnail('medium', ['class' => 'card-img-top"']); ?>

    <div class="card-body">
    <h6 class="card-title">
      <a href="<?php the_permalink(); ?>">
        <?php the_title()?>
      </a>
    </h6>
    </div>

    <p class="card-text">
      <i class="far fa-calendar-alt"></i>&nbsp;<?php b4st_post_date(); ?>&nbsp;|
      <i class="far fa-user"></i>&nbsp; <?php _e('By ', 'b4st'); the_author_posts_link(); ?>&nbsp;|
      <i class="far fa-comment"></i>&nbsp;<a href="<?php comments_link(); ?>"><?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), '', 'b4st' ), number_format_i18n( get_comments_number() ) ); ?></a>
    </p>
  </header>
  
</article>
</div>
