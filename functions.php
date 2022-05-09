<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage RB Free Theme
 * @since Jhon Smith 1.0.0
 */

// Theme Setup
if(file_exists(dirname(__FILE__).'/inc/jhon-smith-theme-setup.php')) {
	require_once(dirname(__FILE__).'/inc/jhon-smith-theme-setup.php');
}

// Theme Menus
if(file_exists(dirname(__FILE__).'/inc/jhon-smith-menu-register.php')) {
	require_once(dirname(__FILE__).'/inc/jhon-smith-menu-register.php');
}

// Theme Assets
if(file_exists(dirname(__FILE__).'/inc/jhon-smith-assets.php')) {
	require_once(dirname(__FILE__).'/inc/jhon-smith-assets.php');
}

// Theme Widgets
if(file_exists(dirname(__FILE__).'/inc/jhon-smith-widget-register.php')) {
	require_once(dirname(__FILE__).'/inc/jhon-smith-widget-register.php');
}

// Theme Thumbnail
if(file_exists(dirname(__FILE__).'/inc/jhon-smith-thumbnail.php')) {
	require_once(dirname(__FILE__).'/inc/jhon-smith-thumbnail.php');
}

// Theme Post Meta
if(file_exists(dirname(__FILE__).'/inc/jhon-smith-post-meta.php')) {
	require_once(dirname(__FILE__).'/inc/jhon-smith-post-meta.php');
}

// Theme Excerpt
if(file_exists(dirname(__FILE__).'/inc/jhon-smith-excerpt.php')) {
	require_once(dirname(__FILE__).'/inc/jhon-smith-excerpt.php');
}

// Theme Breadcrumbs
if(file_exists(dirname(__FILE__).'/inc/jhon-smith-breadcrumbs.php')) {
	require_once(dirname(__FILE__).'/inc/jhon-smith-breadcrumbs.php');
}

// Theme Post Format Meta
if(file_exists(dirname(__FILE__).'/inc/jhon-smith-post-format.php')) {
	require_once(dirname(__FILE__).'/inc/jhon-smith-post-format.php');
}

// Skip Focus Link
if(file_exists(dirname(__FILE__).'/inc/jhon-smith-skip-focus-links.php')) {
	require_once(dirname(__FILE__).'/inc/jhon-smith-skip-focus-links.php');
}

// TGM Plugin Activation
if(file_exists(dirname(__FILE__).'/lib/class-tgm-plugin-activation.php')) {
	require_once(dirname(__FILE__).'/lib/class-tgm-plugin-activation.php');
}

// TGM Plugin Customization
if(file_exists(dirname(__FILE__).'/inc/tgm-plugin-customization.php')) {
	require_once(dirname(__FILE__).'/inc/tgm-plugin-customization.php');
}

// CMB2 Plugin Customization
if(file_exists(dirname(__FILE__).'/inc/cmb2-metabox-customization.php')) {
	require_once(dirname(__FILE__).'/inc/cmb2-metabox-customization.php');
}