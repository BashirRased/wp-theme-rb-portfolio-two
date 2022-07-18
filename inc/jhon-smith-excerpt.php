<?php
/**
 * Post Excerpt for this theme
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.0
 */

 /**
 * Creates continue reading text.
 *
 * @since RB Portfolio Two 1.0.0
 */
if(!function_exists('rb_portfolio_two_read_more_text')) {
	function rb_portfolio_two_read_more_text() {
	
		if (!empty(get_the_content()) ){
			$read_more = printf(
				/* translators:
				%1$s: Slug of current post.
				%2$s: Read More Text.
				%3$s: Name of current post.
				*/
				'<a class="rb-portfolio-two-btn" href="%1$s">%2$s %3$s</a>',
				esc_url(get_permalink()),
				esc_html__('Read More', 'rb-portfolio-two'),
				the_title('<span class="screen-reader-text">', '</span>', false)
			);
		}
	
	}
}

/**
 * Filter the excerpt more text [...].
 *
 * @param int $more Excerpt more text.
 * @return int (Maybe) modified excerpt more text.
 */
function rb_portfolio_two_excerpt_more($more) {
    return false;
}
add_filter('excerpt_more', 'rb_portfolio_two_excerpt_more');

/**
 * Filter the excerpt length to 30 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function rb_portfolio_two_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'rb_portfolio_two_excerpt_length');