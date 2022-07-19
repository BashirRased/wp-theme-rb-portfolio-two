<?php
/**
 * Show the appropriate content for the Aside post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.3
 * @since RB Portfolio Two 1.0.3
 */

$widget_blocks = (
	has_block('core/archives', get_the_content()) ||
	has_block('core/calendar', get_the_content()) ||
	has_block('core/categories', get_the_content()) ||
	has_block('core/html', get_the_content()) ||
	has_block('core/latest-comments', get_the_content()) ||
	has_block('core/latest-posts', get_the_content()) ||
	has_block('core/page-list', get_the_content()) ||
	has_block('core/rss', get_the_content()) ||
	has_block('core/search', get_the_content()) ||
	has_block('core/shortcode', get_the_content()) ||
	has_block('core/social-links', get_the_content()) ||
	has_block('core/tag-cloud', get_the_content())
);

if ($widget_blocks) {
	$aside_posts = parse_blocks( get_the_content() );
	foreach ($aside_posts as $aside_post) {
		$aside_post_blocks = (
			$aside_post['blockName'] == 'core/archives' ||
			$aside_post['blockName'] == 'core/calendar' ||
			$aside_post['blockName'] == 'core/categories' ||
			$aside_post['blockName'] == 'core/html' ||
			$aside_post['blockName'] == 'core/latest-comments' ||
			$aside_post['blockName'] == 'core/latest-posts' ||
			$aside_post['blockName'] == 'core/page-list' ||
			$aside_post['blockName'] == 'core/rss' ||
			$aside_post['blockName'] == 'core/search' ||
			$aside_post['blockName'] == 'core/shortcode' ||
			$aside_post['blockName'] == 'core/social-links' ||
			$aside_post['blockName'] == 'core/tag-cloud'
		);
    	if ($aside_post_blocks) {
    		echo render_block($aside_post);
    	}
    }

	do_action ( 'rb_portfolio_two_read_more' );

}