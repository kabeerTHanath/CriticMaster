<?php
/*
All the functions are in the PHP files in the `functions/` folder.
*/



require get_template_directory() . '/functions/cleanup.php';
require get_template_directory() . '/functions/setup.php';
require get_template_directory() . '/functions/enqueues.php';
require get_template_directory() . '/functions/hooks.php';
require get_template_directory() . '/functions/navbar.php';
require get_template_directory() . '/functions/widgets.php';
require get_template_directory() . '/functions/search-widget.php';
require get_template_directory() . '/functions/index-pagination.php';
require get_template_directory() . '/functions/single-split-pagination.php';



// excerpt shortening function

//   function custom_excerpt_length( $length ) {
	//   return 12;
// add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


// post views count function
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);



function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;    
    }
    wpb_set_post_views($post_id);

    
}
add_action( 'wp_head', 'wpb_track_post_views');


function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}





/* add link to postthumbnail  */

function wpdocs_post_image_html( $html, $post_id, $post_image_id ) {
    $html = '<a href="' . get_permalink( $post_id ) . '" alt="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
    return $html;
}
add_filter( 'post_thumbnail_html', 'wpdocs_post_image_html', 10, 3 );




/* Login Page Customization codes  *//* Login Page Customization changes links from logo  */

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
    background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/theme/img/logo-login.png);
        height:148px;
        width:160px;
        background-size: 160px 148px;
        background-repeat: no-repeat;
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


/* Login Page Customization changes links from logo  *//* Login Page Customization changes links from logo  */
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . 'theme/style-login.css' );
    
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );





/*
//exclude some categories from the_category list. 
 function the_category_filter($thelist,$separator=' ') {
     // list the IDs of the categories to exclude
     $exclude = array(4, 48, 1);
     // create an empty array
     $exclude2 = array();

     // loop through the excluded IDs and get their actual names
     foreach($exclude as $c) {
          // store the names in the second array
          $exclude2[] = get_cat_name($c);
     }

     // get the list of categories for the current post     
     $cats = explode($separator,$thelist);
     // create another empty array      
     $newlist = array();

     foreach($cats as $cat) {
          // remove the tags from each category
          $catname = trim(strip_tags($cat));

          // check against the excluded categories
          if(!in_array($catname,$exclude2))

          // if not in that list, add to the new array
          $newlist[] = $cat;
     }
     // return the new, shortened list
     return implode($separator,$newlist);
}

// add the filter to 'the_category' tag
add_filter('the_category','the_category_filter', 10, 2);

*/

// Limit except length to 125 characters.
// tn limited excerpt length by number of characters
 
/*
 function get_title( $count ) {
$permalink = get_permalink($post->ID);
$title = get_the_title();
$title = strip_tags($title);
$title = substr($title, 0, $count);
$title = substr($title, 0, strripos($title, " "));
$title = '<p>'.$title.'... <a href="'.$permalink.'"></a></p>';
return $title;
}


*/

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  } 
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
 




