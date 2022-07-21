<?php
/**
 * Show the appropriate content for the Audio post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.4
 * @since RB Portfolio Two 1.0.3
 */

if (
	has_block('core/audio', get_the_content())
) {
	$audio_posts = parse_blocks( get_the_content() );
	foreach ($audio_posts as $audio_post) {
    	if ($audio_post['blockName'] == 'core/audio') {
    		echo render_block($audio_post);
    	}
    }
	
	do_action ( 'rb_portfolio_two_read_more' );
	
}