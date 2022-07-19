<?php
/**
 * The template for tgm all required & recommander plugin list.
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.2
 */
 
function rb_portfolio_two_required_plugins() {

	$plugins = array(

		array(
			'name'      => __('CMB2','rb-portfolio-two'),
			'slug'      => 'cmb2',
			'required'  => true,
		),

		array(
			'name'      => __('Contact Form 7','rb-portfolio-two'),
			'slug'      => 'contact-form-7',
			'required'  => true,
		),

		array(
			'name'      => __('RB Site Social Links','rb-portfolio-two'),
			'slug'      => 'rb-site-social-links',
			'required'  => true,
		)

	);

	$config = array(
		'id'           => 'tgmpa', 
		'default_path' => '', 
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'themes.php', 
		'capability'   => 'edit_theme_options',  
		'has_notices'  => true, 
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => ''
	);

	tgmpa( $plugins, $config );

}
add_action('tgmpa_register','rb_portfolio_two_required_plugins');