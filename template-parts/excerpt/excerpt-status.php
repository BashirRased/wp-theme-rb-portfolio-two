<?php
/**
 * Show the appropriate content for the Status post format.
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
	has_block( 'core/paragraph', get_the_content() )
) {
	$status_posts = parse_blocks( get_the_content() );
	foreach ( $status_posts as $status_post ) {
		if ( $status_post['blockName'] == 'core/paragraph' ) {
			echo render_block( $status_post );
		}
	}
	do_action( 'rb_portfolio_two_read_more' );
}
