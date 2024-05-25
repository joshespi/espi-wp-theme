<?php
get_header();

$is_singular = is_singular();
$is_front_page = is_front_page();

// ob_start();

if ($is_singular) {
    the_title('<h1>', '</h1>');
} else {
    echo "<h1>Blog</h1>";
}

// Start “The Loop”
if (have_posts()) :
    echo '<section class="' . ($is_singular ? 'single' : 'multi') . '">';
    while (have_posts()) : the_post();
        echo '<article id="post-' . get_the_ID() . '" ';
        post_class();
        echo '>';
        if ($is_front_page) {
            the_title('<h2><a href="' . get_permalink() . '">', '</a></h2>');
        }
        if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
            echo '<div>';
            the_post_thumbnail();  // display the featured image.
            echo '</div>';
        }  // end Featured Image
        if ($is_singular) {
            the_content();
            if (comments_open() || get_comments_number()) {
                comments_template();
            }
        } else {
            the_excerpt();
        }
        wp_link_pages(array(
            'before' => '<div class="post-links">' . __('Posts:', 'espi-theme'),
            'after'  => '</div>',
        ));
        echo '</article>';
    endwhile;
    echo '</section>';
    // Pagination
    $args = array(
        'prev_text' => __('« Previous', 'espi-theme'),
        'next_text' => __('Next »', 'espi-theme'),
    );
    echo paginate_links($args);

else :
    _e('Sorry, no  posts matched your criteria.', 'espi-theme');
endif;
// End of “The Loop”

// $output = ob_get_clean();
// echo $output;

get_footer();
