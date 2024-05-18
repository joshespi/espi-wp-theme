</main>
<footer>
    <nav>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'menu_id' => 'footer-menu',
            'menu_class' => 'footer'
        ));
        ?>
    </nav>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
</footer>
<?php wp_footer(); ?>
</body>

</html>