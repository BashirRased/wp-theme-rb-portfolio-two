<?php
/**
 * Show the appropriate content for the Vedio post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage RB Free Theme
 * @since Jhon Smith 1.0.0
 */

if (
	has_block('core/video', get_the_content())
) {
	$video_posts = parse_blocks( get_the_content() );
	foreach ($video_posts as $video_post) {
    	if ($video_post['blockName'] == 'core/video') {
    		echo render_block($video_post);
    	}
    }
	jhon_smith_read_more_text();
}