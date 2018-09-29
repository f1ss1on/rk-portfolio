<?php

function rk_enqueue_styles() {

	// enqueue parent styles
	wp_enqueue_style('parent-theme', get_template_directory_uri() .'/style.css');

	// enqueue child styles
	wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'/style.css', array('parent-theme'));

  wp_enqueue_style('child-styles', get_stylesheet_directory_uri() .'/css/main.min.css', array('parent-theme'));


  wp_register_script('chart', 'https://code.highcharts.com/highcharts.js', array('jquery'), 1.1, true);
  wp_enqueue_script('chart');


  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() .'/js/main.js', array('jquery'), 1.1, true);

}
add_action('wp_enqueue_scripts', 'rk_enqueue_styles');

function mobile_menu() {

  register_nav_menu('mobile-nav',_('Mobile Navigation'));
}
add_action( 'init', 'mobile_menu');

/**
 * Add support for featured images
 */
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    add_image_size('index-categories', 250, 150, true);
    add_image_size('page-single', 350, 250, true);
    add_image_size('giveaway', 300, 250, true);
    add_image_size('featImage', 1200, 486, true);
}
/*function InsertFeaturedImage($content) {
  global $post;
  $original_content = $content;
  if ( current_theme_supports( 'post-thumbnails' ) ) {
    if ((is_page()) || (is_single())) {
      $paged = get_query_var( 'page' ) ? get_query_var( 'page' ) : false;
      if ( $paged === false ) {
        $content = the_post_thumbnail('page-single');
        $content .= $original_content;
      }
    } else {
      $content = the_post_thumbnail('index-categories');
      $content .= $original_content;
    }
  }
  return $content;
}
add_filter( 'the_content', 'InsertFeaturedImage' );*/

/**
 * Add support for featured images
 */
/* Modify the read more link on the_excerpt() */

function et_excerpt_length($length) {
    return 220;
}
add_filter('excerpt_length', 'et_excerpt_length');

/* Add a link  to the end of our excerpt contained in a div for styling purposes and to break to a new line on the page.*/

function et_excerpt_more($more) {
    global $post;
    return '<div class="view-full-post"><a href="'. get_permalink($post->ID) . '" class="view-full-post-btn">View Full Post</a></div>;';
}
add_filter('excerpt_more', 'et_excerpt_more');

function register_foot_menu() {
  register_nav_menu('foot-nav',__( 'Footer Menu' ));
	register_nav_menu('social-nav',__( 'Social Navigation' ));
}
add_action( 'init', 'register_foot_menu' );
