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
 * @subpackage Jhon Smith
 * @version Jhon Smith 1.0.1
 * @since Jhon Smith 1.0.1
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$jhon_smith_comment_count = get_comments_number();
?>

<!--================================
----- Comments Area Start Here -----
=================================-->
<div class="jhon-smith-comments-area">
    
    <?php if (have_comments()) : ?>

    <!-- Total Number of Comments -->
    <div class="jhon-smith-comments-count">
        <?php
        if ($jhon_smith_comment_count) {
            printf(
                /* translators:
                1: Number of comments,
                2: Post title.
                */
                _nx(
                    '%1$s comment on <span class="jhon-smith-comment-title">&ldquo;%2$s&rdquo;</span>',
                    '%1$s comments on <span class="jhon-smith-comment-title">&ldquo;%2$s&rdquo;</span>', $jhon_smith_comment_count,
                    'Comments title',
                    'jhon-smith'
                ),
                number_format_i18n($jhon_smith_comment_count),
                get_the_title()
            );            
        }
        ?>

    </div><!-- .jhon-smith-comments-count -->

    <!-- Comments List Show -->
    <div class="jhon-smith-comments-list">
        <?php
        wp_list_comments();
        ?>
    </div><!-- .jhon-smith-comments-list -->

    <!-- Comments Pagination -->
    <div class="jhon-smith-comments-pagination">
        <?php
        the_comments_pagination();
        ?>
    </div><!-- .jhon-smith-comments-pagination -->

    <!-- Comments Close -->
    <div class="jhon-smith-comments-close">
        <?php if (!comments_open()) : ?>
			<p class="jhon-smith-comments-close-text">
                <?php esc_html_e('Comments are closed.', 'jhon-smith'); ?>
            </p>
		<?php endif; ?>
    </div><!-- .jhon-smith-comments-close -->

    <?php endif; ?>

    <!-- Comments Form -->
    <div class="jhon-smith-comments-form">
        <?php comment_form(); ?>
    </div><!-- .jhon-smith-comments-form -->

</div>
<!--==============================
----- Comments Area End Here -----
===============================-->