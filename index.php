<?php get_header(); ?>


<?php
if (is_singular()) {
    the_title('<h1><a href="' . get_permalink() . '">', '</a></h1>');
} else {
    echo "<h1>Blog</h1>";
}

?>
<?php
// Start “The Loop”
if (have_posts()) :

    while (have_posts()) : the_post();
        echo '<article>';
        if (is_front_page()) {
            the_title('<h2><a href="' . get_permalink() . '">', '</a></h2>');
        }
        if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail();  // display the featured image.
        }  // end Featured Image
        if (is_singular()) {
            the_content();
            if (comments_open() || get_comments_number()) {
                comments_template();
            }
        } else {
            the_excerpt();
        }
        echo '</article>';
    endwhile;
    // Pagination
    $args = array(
        'prev_text' => __('« Previous'),
        'next_text' => __('Next »'),
    );
    echo paginate_links($args);

else :
    _e('Sorry, no  posts matched your criteria.', 'textdomain');
endif;
// End of “The Loop”
?>

<?php get_footer(); ?>