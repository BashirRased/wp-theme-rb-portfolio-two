<?php
/**
 * The template for menu register.
 *
 * The template loading under functions.php.
 *
 * @package WordPress
 * @subpackage RB Free Theme
 * @since Jhon Smith 1.0.0
 */

// after theme setup
if (!function_exists('jhon_smith_menu_setup')) {
    function jhon_smith_menu_setup(){

// Menu Register
register_nav_menu(
    'header-menu', __('Menu Name 1','jhon-smith')
);

}
add_action('after_setup_theme', 'jhon_smith_menu_setup');
}