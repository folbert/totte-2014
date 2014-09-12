<?php

// Hide admin bar in the front end
add_filter('show_admin_bar', '__return_false');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function totte_widgets_init() {

  register_sidebar( array(
    'name' => 'Start middle column',
    'id' => 'start_middle',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="rounded">',
    'after_title' => '</h2>',
  ) );

  register_sidebar( array(
    'name' => 'Start right column',
    'id' => 'start_right',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="rounded">',
    'after_title' => '</h2>',
  ) );

}
add_action( 'widgets_init', 'totte_widgets_init' );