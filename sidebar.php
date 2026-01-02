<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.7
 * @since RB Portfolio Two 1.0.3
 */

if (!is_active_sidebar('rb-portfolio-two-sidebar-right')) {
	return;
}
dynamic_sidebar('rb-portfolio-two-sidebar-right');