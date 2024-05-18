<?php
if (post_password_required()) {
    return;
}

if (have_comments()) : ?>
    <h2><?php echo number_format_i18n(get_comments_number()); ?> Comments</h2>

    <ol class="comment-list">
        <?php
        wp_list_comments(array(
            'style'      => 'ol',
            'short_ping' => true,
        ));
        ?>
    </ol>

    <?php the_comments_navigation();

else : // There are no comments.
    if (!comments_open()) :
    ?>
        <p class="no-comments">Comments are closed.</p>
<?php
    endif;

endif; // Check for have_comments().

comment_form(array('class_form' => 'pure-form pure-form-stacked'));
?>