<?php
/**!
 * Widgets
 */

function b4st_widgets_init() {

  /*
  Sidebar (one widget area)
   */
  register_sidebar( array(
    'name'            => __( 'Sidebar', 'b4st' ),
    'id'              => 'sidebar-widget-area',
    'description'     => __( 'The sidebar widget area', 'b4st' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h2 class="h4">',
    'after_title'     => '</h2>',
  ) );


  register_sidebar( array(
    'name'            => __( 'Sidebar Two', 'b4st' ),
    'id'              => 'sidebar-widget-area-2',
    'description'     => __( 'The sidebar widget area 2', 'b4st' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h2 class="h4">',
    'after_title'     => '</h2>',
  ) );


  register_sidebar( array(
    'name'            => __( 'Sidebar Three', 'b4st' ),
    'id'              => 'sidebar-widget-area-3',
    'description'     => __( 'The sidebar widget area 3', 'b4st' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h2 class="h4">',
    'after_title'     => '</h2>',
  ) );


  register_sidebar( array(
    'name'            => __( 'Sidebar Article Page', 'b4st' ),
    'id'              => 'sidebar-widget-area-article',
    'description'     => __( 'The sidebar widget area 2', 'b4st' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h2 class="h4">',
    'after_title'     => '</h2>',
  ) );




  register_sidebar( array(
    'name'          => 'Header Ad',
    'id'            => 'header_ad',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>',
  ) );







  /*
  Footer (1, 2, 3, or 4 areas)

  Flexbox `col-sm` gives the correct the column width:

  * If only 1 widget, then this will have full width ...
  * If 2 widgets, then these will each have half width ...
  * If 3 widgets, then these will each have third width ...
  * If 4 widgets, then these will each have quarter width ...
  ... above the Bootstrap `sm` breakpoint.
   */

  register_sidebar( array(
    'name'            => __( 'Footer', 'b4st' ),
    'id'              => 'footer-widget-area',
    'description'     => __( 'The footer widget area', 'b4st' ),
    'before_widget'   => '<div class="%1$s %2$s col-sm">',
    'after_widget'    => '</div>',
    'before_title'    => '<h2 class="h4">',
    'after_title'     => '</h2>',
  ) );


  register_sidebar( array(
    'name'            => __( 'Ad Left One', 'b4st' ),
    'id'              => 'Ad_Left_one_area',
    'description'     => __( 'the left area first ad', 'b4st' ),
    'before_widget'   => '<div class="%1$s %2$s col-sm-12 mt-4">',
    'after_widget'    => '</div>',
    'before_title'    => '<h2 class="h4">',
    'after_title'     => '</h2>',
  ) );


  register_sidebar( array(
    'name'            => __( 'Ad Left Two', 'b4st' ),
    'id'              => 'Ad_Left_two_area',
    'description'     => __( 'the left area Second ad', 'b4st' ),
    'before_widget'   => '<div class="%1$s %2$s col-sm-12 mt-4">',
    'after_widget'    => '</div>',
    'before_title'    => '<h2 class="h4">',
    'after_title'     => '</h2>',
  ) );

}
add_action( 'widgets_init', 'b4st_widgets_init' );