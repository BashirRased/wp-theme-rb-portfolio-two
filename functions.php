<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RB_Themes
 * @subpackage RB_Portfolio_Two
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Theme Setup
if(file_exists(dirname(__FILE__).'/inc/theme-setup.php')) {
	require_once(dirname(__FILE__).'/inc/theme-setup.php');
}

// Theme Menus
if(file_exists(dirname(__FILE__).'/inc/menu-register.php')) {
	require_once(dirname(__FILE__).'/inc/menu-register.php');
}

// Theme Assets
if(file_exists(dirname(__FILE__).'/inc/assets.php')) {
	require_once(dirname(__FILE__).'/inc/assets.php');
}

// Theme Widgets
if(file_exists(dirname(__FILE__).'/inc/widget-register.php')) {
	require_once(dirname(__FILE__).'/inc/widget-register.php');
}

// Theme Thumbnail
if(file_exists(dirname(__FILE__).'/inc/thumbnail.php')) {
	require_once(dirname(__FILE__).'/inc/thumbnail.php');
}

// Theme Post Meta
if(file_exists(dirname(__FILE__).'/inc/post-meta.php')) {
	require_once(dirname(__FILE__).'/inc/post-meta.php');
}

// Theme Excerpt
if(file_exists(dirname(__FILE__).'/inc/excerpt.php')) {
	require_once(dirname(__FILE__).'/inc/excerpt.php');
}

// Theme Breadcrumbs
if(file_exists(dirname(__FILE__).'/inc/breadcrumbs.php')) {
	require_once(dirname(__FILE__).'/inc/breadcrumbs.php');
}

// Theme Post Format Meta
if(file_exists(dirname(__FILE__).'/inc/post-format.php')) {
	require_once(dirname(__FILE__).'/inc/post-format.php');
}

// Skip Focus Link
if(file_exists(dirname(__FILE__).'/inc/skip-focus-links.php')) {
	require_once(dirname(__FILE__).'/inc/skip-focus-links.php');
}