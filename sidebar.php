<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage RB Free Theme
 * @since Jhon Smith 1.0.0
 */

if (!is_active_sidebar('jhon-smith-sidebar-right')) {
	return;
}
dynamic_sidebar('jhon-smith-sidebar-right');