<?php
/**
 * Show the appropriate content for the Quote post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage Jhon Smith
 * @version Jhon Smith 1.0.1
 * @since Jhon Smith 1.0.0
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
	jhon_smith_read_more_text();
}