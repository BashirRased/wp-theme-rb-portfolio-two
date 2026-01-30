<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
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
	<!--============================== 
	===== Footer Area Strat Here =====
	===============================-->
	<footer class="footer-area">
		<div class="container">
			<div class="row">
			
				<!--=================================
				===== Copyright Text Strat Here =====
				==================================-->
				<div class="col-lg-12">
					<?php
					$from_year = 2022;
					$this_year = (int) gmdate( 'Y' );

					$copyright_year = ( $from_year !== $this_year )
						? $from_year . '-' . $this_year
						: (string) $from_year;

					printf(
						wp_kses_post(
							/* translators: 1: Home URL, 2: Site name, 3: Profile URL, 4: Author name, 5: Copyright years */
							esc_html__(
								'<p class="copyright-text">
									Copyright &copy; <a href="%1$s">%2$s</a> |
									Powered by <a href="%3$s" target="_blank" rel="noopener noreferrer">%4$s</a>
									%5$s | All Rights Reserved.
								</p>',
								'rb-portfolio-two'
							)
						),
						esc_url( home_url( '/' ) ),
						esc_html( get_bloginfo( 'name' ) ),
						esc_url( 'https://bashir-rased.com/ ' ),
						esc_html__( 'Bashir Rased', 'rb-portfolio-two' ),
						esc_html( $copyright_year )
					);
					?>
				</div>
				<!--===============================
				===== Copyright Text End Here =====
				================================-->
				
			</div><!-- row end -->
		</div><!-- container end -->
	</footer>
	<!--============================ 
	===== Footer Area End Here =====
	=============================-->

	<!--===================================== 
	===== Scroll to Top Area Strat Here =====
	======================================-->
	<button class="scroll-to-top">
		<i class="fa-solid fa-angles-up"></i>
	</button>
	<!--=================================== 
	===== Scroll to Top Area End Here =====
	====================================-->
	
	</div><!-- #page -->
	<?php wp_footer(); ?>
	</body>
</html>