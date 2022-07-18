<?php
/**
 * The template for sidebar widgets.
 *
 * The template loading under functions.php.
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.0
 */

// widget register
function rbp_two_widget_area(){
	register_sidebar(array(
		'name' 			=> __('Add Widget Area Name', 'rbp-two'),
		'description' 	=> __('Add Widget Area Description', 'rbp-two'),
		'id' 			=> 'rbp-two-sidebar-right',
        'before_sidebar'=> '<aside id="rbp-two-secondary" class="rbp-two-widget-area col-lg-4">',
		'after_sidebar' => '</aside>',
		'before_widget' => '<div id="rbp-two-widget-%1$s" class="rbp-two-widget-item">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h2 class="rbp-two-widget-item-title">',
		'after_title' 	=> '</h2>',
        'class'  => ''
	)); 
    
}
add_action('widgets_init', 'rbp_two_widget_area');