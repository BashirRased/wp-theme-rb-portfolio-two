<?php
/**
 * The template for sidebar widgets.
 *
 * The template loading under functions.php.
 *
 * @package WordPress
 * @subpackage RB Free Theme
 * @since Jhon Smith 1.0.0
 */

// widget register
function jhon_smith_widget_area(){
	register_sidebar(array(
		'name' 			=> __('Add Widget Area Name', 'jhon-smith'),
		'description' 	=> __('Add Widget Area Description', 'jhon-smith'),
		'id' 			=> 'jhon-smith-sidebar-right',
        'before_sidebar'=> '<aside id="jhon-smith-secondary" class="jhon-smith-widget-area col-lg-4">',
		'after_sidebar' => '</aside>',
		'before_widget' => '<div id="jhon-smith-widget-%1$s" class="jhon-smith-widget-item">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h2 class="jhon-smith-widget-item-title">',
		'after_title' 	=> '</h2>',
        'class'  => ''
	)); 
    
}
add_action('widgets_init', 'jhon_smith_widget_area');