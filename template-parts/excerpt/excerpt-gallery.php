<?php
/**
 * Show the appropriate content for the Gallery post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage Jhon Smith
 * @version Jhon Smith 1.0.1
 * @since Jhon Smith 1.0.0
 */

if (
	has_block('core/gallery', get_the_content())
) {
	$gallery_posts = parse_blocks( get_the_content() );
	foreach ($gallery_posts as $gallery_post) {
    	if ($gallery_post['blockName'] == 'core/gallery') {
    		echo render_block($gallery_post);
    	}
    }
	jhon_smith_read_more_text();
}