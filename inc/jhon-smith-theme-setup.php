<?php
/**
 * The template for loaded after theme setup functions.
 *
 * The template loading under functions.php.
 *
 * @package RB Free Theme
 * @subpackage Jhon Smith
 * @version Jhon Smith 1.0.1
 * @since Jhon Smith 1.0.0
 */

if (!function_exists('jhon_smith_theme_setup')) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Jhon Smith 1.0
	 *
	 * @return void
	 */
	function jhon_smith_theme_setup() {
		// Set content-width.
        $GLOBALS['content_width'] = apply_filters('jhon_smith_content_width', 706);
		
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Twenty-One, use a find and replace
		 * to change 'jhon-smith' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('jhon-smith', get_template_directory().'/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support('title-tag');

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		$args = array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
			'navigation-widgets',
		);
		add_theme_support('html5', $args);

		/*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		// $logo_width  = 300;
		$logo_height = 100;

		$args = array(
			'height'              => absint($logo_height),
			// 'width'               => absint($logo_width),
			// 'flex-width'          => false,
			'flex-height'         => true,
			'unlink-homepage-logo'=> true,
		);

		add_theme_support('custom-logo', $args);		
		add_image_size('custom-logo', 220, 180, true);

		// Add support for Block Styles.
		add_theme_support('wp-block-styles');

		// Add support for full and wide align images.
		add_theme_support('align-wide');

		// Note, the is_IE global variable is defined by WordPress and is used
		// to detect if the current browser is internet explorer.
		global $is_IE;
		if ($is_IE) {
			$editor_stylesheet_path = './assets/css/ie-editor.css';
		} else {
			$editor_stylesheet_path = './assets/css/style-editor.css';
		}

		// Enqueue editor styles.
		add_editor_style($editor_stylesheet_path);

		// Custom background color.
		$args = array(
			'default-color' => 'd1e4dd',
		);
		add_theme_support('custom-background', $args);

		// Custom header.
        $args = array(
            // 'width'              => 1000,
            'height'             => 350,
            // 'flex-width'         => true,
            'flex-height'        => true,
        );
        add_theme_support('custom-header', $args);		

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');
	}
}
add_action('after_setup_theme', 'jhon_smith_theme_setup');