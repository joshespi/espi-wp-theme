<?php
$theme_version = wp_get_theme()->get('Version');

//add theme supports
add_theme_support("post-thumbnails");
add_theme_support("title-tag");
add_theme_support('automatic-feed-links');
add_theme_support("wp-block-styles");
add_theme_support("responsive-embeds");
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
add_theme_support("align-wide");



//add theme assets
function espitheme_assets()
{
    global $theme_version;
    // Enqueue style file
    wp_enqueue_style('pure-css', 'https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css', array(), '3.0.0', 'all');
    wp_enqueue_style('theme-css', get_stylesheet_uri(), array(), $theme_version, 'all');
}

add_action('wp_enqueue_scripts', 'espitheme_assets', 10);



// Register menu
function espitheme_menus()
{
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'espi-theme'),
        'footer-menu' => __('Footer Menu', 'espi-theme')
    ));
}

add_action('init', 'espitheme_menus');
