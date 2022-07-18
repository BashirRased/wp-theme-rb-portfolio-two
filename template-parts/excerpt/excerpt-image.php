<?php
/**
 * Show the appropriate content for the Image post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.0
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
	rb_portfolio_two_read_more_text();
}