<?php
/*
b4st Hooks
==========
Designed to be used by a child theme.
*/

// Navbar (in `header.php`)

function b4st_navbar_before() {

  ?>

  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&autoLogAppEvents=1&version=v4.0&appId=2697378426959808"></script>
<?php
  do_action('navbar_before');
}

function b4st_navbar_after() {
  do_action('navbar_after');
}
function b4st_navbar_brand() {
  if ( ! has_action('navbar_brand') ) {
    ?>
    <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a>
    <?php
  } else {
		do_action('navbar_brand');
	}
}
function b4st_navbar_search() {
  if ( ! has_action('navbar_search') ) {
    ?>
    <form class="form-inline ml-auto pt-2 pt-md-0 bg-dark" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <input class="form-control mr-sm-1" type="text" value="<?php echo get_search_query(); ?>" placeholder="Search..." name="s" id="s">
      <button type="submit" id="searchsubmit" value="<?php esc_attr_x('Search', 'b4st') ?>" class="btn btn-outline-secondary my-2 my-sm-0">
        <i class="fas fa-search"></i>
      </button>
    </form>
    <?php
  } else {
		do_action('navbar_search');
	}
}


// Main

function b4st_main_before() {
  do_action('main_before');
}
function b4st_main_after() {
  do_action('main_after');
}

// Sidebar (in `sidebar.php` -- only displayed when sidebar has 1 widget or more)

function b4st_sidebar_before() {
  do_action('sidebar_before');
}
function b4st_sidebar_after() {
  do_action('sidebar_after');
}

// Footer (in `footer.php`)

function b4st_footer_before() {
  do_action('footer_before');
}
function b4st_footer_after() {
  do_action('footer_after');
}


function b4st_bottomline() {
	if ( ! has_action('bottomline') ) {
		?>
    <div class="container">
      <div class="row pt-3">
        <div class="col-sm">
          <p class="text-center text-sm-left">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
        </div>
        <div class="col-sm">
          <p class="text-center text-sm-right">Developed By Shefy Kabir 9526073725</p>
        </div>
      </div>
    </div>
		<?php		
	} else {
		do_action('bottomline');
	}
}