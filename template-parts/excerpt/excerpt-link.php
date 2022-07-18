<?php
/**
 * Show the appropriate content for the Link post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.0
 */

if (
	has_block('core/file', get_the_content())
) {
	$link_posts = parse_blocks( get_the_content() );
	foreach ($link_posts as $link_post) {
    	if ($link_post['blockName'] == 'core/file') {
    		echo render_block($link_post);
    	}
    }
	rbp_two_read_more_text();
}