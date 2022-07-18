<?php
/**
 * Show the appropriate content for the Gallery post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.0
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
	rbp_two_read_more_text();
}