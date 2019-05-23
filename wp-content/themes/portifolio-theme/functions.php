<?php 

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri());
  wp_enqueue_script( 'fullpage', get_template_directory_uri() . '/dist/js/full-page-scroll.js', array(), null, true);
  wp_enqueue_script( 'script', get_template_directory_uri() . '/dist/js/main.min.js', array(), null, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );