<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php b4st_navbar_before();?>

<nav id="navbar" class="navbar navbar-expand-md d-flex navbar-light">

  <div class="container">

  <div class="col-sm-4 d-flex px-0">


    <div class="">

    <a class="navbar-brand d-none d-sm-block"  href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/theme/img/logo1.png" width="200" height="61"/></a>

            <div class="d-none d-md-block mt-2">
              <span style="padding-left:16px;"><?php echo date('j'); ?></span>
              <span><?php echo date('l'); ?></span>
              <span><?php echo date('F Y'); ?></span>
            </div> 
    </div>

    <a class="navbar-brand d-block d-sm-none" href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/theme/img/logo-mob.png" width="100" height="32"/></a>

     <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>     

  </div>



  <div class="col-sm-8 mt-2 px-0" style="background: #ccc">
   <?php dynamic_sidebar( 'header_ad' ); ?>
  </div>



    <div class="collapse navbar-collapse bg-dark align-self-end mt-3 mb-2 pl-3" id="navbarDropdown">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'navbar',
          'container'       => false,
          'menu_class'      => '',
          'fallback_cb'     => '__return_false',
          'items_wrap'      => '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
          'depth'           => 2,
          'walker'          => new b4st_walker_nav_menu()
        ) );
      ?>    
    </div>
  

  </div>
</nav>

<?php b4st_navbar_after();?>