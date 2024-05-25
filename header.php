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
            $menu_name = 'main-menu';
            $menu_items = wp_get_nav_menu_items($menu_name);
            $menu_class = 'main-menu';
            if ($menu_items && count($menu_items) > 5) {
                $menu_class .= ' moreThan5';
            }

            if (has_nav_menu($menu_name)) {
                wp_nav_menu(array(
                    'theme_location' => $menu_name,
                    'menu_id' => 'main-menu',
                    'menu_class' => $menu_class
                ));
            } else {
                echo '<p>Please set a menu to "' . $menu_name . '" in theme settings.</p>';
            }
            ?>
        </nav>
    </header>
    <main>