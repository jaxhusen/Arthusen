<?php
add_action('wp_enqueue_scripts', 'arthusen_enqueue');

function arthusen_enqueue(){
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_theme_support( 'post-thumbnails' );
