<?php
/**
 * Show the appropriate content for the Chat post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.7
 * @since RB Portfolio Two 1.0.3
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
	
	do_action ( 'rb_portfolio_two_read_more' );
	
}