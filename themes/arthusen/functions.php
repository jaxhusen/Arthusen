<?php
add_action('wp_enqueue_scripts', 'arthusen_enqueue');

function arthusen_enqueue(){
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_theme_support( 'post-thumbnails' );




//kod för ACF blocket schack
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types(){

    //check function exists
if(function_exists('acf_register_block_type')){

    //register a schack block
    acf_register_block_type(array(
        'name' => 'schack',
        'title' => __('Schack'),
        'desctiption' => __('A custom schack block'),
        'render_template' => 'template-parts/blocks/schack.php',
        'category' => 'formatting',
        'icon' => 'format-image',
        'keywords' => array('schack'),
    ));
}
}


if(function_exists('acf_add_options_page')){
    acf_add_options_page();
} 