<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RB_Themes
 * @subpackage RB_Portfolio_Two
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
wp_body_open();
?>

<!--================================= 
===== Preloader Area Strat Here =====
==================================-->
<div class="pre-loader">
	<div class="sk-cube-grid">
		<div class="sk-cube sk-cube1"></div>
		<div class="sk-cube sk-cube2"></div>
		<div class="sk-cube sk-cube3"></div>
		<div class="sk-cube sk-cube4"></div>
		<div class="sk-cube sk-cube5"></div>
		<div class="sk-cube sk-cube6"></div>
		<div class="sk-cube sk-cube7"></div>
		<div class="sk-cube sk-cube8"></div>
		<div class="sk-cube sk-cube9"></div>
	</div>
</div>
<!--=============================== 
===== Preloader Area End Here =====
================================-->

<div id="page" class="page-content">
	<a class="skip-link screen-reader-text" href="#page-content">
		<?php esc_html_e( 'Skip to content', 'rb-portfolio-two' ); ?>
	</a>
	
<!--======================================================
===== Header Menu with Site Branding Area Strat Here =====
=======================================================-->
<div class="header-menu-area">
	<div class="container">
		<div class="row">
			
			<!--===== Header Menu with Site Branding Left Area Strat Here =====-->
			<div class="col-lg-6 col-md-12">

				<?php
				get_template_part( 'template-parts/header/site-branding' );
				?>
				
				<!--===== Mobile Menu Strat Here =====-->
				<div class="header-mobile-menu-area">
					<button class="header-mobile-menu-btn">
						<i class="fas fa-bars"></i>
					</button>
				</div>
				<!--===== Mobile Menu End Here =====-->						
			</div>
			<!--===== Header Menu with Site Branding Left Area End Here =====-->
		
			<?php
			get_template_part( 'template-parts/header/menu' );
			?>
	
		</div><!-- row end -->
	</div><!-- container end -->
</div><!-- .header-menu-area -->
<!--==================================================== 
===== Header Menu with Site Branding Area End Here =====
======================================================-->

<?php
if ( ! is_page_template( 'home-page-template.php' ) ) {
	get_template_part( 'template-parts/header/breadcrumbs' );
}
?>