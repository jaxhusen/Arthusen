<?php
add_action('wp_enqueue_scripts', 'arthusen_enqueue');

function arthusen_enqueue()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_theme_support('post-thumbnails');


//kod för ACF blocket startsida-blocktva
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{

    //check function exists
    if (function_exists('acf_register_block_type')) {

        //register a startsida-blocktva block
        acf_register_block_type(array(
            'name' => 'startsida-blocktva',
            'title' => __('Startsida-blocktva'),
            'desctiption' => __('A custom startsida-blocktva block'),
            'render_template' => 'template-parts/blocks/startsida-blocktva.php',
            'category' => 'formatting',
            'icon' => 'format-image',
            'keywords' => array('startsida-blocktva'),
        ));

        //register a butiker block
        acf_register_block_type(array(
            'name'              => 'butiker',
            'title'             => __('Butiker'),
            'description'       => __('A custom butiker block.'),
            'render_template'   => 'template-parts/blocks/butiker.php',
            'category'          => 'formatting',
            'icon'              => 'format-image',
            'keywords'          => array('butiker'),
        ));
    }
}


if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}


// lägger till produkt i woocommerce.php
function add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'add_woocommerce_support');





//posttype för "våra butiker"
function create_posttype()
{
    register_post_type(
        'butiker',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Butiker'),
                'singular_name' => __('Butiker')
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'butiker'),
        )
    );
}
// Hooking up our function to theme setup
add_action('init', 'create_posttype');
