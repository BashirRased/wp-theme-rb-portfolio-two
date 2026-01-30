<?php
/**
 * Theme all assets loading.
 *
 * @package RB_Themes
 * @subpackage RB_Blog_One
 */

/**
 * =================================
 * ----- Table of Theme Assets -----
 * =================================
 * +++++ 01. Prefix with file directory
 * +++++ 02. Remove Elementor FontAwesome
 * +++++ 03. Google Fonts
 * +++++ 04. WordPress Assets
 * +++++ 05. Custom Assets
 */

// 01. Prefix with file directory.
define( 'RB_PORTFOLIO_TWO_URL', get_template_directory_uri() );
define( 'RB_PORTFOLIO_TWO_CSS', RB_PORTFOLIO_TWO_URL . '/assets/css/' );
define( 'RB_PORTFOLIO_TWO_JS', RB_PORTFOLIO_TWO_URL . '/assets/js/' );

// 02. Remove Elementor FontAwesome.
if ( ! function_exists( 'rb_blog_one_remove_elementor_font_awesome' ) ) {
	/**
	 * Remove Elementor default Font Awesome.
	 */
	function rb_blog_one_remove_elementor_font_awesome() {

		// Remove Elementor registered FA styles.
		wp_deregister_style( 'elementor-icons-fa-solid' );
		wp_deregister_style( 'elementor-icons-fa-regular' );
		wp_deregister_style( 'elementor-icons-fa-brands' );
		wp_deregister_style( 'elementor-icons-fa' );

		// Sometimes Elementor Pro uses this handle.
		wp_deregister_style( 'font-awesome' );
	}
	add_action( 'elementor/frontend/after_register_styles', 'rb_blog_one_remove_elementor_font_awesome', 5 );
}

// 03. Google Fonts.
if ( ! function_exists( 'rb_blog_one_google_fonts' ) ) {
	/**
	 * Enqueue Google Fonts dynamically from an array.
	 */
	function rb_blog_one_google_fonts() {
		$google_font_version = null;

		$google_font_path_start = 'https://fonts.googleapis.com/css2?';
		$google_font_path_end   = '&display=swap&subset=latin,latin-ext,cyrillic,cyrillic-ext,vietnamese';

		$google_font_family_path           = 'family=';
		$google_font_family_with_italic    = ':ital,wght@';
		$google_font_family_without_italic = ':wght@';

		$google_font_family_1_name        = 'Poppins';
		$google_font_family_1_weight_list = array( '400' );
		$google_font_family_1_weight      = implode( ',', $google_font_family_1_weight_list );
		$google_font_family_1             = $google_font_family_path . $google_font_family_1_name . $google_font_family_without_italic . $google_font_family_1_weight;

		$google_font_family_2_name        = 'Roboto';
		$google_font_family_2_weight_list = array( '400', '700' );
		$google_font_family_2_weight      = implode( ';', $google_font_family_2_weight_list );
		$google_font_family_2             = $google_font_family_path . $google_font_family_2_name . $google_font_family_without_italic . $google_font_family_2_weight;

		$google_font_families = array( $google_font_family_1, $google_font_family_2 );
		$google_font_family   = implode( '&', $google_font_families );

		$google_font_path = $google_font_path_start . $google_font_family . $google_font_path_end;

		// Nunito, Figtree, Caveat with full weights and subsets.
		wp_enqueue_style(
			'rb-blog-one-google-fonts',
			$google_font_path,
			array(),
			$google_font_version // Using time() is okay for development, but remove in production for caching.
		);
	}
	add_action( 'wp_enqueue_scripts', 'rb_blog_one_google_fonts' );
}

function rb_portfolio_two_fontawesome_css() {
	// Font Awesome v6.1.2
	wp_enqueue_style( 'font-awesome', RB_PORTFOLIO_TWO_CSS . 'font-awesome.min.css', '', '6.1.2', 'all' );
}
add_action( 'wp_enqueue_scripts', 'rb_portfolio_two_fontawesome_css' );

function rb_portfolio_two_bootstrap_assets() {
	// Bootstrap-5 CSS v5.2.0
	wp_enqueue_style( 'bootstrap', RB_PORTFOLIO_TWO_CSS . 'bootstrap.min.css', '', '5.2.0', 'all' );

	// Bootstrap-5 popper JS v2.11.5
	wp_enqueue_script( 'popper', RB_PORTFOLIO_TWO_JS . 'popper.min.js', array( 'jquery' ), '2.11.5', true );

	// Bootstrap-5 JS v5.2.0
	wp_enqueue_script( 'bootstrap', RB_PORTFOLIO_TWO_JS . 'bootstrap.min.js', array( 'jquery', 'popper' ), '5.2.0', true );
}
add_action( 'wp_enqueue_scripts', 'rb_portfolio_two_bootstrap_assets' );

function rb_portfolio_two_jquery_plugin_assets() {
	// jQuery Plugin appear JS v0.3.3
	wp_enqueue_script( 'jquery-appear', RB_PORTFOLIO_TWO_JS . 'jquery.appear.min.js', array( 'jquery' ), '0.3.3', true );

	// jQuery Plugin countTo JS v1.2.0
	wp_enqueue_script( 'jquery-countTo', RB_PORTFOLIO_TWO_JS . 'jquery.countTo.min.js', array( 'jquery' ), '1.2.0', true );

	// jQuery Plugin imagesloaded JS v4.1.4
	wp_enqueue_script( 'imagesloaded', RB_PORTFOLIO_TWO_JS . 'imagesloaded.pkgd.min.js', array( 'jquery' ), '4.1.4', true );

	// jQuery Plugin isotope JS v3.0.6
	wp_enqueue_script( 'isotope', RB_PORTFOLIO_TWO_JS . 'isotope.pkgd.min.js', array( 'jquery' ), '3.0.6', true );

	// jQuery Plugin owl.carousel CSS v2.3.4
	wp_enqueue_style( 'owl-carousel', RB_PORTFOLIO_TWO_CSS . 'owl.carousel.min.css', '2.3.4', 'all' );

	// jQuery Plugin owl.theme.default CSS v2.3.4
	wp_enqueue_style( 'owl-carousel-default', RB_PORTFOLIO_TWO_CSS . 'owl.theme.default.min.css', '2.3.4', 'all' );

	// jQuery Plugin owl.carousel JS v2.3.4
	wp_enqueue_script( 'owl-carousel', RB_PORTFOLIO_TWO_JS . 'owl.carousel.min.js', array( 'jquery' ), '2.3.4', true );

	// jQuery Plugin fancybox CSS v4.0.22
	wp_enqueue_style( 'jquery-fancybox', RB_PORTFOLIO_TWO_CSS . 'jquery.fancybox.min.css', '4.0.22', 'all' );

	// jQuery Plugin fancybox JS v4.0.22
	wp_enqueue_script( 'jquery-fancybox', RB_PORTFOLIO_TWO_JS . 'jquery.fancybox.min.js', array( 'jquery' ), '4.0.22', true );
}
add_action( 'wp_enqueue_scripts', 'rb_portfolio_two_jquery_plugin_assets' );

function rb_portfolio_two_theme_custom_assets() {
	// Theme Perloader CSS v1.0.7
	wp_enqueue_style( 'rb-portfolio-two-preloader', RB_PORTFOLIO_TWO_CSS . 'preloader.css', '', '1.0.7', 'all' );

	// Theme light-bg CSS v1.0.7
	wp_enqueue_style( 'rb-portfolio-two-light-bg', RB_PORTFOLIO_TWO_CSS . 'light-bg.css', '', '1.0.7', 'all' );

	// Theme Style CSS v1.0.7
	wp_enqueue_style( 'rb-portfolio-two-style', RB_PORTFOLIO_TWO_CSS . 'style.css', '', '1.0.7', 'all' );

	// Theme Color CSS v1.0.7
	wp_enqueue_style( 'rb-portfolio-two-theme-color', RB_PORTFOLIO_TWO_CSS . 'colors/primary-color.css', '', '1.0.7', 'all' );

	// Theme Responsive CSS v1.0.7
	wp_enqueue_style( 'rb-portfolio-two-responsive', RB_PORTFOLIO_TWO_CSS . 'responsive.css', '', '1.0.7', 'all' );

	// Theme Type JS v1.0.7
	wp_enqueue_script( 'rb-portfolio-two-type', RB_PORTFOLIO_TWO_JS . 'type.js', array( 'jquery' ), '1.0.7', true );

	// Theme Custom JS v1.0.7
	wp_enqueue_script( 'rb-portfolio-two-custom', RB_PORTFOLIO_TWO_JS . 'custom.js', array( 'jquery' ), '1.0.7', true );
}
add_action( 'wp_enqueue_scripts', 'rb_portfolio_two_theme_custom_assets' );

function rb_portfolio_two_wp_assets() {
	// WP Required Stylesheet
	wp_enqueue_style( 'rb-portfolio-two-wp-stylesheet', get_stylesheet_uri(), '', wp_get_theme()->get( 'Version' ), 'all' );

	// Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rb_portfolio_two_wp_assets' );
