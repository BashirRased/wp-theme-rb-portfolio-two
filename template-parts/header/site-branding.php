<?php
/**
 * Displays header site branding
 *
 * @package RB_Themes
 * @subpackage RB_Portfolio_Two
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$site_title   = get_bloginfo( 'name' );
$site_tagline = get_bloginfo( 'description', 'display' );

?>
				  
<!--===== Header Logo Area Strat Here =====-->
<div class="header-site-branding-area">
	
	<?php if ( has_custom_logo() ) : ?>
		<div class="header-logo">
			<?php the_custom_logo(); ?>
		</div>
	<?php endif; ?>
	
	<?php if ( $site_title ) : ?>
	<div class="header-site-title-and-tagline">

		<h1 class="header-site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php esc_html( $site_title ); ?>
			</a>
		</h1>

		<?php if ( $site_tagline && true === get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
			<p class="header-site-tagline">
				<?php esc_html( $site_tagline ); ?>
			</p>
		<?php endif; ?>

	</div>
	<?php endif; ?>

</div>
<!--===== Header Logo Area End Here =====-->