<?php
/**
 * Show the appropriate content for the Vedio post format.
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
	has_block( 'core/video', get_the_content() )
) {
	$video_posts = parse_blocks( get_the_content() );
	foreach ( $video_posts as $video_post ) {
		if ( $video_post['blockName'] == 'core/video' ) {
			echo render_block( $video_post );
		}
	}

	do_action( 'rb_portfolio_two_read_more' );

}
