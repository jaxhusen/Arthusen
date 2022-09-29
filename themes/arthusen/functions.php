<?php
add_action('wp_enqueue_scripts', 'devsneakers_enqueue');

function devsneakers_enqueue(){
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_theme_support( 'post-thumbnails' );