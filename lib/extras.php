<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * Clean up header
 */
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

add_filter('the_generator','__return_false');
add_filter('show_admin_bar','__return_false');



/**
 * Google Maps
 */
function my_acf_init() {
  acf_update_setting('google_api_key', 'AIzaSyC59KGdy45eWBWxvS52amfuj6osIsdcs0w');
}
add_action('acf/init', __NAMESPACE__ . '\\my_acf_init');


function theme_logo() { ?>
    <style type="text/css">
      #login h1 a, .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo.png);
        height:40px;
        width:320px;
        background-size: contain;
        background-repeat: no-repeat;
        margin: 0;
        padding: 0;
      }
    </style>
<?php }
add_action('login_enqueue_scripts', __NAMESPACE__ . '\\theme_logo');