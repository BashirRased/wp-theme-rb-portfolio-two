<?php
/**
 * The template for loaded all css & js file.
 *
 * The template loading under functions.php.
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.2
 */

// Prefix With File Directory
define('rbp_two_URL',get_template_directory_uri());
define('rbp_two_CSS',rbp_two_URL.'/assets/css/');
define('rbp_two_JS',rbp_two_URL.'/assets/js/');

function rbp_two_google_font_css(){
    // Google Font
	wp_enqueue_style('google-font','https://fonts.googleapis.com/css?family=Poppins|Roboto:700&display=swap','','1.0.2','all');
}
add_action('wp_enqueue_scripts','rbp_two_google_font_css');

function rbp_two_fontawesome_css(){
    // Font Awesome v6.1.1
	wp_enqueue_style('font-awesome',rbp_two_CSS.'font-awesome-6.1.1.min.css','','6.1.1','all');
}
add_action('wp_enqueue_scripts','rbp_two_fontawesome_css');

function rbp_two_bootstrap_assets(){
    // Bootstrap-5 CSS v5.2.0
	wp_enqueue_style('bootstrap',rbp_two_CSS.'bootstrap-5.2.0.min.css','','5.2.0','all');

    // Bootstrap-5 popper JS v2.11.5
    wp_enqueue_script('popper',rbp_two_JS.'popper-2.11.5.min.js',array('jquery'),'2.11.5',true);
    
    // Bootstrap-5 JS v5.2.0
    wp_enqueue_script('bootstrap',rbp_two_JS.'bootstrap-5.2.0.min.js',array('jquery','popper'),'5.2.0',true);
}
add_action('wp_enqueue_scripts','rbp_two_bootstrap_assets');

function rbp_two_jquery_plugin_assets(){
    // jQuery Plugin appear JS v0.3.3
    wp_enqueue_script('jquery-appear',rbp_two_JS.'jquery.appear-0.3.3.min.js',array('jquery'),'0.3.3',true);

    // jQuery Plugin countTo JS v1.2.0
    wp_enqueue_script('jquery-countTo',rbp_two_JS.'jquery.countTo-1.2.0.min.js',array('jquery'),'1.2.0',true);

    // jQuery Plugin imagesloaded JS v4.1.4
    wp_enqueue_script('imagesloaded',rbp_two_JS.'imagesloaded.pkgd-4.1.4.min.js',array('jquery'),'4.1.4',true);

    // jQuery Plugin isotope JS v3.0.6
    wp_enqueue_script('isotope',rbp_two_JS.'isotope.pkgd-3.0.6.min.js',array('jquery'),'3.0.6',true);

    // jQuery Plugin owl.carousel CSS v2.3.4
	wp_enqueue_style('owl-carousel',rbp_two_CSS.'owl.carousel-2.3.4.min.css','2.3.4','all');

    // jQuery Plugin owl.theme.default CSS v2.3.4
	wp_enqueue_style('owl-carousel-default',rbp_two_CSS.'owl.theme.default-2.3.4.min.css','2.3.4','all');

    // jQuery Plugin owl.carousel JS v2.3.4
    wp_enqueue_script('owl-carousel',rbp_two_JS.'owl.carousel-2.3.4.min.js',array('jquery'),'2.3.4',true);

    // jQuery Plugin fancybox CSS v4.0.22
	wp_enqueue_style('jquery-fancybox',rbp_two_CSS.'jquery.fancybox-4.0.22.min.css','4.0.22','all');

    // jQuery Plugin fancybox JS v4.0.22
    wp_enqueue_script('jquery-fancybox',rbp_two_JS.'jquery.fancybox-4.0.22.min.js',array('jquery'),'4.0.22',true);
}
add_action('wp_enqueue_scripts','rbp_two_jquery_plugin_assets');

function rbp_two_browser_config_assets(){
    // Normalize v8.0.1
	wp_enqueue_style('normalize',rbp_two_CSS.'normalize-8.0.1.min.css','','8.0.1','all');

    // Modernizr v2.8.3
	wp_enqueue_script('modernizr',rbp_two_JS.'modernizr-2.8.3.min.js',array('jquery'),'2.8.3',true);
}
add_action('wp_enqueue_scripts','rbp_two_browser_config_assets');

function rbp_two_theme_custom_assets(){
    // Theme Perloader CSS v1.0.2
    wp_enqueue_style('rbp-two-preloader',rbp_two_CSS.'preloader.css','','1.0.2','all');

    // Theme light-bg CSS v1.0.2
    wp_enqueue_style('rbp-two-light-bg',rbp_two_CSS.'light-bg.css','','1.0.2','all');

    // Theme Style CSS v1.0.2
    wp_enqueue_style('rbp-two-style',rbp_two_CSS.'style.css','','1.0.2','all');

    // Theme Responsive CSS v1.0.2
    wp_enqueue_style('rbp-two-responsive',rbp_two_CSS.'responsive.css','','1.0.2','all');

    // Theme Color CSS v1.0.2
    wp_enqueue_style('rbp-two-theme-color',rbp_two_CSS.'colors/primary-color.css','','1.0.2','all');

    // Theme Type JS v1.0.2
    wp_enqueue_script('rbp-two-type',rbp_two_JS.'type.js',array('jquery'),'1.0.2',true);

    // Theme Custom JS v1.0.2
    wp_enqueue_script('rbp-two-custom',rbp_two_JS.'custom.js',array('jquery'),'1.0.2',true);
}
add_action('wp_enqueue_scripts','rbp_two_theme_custom_assets');

function rbp_two_wp_assets(){
    // WP Required Stylesheet
	wp_enqueue_style('rbp-two-wp-stylesheet', get_stylesheet_uri(),'',wp_get_theme()->get('Version'),'all');

    // Threaded comment reply styles.
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts','rbp_two_wp_assets');

function rbp_two_conditional_assets(){
    // html5shim Conditional JS v3.7.3
	wp_enqueue_script('html5shim-printshiv',rbp_two_JS.'html5shiv-printshiv-3.7.3.min.js', array(),'3.7.3',false);
	wp_script_add_data('html5shim-printshiv','conditional','lt IE 11');
	
    // respond Conditional JS v1.4.2
	wp_enqueue_script('respond',rbp_two_JS.'respond-1.4.2.min.js',array(),'1.4.2',false);
	wp_script_add_data('respond','conditional','lt IE 11');
}
add_action('wp_enqueue_scripts','rbp_two_conditional_assets');