<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.0
 */

// Theme Setup
if(file_exists(dirname(__FILE__).'/inc/rb-portfolio-two-theme-setup.php')) {
	require_once(dirname(__FILE__).'/inc/rb-portfolio-two-theme-setup.php');
}

// Theme Menus
if(file_exists(dirname(__FILE__).'/inc/rb-portfolio-two-menu-register.php')) {
	require_once(dirname(__FILE__).'/inc/rb-portfolio-two-menu-register.php');
}

// Theme Assets
if(file_exists(dirname(__FILE__).'/inc/rb-portfolio-two-assets.php')) {
	require_once(dirname(__FILE__).'/inc/rb-portfolio-two-assets.php');
}

// Theme Widgets
if(file_exists(dirname(__FILE__).'/inc/rb-portfolio-two-widget-register.php')) {
	require_once(dirname(__FILE__).'/inc/rb-portfolio-two-widget-register.php');
}

// Theme Thumbnail
if(file_exists(dirname(__FILE__).'/inc/rb-portfolio-two-thumbnail.php')) {
	require_once(dirname(__FILE__).'/inc/rb-portfolio-two-thumbnail.php');
}

// Theme Post Meta
if(file_exists(dirname(__FILE__).'/inc/rb-portfolio-two-post-meta.php')) {
	require_once(dirname(__FILE__).'/inc/rb-portfolio-two-post-meta.php');
}

// Theme Excerpt
if(file_exists(dirname(__FILE__).'/inc/rb-portfolio-two-excerpt.php')) {
	require_once(dirname(__FILE__).'/inc/rb-portfolio-two-excerpt.php');
}

// Theme Breadcrumbs
if(file_exists(dirname(__FILE__).'/inc/rb-portfolio-two-breadcrumbs.php')) {
	require_once(dirname(__FILE__).'/inc/rb-portfolio-two-breadcrumbs.php');
}

// Theme Post Format Meta
if(file_exists(dirname(__FILE__).'/inc/rb-portfolio-two-post-format.php')) {
	require_once(dirname(__FILE__).'/inc/rb-portfolio-two-post-format.php');
}

// Skip Focus Link
if(file_exists(dirname(__FILE__).'/inc/rb-portfolio-two-skip-focus-links.php')) {
	require_once(dirname(__FILE__).'/inc/rb-portfolio-two-skip-focus-links.php');
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