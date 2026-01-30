<?php
/**
 * Show the excerpt.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB_Themes
 * @subpackage RB_Portfolio_Two
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

the_excerpt();

do_action( 'rb_portfolio_two_read_more' );
