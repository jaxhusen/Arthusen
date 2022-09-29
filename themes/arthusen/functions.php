<?php
add_action('wp_enqueue_scripts', 'arthusen_enqueue');

function arthusen_enqueue()
{
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_theme_support( 'post-thumbnails' );

//kod för ACF blocket HERO

add_action('acf/init', 'my_acf_init_block_types');

function my_acf_init_block_types(){

if(function_exists('acf_register_block_type')){

    acf_register_block_type(array(

        'name' => 'hero',
        'title' => __('Hero'),
        'desctiption' => __('A custom hero block'),
        'render_template' => 'template-parts/blocks/hero.php',
        'category' => 'formatting',
        'icon' => 'format-image',
        'keywords' => array('hero'),
    ));

}
}

if(function_exists('acf_add_options_page')){
    acf_add_options_page();
}