<?php
/**
 * Show the appropriate content for the Status post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.0
 */

if (
	has_block('core/paragraph', get_the_content())
) {
	$status_posts = parse_blocks( get_the_content() );
	foreach ($status_posts as $status_post) {
    	if ($status_post['blockName'] == 'core/paragraph') {
    		echo render_block($status_post);
    	}
    }
	rbp_two_read_more_text();
}