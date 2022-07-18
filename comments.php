<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.1
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$rbp_two_comment_count = get_comments_number();
?>

<!--================================
----- Comments Area Start Here -----
=================================-->
<div class="rbp-two-comments-area">
    
    <?php if (have_comments()) : ?>

    <!-- Total Number of Comments -->
    <div class="rbp-two-comments-count">
        <?php
        if ($rbp_two_comment_count) {
            printf(
                /* translators:
                1: Number of comments,
                2: Post title.
                */
                _nx(
                    '%1$s comment on <span class="rbp-two-comment-title">&ldquo;%2$s&rdquo;</span>',
                    '%1$s comments on <span class="rbp-two-comment-title">&ldquo;%2$s&rdquo;</span>', $rbp_two_comment_count,
                    'Comments title',
                    'rbp-two'
                ),
                number_format_i18n($rbp_two_comment_count),
                get_the_title()
            );            
        }
        ?>

    </div><!-- .rbp-two-comments-count -->

    <!-- Comments List Show -->
    <div class="rbp-two-comments-list">
        <?php
        wp_list_comments();
        ?>
    </div><!-- .rbp-two-comments-list -->

    <!-- Comments Pagination -->
    <div class="rbp-two-comments-pagination">
        <?php
        the_comments_pagination();
        ?>
    </div><!-- .rbp-two-comments-pagination -->

    <!-- Comments Close -->
    <div class="rbp-two-comments-close">
        <?php if (!comments_open()) : ?>
			<p class="rbp-two-comments-close-text">
                <?php esc_html_e('Comments are closed.', 'rbp-two'); ?>
            </p>
		<?php endif; ?>
    </div><!-- .rbp-two-comments-close -->

    <?php endif; ?>

    <!-- Comments Form -->
    <div class="rbp-two-comments-form">
        <?php comment_form(); ?>
    </div><!-- .rbp-two-comments-form -->

</div>
<!--==============================
----- Comments Area End Here -----
===============================-->