<?php
/**
 * Show the appropriate content for the Quote post format.
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
	has_block( 'core/quote', get_the_content() )
) {
	$quote_posts = parse_blocks( get_the_content() );
	foreach ( $quote_posts as $quote_post ) {
		if ( $quote_post['blockName'] == 'core/quote' ) {
			echo render_block( $quote_post );
		}
	}

	do_action( 'rb_portfolio_two_read_more' );

}
