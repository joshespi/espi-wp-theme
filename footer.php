</footer>
<footer>
    <nav>

        <?php
        $menu_name = 'footer-menu';
        $menu_items = wp_get_nav_menu_items($menu_name);
        $menu_class = 'footer-menu';
        if ($menu_items && count($menu_items) > 5) {
            $menu_class .= ' moreThan5';
        }

        if (has_nav_menu($menu_name)) {
            wp_nav_menu(array(
                'theme_location' => $menu_name,
                'menu_id' => 'footer-menu',
                'menu_class' => $menu_class
            ));
        } else {
            echo '<p>Please set a menu to "' . $menu_name . '" in theme settings.</p>';
        }
        ?>
    </nav>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
</footer>
<?php wp_footer(); ?>
</body>

</html>