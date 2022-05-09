<?php
/**
 * Show the appropriate content for the Image post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage RB Free Theme
 * @since Jhon Smith 1.0.0
 */

if (
	has_block('core/image', get_the_content())
) {
	$image_posts = parse_blocks( get_the_content() );
	foreach ($image_posts as $image_post) {
    	if ($image_post['blockName'] == 'core/image') {
    		echo render_block($image_post);
    	}
    }
	jhon_smith_read_more_text();
}