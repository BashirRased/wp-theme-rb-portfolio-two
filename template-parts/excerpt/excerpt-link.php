<?php
/**
 * Show the appropriate content for the Link post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage Jhon Smith
 * @version Jhon Smith 1.0.1
 * @since Jhon Smith 1.0.0
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
	jhon_smith_read_more_text();
}