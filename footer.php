<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.7
 * @since RB Portfolio Two 1.0.7
 */

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
						$fromYear = (int)esc_html('2022','rb-portfolio-two');
						$thisYear = (int)esc_html(date('Y'),'rb-portfolio-two');
						$copyrightYear = $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');

						printf(
							'<p class="copyright-text">%1$s <a href="%2$s" target="_blank">%3$s</a> %4$s <a href="%5$s" target="_blank"> %6$s </a> %7$s %8$s</p>',
							
                            /* translators:
							%1$s: Copyright Symbol.
							*/
							esc_html('Copyright &copy; By ','rb-portfolio-two'),

                            /* translators:
							%2$s: Home URL.
							*/
							esc_url(home_url('/')),

                            /* translators:
							%3$s: Site Name.
							*/
							esc_html(get_bloginfo('name'),'rb-portfolio-two'),

                            /* translators:
							%4$s: Powered By.
							*/
							esc_html('Powered By ','rb-portfolio-two'),

                            /* translators:
                            %5$s: Powered By URL.
							*/
                            esc_url('https://profiles.wordpress.org/bashirrased2017/'),

                            /* translators:
							%6$s: Powered By Name.
							*/
							esc_html('Bashir Rased','rb-portfolio-two'),

                            /* translators:
                            %7$s: Copyright Year.
							*/
							esc_html($copyrightYear,'rb-portfolio-two'),

                            /* translators:
							%8$s: Copyright Condition.
							*/
							esc_html('| All Rights Reserved.','rb-portfolio-two')
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