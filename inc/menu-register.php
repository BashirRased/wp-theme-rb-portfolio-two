<?php
/**
 * The template for menu register.
 *
 * The template loading under functions.php.
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.4
 * @since RB Portfolio Two 1.0.3
 */

// after theme setup
if (!function_exists('rb_portfolio_two_menu_setup')) {
    function rb_portfolio_two_menu_setup(){

// Menu Register
register_nav_menu(
    'header-menu', __('Menu Name 1','rb-portfolio-two')
);

}
add_action('after_setup_theme', 'rb_portfolio_two_menu_setup');
}