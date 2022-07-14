<?php
/**
 * Show the appropriate content for the Chat post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage Jhon Smith
 * @version Jhon Smith 1.0.1
 * @since Jhon Smith 1.0.0
 */

if (
	has_block('core/paragraph', get_the_content())
) {
	$chat_posts = parse_blocks( get_the_content() );
	foreach ($chat_posts as $chat_post) {
    	if ($chat_post['blockName'] == 'core/paragraph') {
    		echo render_block($chat_post);
    	}
    }
	jhon_smith_read_more_text();
}