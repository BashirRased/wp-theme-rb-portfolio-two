<?php
/**
 * The template for tgm all required & recommander plugin list.
 *
 * @package WordPress
 * @subpackage RB Free Theme
 * @since Jhon Smith 1.0.0
 */
 
function jhon_smith_required_plugins() {

	$plugins = array(

		array(
			'name'      => __('CMB2','jhon-smith'),
			'slug'      => 'cmb2',
			'required'  => true,
		),

		array(
			'name'      => __('Contact Form 7','jhon-smith'),
			'slug'      => 'contact-form-7',
			'required'  => true,
		),

		array(
			'name'      => __('RB Site Social Links','jhon-smith'),
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
add_action('tgmpa_register','jhon_smith_required_plugins');