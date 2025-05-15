<?php

function toothwise_enqueue_styles(){
    wp_enqueue_style( 'toothwise-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'toothwise_enqueue_styles' );

function toothwise_register_menus() {
  register_nav_menus([
    'primary' => __('Primary Menu', 'toothwise')
  ]);
}
add_action('init', 'toothwise_register_menus');

register_nav_menus([
  'primary' => __('Primary Menu', 'toothwise')
]);
