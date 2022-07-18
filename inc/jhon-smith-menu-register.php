<?php
/**
 * The template for menu register.
 *
 * The template loading under functions.php.
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.0
 */

// after theme setup
if (!function_exists('rbp_two_menu_setup')) {
    function rbp_two_menu_setup(){

// Menu Register
register_nav_menu(
    'header-menu', __('Menu Name 1','rbp-two')
);

}
add_action('after_setup_theme', 'rbp_two_menu_setup');
}