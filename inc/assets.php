<?php
/**
 * The template for loaded all css & js file.
 *
 * The template loading under functions.php.
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.5
 * @since RB Portfolio Two 1.0.5
 */

// Prefix With File Directory
define('rb_portfolio_two_URL',get_template_directory_uri());
define('rb_portfolio_two_CSS',rb_portfolio_two_URL.'/assets/css/');
define('rb_portfolio_two_JS',rb_portfolio_two_URL.'/assets/js/');

add_editor_style( array(rb_portfolio_two_google_fonts() ) );
/**
 * Register Google fonts.
 */
function rb_portfolio_two_google_fonts() {
	$fonts_url = '';
	$font_families = array();
	$font_families[] = 'Poppins:400';
    $font_families[] = 'Roboto:400';
	$query_args = array(
		'family' => urlencode( implode( '|', $font_families ) ),
		'subset' => urlencode( 'latin,latin-ext' ),
	);
	$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	return esc_url_raw( $fonts_url );
}

function rb_portfolio_two_google_font_css(){
    // Google Font
	wp_enqueue_style('google-font',rb_portfolio_two_google_fonts(),'','1.0.5','all');
}
add_action('wp_enqueue_scripts','rb_portfolio_two_google_font_css');

function rb_portfolio_two_fontawesome_css(){
    // Font Awesome v6.1.1
	wp_enqueue_style('font-awesome',rb_portfolio_two_CSS.'font-awesome.min.css','','6.1.1','all');
}
add_action('wp_enqueue_scripts','rb_portfolio_two_fontawesome_css');

function rb_portfolio_two_bootstrap_assets(){
    // Bootstrap-5 CSS v5.2.0
	wp_enqueue_style('bootstrap',rb_portfolio_two_CSS.'bootstrap.min.css','','5.2.0','all');

    // Bootstrap-5 popper JS v2.11.5
    wp_enqueue_script('popper',rb_portfolio_two_JS.'popper.min.js',array('jquery'),'2.11.5',true);
    
    // Bootstrap-5 JS v5.2.0
    wp_enqueue_script('bootstrap',rb_portfolio_two_JS.'bootstrap.min.js',array('jquery','popper'),'5.2.0',true);
}
add_action('wp_enqueue_scripts','rb_portfolio_two_bootstrap_assets');

function rb_portfolio_two_jquery_plugin_assets(){
    // jQuery Plugin appear JS v0.3.3
    wp_enqueue_script('jquery-appear',rb_portfolio_two_JS.'jquery.appear.min.js',array('jquery'),'0.3.3',true);

    // jQuery Plugin countTo JS v1.2.0
    wp_enqueue_script('jquery-countTo',rb_portfolio_two_JS.'jquery.countTo.min.js',array('jquery'),'1.2.0',true);

    // jQuery Plugin imagesloaded JS v4.1.4
    wp_enqueue_script('imagesloaded',rb_portfolio_two_JS.'imagesloaded.pkgd.min.js',array('jquery'),'4.1.4',true);

    // jQuery Plugin isotope JS v3.0.6
    wp_enqueue_script('isotope',rb_portfolio_two_JS.'isotope.pkgd.min.js',array('jquery'),'3.0.6',true);

    // jQuery Plugin owl.carousel CSS v2.3.4
	wp_enqueue_style('owl-carousel',rb_portfolio_two_CSS.'owl.carousel.min.css','2.3.4','all');

    // jQuery Plugin owl.theme.default CSS v2.3.4
	wp_enqueue_style('owl-carousel-default',rb_portfolio_two_CSS.'owl.theme.default.min.css','2.3.4','all');

    // jQuery Plugin owl.carousel JS v2.3.4
    wp_enqueue_script('owl-carousel',rb_portfolio_two_JS.'owl.carousel.min.js',array('jquery'),'2.3.4',true);

    // jQuery Plugin fancybox CSS v4.0.22
	wp_enqueue_style('jquery-fancybox',rb_portfolio_two_CSS.'jquery.fancybox.min.css','4.0.22','all');

    // jQuery Plugin fancybox JS v4.0.22
    wp_enqueue_script('jquery-fancybox',rb_portfolio_two_JS.'jquery.fancybox.min.js',array('jquery'),'4.0.22',true);
}
add_action('wp_enqueue_scripts','rb_portfolio_two_jquery_plugin_assets');

function rb_portfolio_two_browser_config_assets(){
    // Normalize v8.0.1
	wp_enqueue_style('normalize',rb_portfolio_two_CSS.'normalize.min.css','','8.0.1','all');

    // Modernizr v2.8.3
	wp_enqueue_script('modernizr',rb_portfolio_two_JS.'modernizr.min.js',array('jquery'),'2.8.3',true);
}
add_action('wp_enqueue_scripts','rb_portfolio_two_browser_config_assets');

function rb_portfolio_two_theme_custom_assets(){
    // Theme Perloader CSS v1.0.5
    wp_enqueue_style('rb-portfolio-two-preloader',rb_portfolio_two_CSS.'preloader.css','','1.0.5','all');

    // Theme light-bg CSS v1.0.5
    wp_enqueue_style('rb-portfolio-two-light-bg',rb_portfolio_two_CSS.'light-bg.css','','1.0.5','all');

    // Theme Style CSS v1.0.5
    wp_enqueue_style('rb-portfolio-two-style',rb_portfolio_two_CSS.'style.css','','1.0.5','all');

    // Theme Color CSS v1.0.5
    wp_enqueue_style('rb-portfolio-two-theme-color',rb_portfolio_two_CSS.'colors/primary-color.css','','1.0.5','all');

    // Theme Responsive CSS v1.0.5
    wp_enqueue_style('rb-portfolio-two-responsive',rb_portfolio_two_CSS.'responsive.css','','1.0.5','all');

    // Theme Type JS v1.0.5
    wp_enqueue_script('rb-portfolio-two-type',rb_portfolio_two_JS.'type.js',array('jquery'),'1.0.5',true);

    // Theme Custom JS v1.0.5
    wp_enqueue_script('rb-portfolio-two-custom',rb_portfolio_two_JS.'custom.js',array('jquery'),'1.0.5',true);
}
add_action('wp_enqueue_scripts','rb_portfolio_two_theme_custom_assets');

function rb_portfolio_two_wp_assets(){
    // WP Required Stylesheet
	wp_enqueue_style('rb-portfolio-two-wp-stylesheet', get_stylesheet_uri(),'',wp_get_theme()->get('Version'),'all');

    // Threaded comment reply styles.
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts','rb_portfolio_two_wp_assets');

function rb_portfolio_two_conditional_assets(){
    // html5shim Conditional JS v3.7.3
	wp_enqueue_script('html5shim-printshiv',rb_portfolio_two_JS.'html5shiv-printshiv.min.js', array(),'3.7.3',false);
	wp_script_add_data('html5shim-printshiv','conditional','lt IE 11');
	
    // respond Conditional JS v1.4.2
	wp_enqueue_script('respond',rb_portfolio_two_JS.'respond.min.js',array(),'1.4.2',false);
	wp_script_add_data('respond','conditional','lt IE 11');
}
add_action('wp_enqueue_scripts','rb_portfolio_two_conditional_assets');