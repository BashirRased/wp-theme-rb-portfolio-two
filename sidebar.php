<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package RB Free Theme
 * @subpackage Jhon Smith
 * @version Jhon Smith 1.0.1
 * @since Jhon Smith 1.0.0
 */

if (!is_active_sidebar('jhon-smith-sidebar-right')) {
	return;
}
dynamic_sidebar('jhon-smith-sidebar-right');