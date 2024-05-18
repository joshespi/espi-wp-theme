<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div id="siteTitle">
            <a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'menu_id' => 'main-menu',
                'menu_class' => 'main-menu'
            ));
            ?>
        </nav>
    </header>
    <main>