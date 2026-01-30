<?php
/**
 * The template for displaying header breadcrumbs.
 *
 * @package RB_Themes
 * @subpackage RB_Portfolio_Two
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!--========================================== 
===== Header Breadcrumbs Area Strat Here =====
===========================================-->
<div class="header-breadcrumbs-area" style="background-image: url(<?php header_image(); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">

				<section class="header-breadcrumbs">

					<?php do_action( 'rb_portfolio_two_breadcrumbs' ); ?>

				</section><!-- .header-breadcrumbs -->

			</div>
		</div><!-- row end -->
	</div><!-- container end -->
</div><!-- .header-breadcrumbs-area -->
<!--======================================== 
===== Header Breadcrumbs Area End Here =====
=========================================-->