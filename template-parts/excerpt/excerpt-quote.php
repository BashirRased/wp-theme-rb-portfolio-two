<?php
/**
 * Show the appropriate content for the Quote post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.0
 */

if (
	has_block('core/quote', get_the_content())
) {
	$quote_posts = parse_blocks( get_the_content() );
	foreach ($quote_posts as $quote_post) {
    	if ($quote_post['blockName'] == 'core/quote') {
    		echo render_block($quote_post);
    	}
    }
	rb_portfolio_two_read_more_text();
}