<?php
/**
 * Post Excerpt for this theme
 *
 * @package RB Free Theme
 * @subpackage Jhon Smith
 * @version Jhon Smith 1.0.1
 * @since Jhon Smith 1.0.0
 */

 /**
 * Creates continue reading text.
 *
 * @since Jhon Smith 1.0.0
 */
if(!function_exists('jhon_smith_read_more_text')) {
	function jhon_smith_read_more_text() {
	
		if (!empty(get_the_content()) ){
			$read_more = printf(
				/* translators:
				%1$s: Slug of current post.
				%2$s: Read More Text.
				%3$s: Name of current post.
				*/
				'<a class="jhon-smith-btn" href="%1$s">%2$s %3$s</a>',
				esc_url(get_permalink()),
				esc_html__('Read More', 'jhon-smith'),
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
function jhon_smith_excerpt_more($more) {
    return false;
}
add_filter('excerpt_more', 'jhon_smith_excerpt_more');

/**
 * Filter the excerpt length to 30 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function jhon_smith_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'jhon_smith_excerpt_length');