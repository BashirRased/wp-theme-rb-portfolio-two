<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package RB_Themes
 * @subpackage RB_Portfolio_Two
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! is_active_sidebar( 'rb-portfolio-two-sidebar-right' ) ) {
	return;
}
dynamic_sidebar( 'rb-portfolio-two-sidebar-right' );
