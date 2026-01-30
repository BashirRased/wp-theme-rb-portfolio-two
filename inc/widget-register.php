<?php
/**
 * The template for sidebar widgets.
 *
 * The template loading under functions.php.
 *
 * @package RB_Themes
 * @subpackage RB_Portfolio_Two
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme Widget
 */
function rb_portfolio_two_widget_area() {
	register_sidebar(
		array(
			'name'           => esc_html__( 'Add Widget Area Name', 'rb-portfolio-two' ),
			'description'    => esc_html__( 'Add Widget Area Description', 'rb-portfolio-two' ),
			'id'             => 'rb-portfolio-two-sidebar-right',
			'before_sidebar' => '<aside id="secondary" class="widget-area col-lg-4">',
			'after_sidebar'  => '</aside>',
			'before_widget'  => '<div id="widget-%1$s" class="widget-item">',
			'after_widget'   => '</div>',
			'before_title'   => '<h2 class="widget-item-title">',
			'after_title'    => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'rb_portfolio_two_widget_area' );
