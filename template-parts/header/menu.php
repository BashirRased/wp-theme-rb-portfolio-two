<?php
/**
 * Displays the header site navigation.
 *
 * @package RB_Themes
 * @subpackage RB_Portfolio_Two
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<!--===== Header Desktop Menu Strat Here =====-->
<div class="col-lg-6 col-md-12">
	<div class="header-desktop-menu float-end">
		<?php
		if ( has_nav_menu( 'header-menu' ) ) {
			wp_nav_menu(
				array(
					'theme_location' => 'header-menu',
					'container'      => 'nav',
				)
			);
		}
		?>
	</div>
</div>
<!--===== Header Desktop Menu End Here =====-->
