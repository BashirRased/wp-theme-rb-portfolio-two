<?php
/**
 * Show the appropriate content for the Link post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB_Themes
 * @subpackage RB_Portfolio_Two
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if (
	has_block( 'core/file', get_the_content() )
) {
	$link_posts = parse_blocks( get_the_content() );
	foreach ( $link_posts as $link_post ) {
		if ( $link_post['blockName'] == 'core/file' ) {
			echo render_block( $link_post );
		}
	}
	do_action( 'rb_portfolio_two_read_more' );
}
