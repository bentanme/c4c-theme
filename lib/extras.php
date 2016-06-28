<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 *
 * Add <body> classes
 *
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
 *
 * Clean up the_excerpt()
 *
 */
function excerpt_more() {
  return ' &hellip;';
  // return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 *
 * Custom background image alignment function
 * returns the correct class
 *
 */
function featured_image_position($post_id) {
  $featured_image_position = get_post_custom_values('featured_image_position', $post_id)[0];

  if(empty($featured_image_position))
    return null;

  $output = "background-position--";
  $output .= $featured_image_position;

  return $output;
}
add_filter('featured_image_position', __NAMESPACE__ . '\\featured_image_position');

/**
 *
 * Custom styles for TinyMCE
 *
 */

function my_mce_before_init( $settings ) {

    $style_formats = [
      [
        'title' => 'Ingredients list',
        'block' => 'div',
        'classes' => 'ingredients',
        'wrapper' => true
      ]
    ];

    $settings['style_formats'] = json_encode($style_formats);

    return $settings;

}

add_filter( 'tiny_mce_before_init', __NAMESPACE__ . '\\my_mce_before_init' );

function wpdocs_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', __NAMESPACE__ . '\\wpdocs_theme_add_editor_styles' );