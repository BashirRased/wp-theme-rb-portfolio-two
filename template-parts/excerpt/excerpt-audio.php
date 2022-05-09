<?php
/**
 * Show the appropriate content for the Audio post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage RB Free Theme
 * @since Jhon Smith 1.0.0
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
	jhon_smith_read_more_text();
}