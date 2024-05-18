<?php
//add theme supports
add_theme_support('post-thumbnails');
add_theme_support('menus');

//add theme assets
function espitheme_assets()
{
    // Enqueue style file
    wp_enqueue_style('reset-css', get_template_directory_uri() . '/assets/css/reset.css', array(), '2.0.0', 'all');
    wp_enqueue_style('style-name', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'espitheme_assets', 10);



// Register menu
function espitheme_menus()
{
    register_nav_menus(array(
        'main-menu' => __('Main Menu'),
        'footer-menu' => __('Footer Menu')
    ));
}

add_action('init', 'espitheme_menus');
