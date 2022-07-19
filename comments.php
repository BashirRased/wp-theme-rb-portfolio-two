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
 * @version RB Portfolio Two 1.0.3
 * @since RB Portfolio Two 1.0.3
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$rb_portfolio_two_comment_count = get_comments_number();
?>

<!--================================
----- Comments Area Start Here -----
=================================-->
<div class="comments-area">
    
    <?php if (have_comments()) : ?>

    <!-- Total Number of Comments -->
    <div class="comments-count">
        <?php
        if ($rb_portfolio_two_comment_count) {
            printf(
                /* translators:
                1: Number of comments,
                2: Post title.
                */
                _nx(
                    '%1$s comment on <span class="comment-title">&ldquo;%2$s&rdquo;</span>',
                    '%1$s comments on <span class="comment-title">&ldquo;%2$s&rdquo;</span>', $rb_portfolio_two_comment_count,
                    'Comments title',
                    'rb-portfolio-two'
                ),
                number_format_i18n($rb_portfolio_two_comment_count),
                get_the_title()
            );            
        }
        ?>

    </div><!-- .comments-count -->

    <!-- Comments List Show -->
    <div class="comments-list">
        <?php
        wp_list_comments();
        ?>
    </div><!-- .comments-list -->

    <!-- Comments Pagination -->
    <div class="comments-pagination">
        <?php
        the_comments_pagination();
        ?>
    </div><!-- .comments-pagination -->

    <!-- Comments Close -->
    <div class="comments-close">
        <?php if (!comments_open()) : ?>
			<p class="comments-close-text">
                <?php esc_html_e('Comments are closed.', 'rb-portfolio-two'); ?>
            </p>
		<?php endif; ?>
    </div><!-- .comments-close -->

    <?php endif; ?>

    <!-- Comments Form -->
    <div class="comments-form">
        <?php comment_form(); ?>
    </div><!-- .comments-form -->

</div>
<!--==============================
----- Comments Area End Here -----
===============================-->