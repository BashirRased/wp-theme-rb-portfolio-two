<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage RB Free Theme
 * @since Jhon Smith 1.0.0
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
        wp_list_comments(array(
            // 'walker' => '',
            // 'max_depth' => '',

            // Set Comments List Style Values('ul'|'ol'|'div')
            // 'style' => 'ul',

            // 'callback' => '',
            // 'end-callback' => '',
            // 'type' => '',
            // 'page' => '',
            // 'per_page' => '',

            // Comment Author Image
            // 'avatar_size' => 100,

            // 'reverse_top_level' => '',
            // 'reverse_children' => '',
            // 'format' => '',
            // 'short_ping' => '',
            // 'echo' => ''
        ));
        ?>
    </div><!-- .jhon-smith-comments-list -->

    <!-- Comments Pagination -->
    <div class="jhon-smith-comments-pagination">
        <?php
        the_comments_pagination(array(
            // 'screen_reader_text' => 'Comments navigation',
            // 'aria_label' => 'Comments',
            // 'class' => 'comments-pagination'
        ));
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
        <?php comment_form( array(
            // 'fields' => array(
            //     'author' => '',
            //     'email' => '',
            //     'url' => '',
            //     'cookies' => ''
            // ),
            // 'comment_field' => '',
            // 'must_log_in' => '',
            // 'logged_in_as' => '',
            // 'comment_notes_before' => '',
            // 'comment_notes_after' => '',
            // 'action' => '',
            // 'id_form' => '',
            // 'id_submit' => '',
            // 'class_container' => '',
            // 'class_form' => '',
            // 'class_submit' => '',
            // 'name_submit' => '',
            // 'title_reply' => '',
            // 'title_reply_to' => '',
            // 'title_reply_before' => '',
            // 'title_reply_after' => '',
            // 'cancel_reply_before' => '',
            // 'cancel_reply_after' => '',
            // 'cancel_reply_link' => '',
            // 'label_submit' => '',
            // 'submit_button' => '',
            // 'submit_field' => '',
            // 'format' => ''
        )); ?>
    </div><!-- .jhon-smith-comments-form -->

</div>
<!--==============================
----- Comments Area End Here -----
===============================-->