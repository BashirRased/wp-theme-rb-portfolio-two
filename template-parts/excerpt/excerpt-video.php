<?php
/**
 * Show the appropriate content for the Vedio post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.4
 * @since RB Portfolio Two 1.0.3
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
	
	do_action ( 'rb_portfolio_two_read_more' );
	
}