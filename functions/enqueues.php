<?php
/**!
 * Enqueues
 */

if ( ! function_exists('b4st_enqueues') ) {
	function b4st_enqueues() {

		// Styles

		wp_register_style('bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css', false, '4.2.1', null);
		wp_enqueue_style('bootstrap-css');

		wp_register_style('fontawesome5-css', 'https://use.fontawesome.com/releases/v5.4.1/css/all.css', false, '5.4.1', null);
		wp_enqueue_style('fontawesome5-css');

		wp_register_style('b4st-css', get_template_directory_uri() . '/theme/b4st.css', false, null);
		wp_enqueue_style('b4st-css');

		
		wp_register_style('editor-styles-css', get_template_directory_uri() . '/theme/editor-styles.css', false,'5.3', null);
		wp_enqueue_style('editor-styles-css');

		// Scripts 

		wp_register_script('modernizr',  'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
		wp_enqueue_script('modernizr');

		wp_register_script('jquery-min-js',  'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, '2.8.3', true);
		wp_enqueue_script('jquery-min-js');

		//wp_enqueue_script('jquery');


		wp_register_script('bootstrap-bundle', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js', false, '4.3.1', true);
		wp_enqueue_script('bootstrap-bundle');
		// (The Bootstrap JS bundle contains Popper JS.)


		wp_register_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js', false, '4.1.3', true);
		wp_enqueue_script('slick-js');


		wp_register_script('b4st-js', get_template_directory_uri() . '/theme/b4st.js', false, null, true);
		wp_enqueue_script('b4st-js');

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
}
add_action('wp_enqueue_scripts', 'b4st_enqueues', 100);
