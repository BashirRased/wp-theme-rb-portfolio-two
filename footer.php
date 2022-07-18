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
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.1
 */

?>

    <!--============================== 
	===== Footer Area Strat Here =====
	===============================-->
	<footer class="rbp-two-footer-area">
		<div class="container">
			<div class="row">
			
				<!--=================================
				===== Copyright Text Strat Here =====
				==================================-->
				<div class="col-lg-6">
					<?php
						$fromYear = (int)esc_html('2022','rbp-two');
						$thisYear = (int)esc_html(date('Y'),'rbp-two');
						$copyrightYear = $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');

						printf(
							'<p class="rbp-two-copyright-text">%1$s <a href="%2$s" target="_blank">%3$s</a> %4$s <a href="%5$s" target="_blank"> %6$s </a> %7$s %8$s</p>',
							
                            /* translators:
							%1$s: Copyright Symbol.
							*/
							esc_html('Copyright &copy; By ','rbp-two'),

                            /* translators:
							%2$s: Home URL.
							*/
							esc_url(home_url('/')),

                            /* translators:
							%3$s: Site Name.
							*/
							esc_html(get_bloginfo('name'),'rbp-two'),

                            /* translators:
							%4$s: Powered By.
							*/
							esc_html('Powered By ','rbp-two'),

                            /* translators:
                            %5$s: Powered By URL.
							*/
                            esc_url('https://profiles.wordpress.org/bashirrased2017/'),

                            /* translators:
							%6$s: Powered By Name.
							*/
							esc_html('Bashir Rased','rbp-two'),

                            /* translators:
                            %7$s: Copyright Year.
							*/
							esc_html($copyrightYear,'rbp-two'),

                            /* translators:
							%8$s: Copyright Condition.
							*/
							esc_html('| All Rights Reserved.','rbp-two')
						);
					?>
					
				</div>
				<!--===============================
				===== Copyright Text End Here =====
				================================-->
				
				<!--====================================
				===== Social Icons Area Strat Here =====
				=====================================-->
				<div class="col-lg-6">					
					<div class="rbp-two-footer-social-icons float-end">
						<ul>
                            
                            <!-- Facebook URL -->
                            <?php
                            if(get_option('rb_link')): ?>
                            <li>
								<a href="<?php echo esc_url(get_option('rb_link')); ?>" target="_blank" aria-label="<?php echo esc_attr('Facebook', 'rbp-two'); ?>"><i class="fa-brands fa-facebook-f"></i></a>
							</li>
                            <?php endif; ?>

                            <!-- Twitter URL -->
                            <?php
                            if(get_option('rb_link')): ?>
                            <li>
								<a href="<?php echo esc_url(get_option('rb_link')); ?>" target="_blank" aria-label="<?php echo esc_attr('Twitter', 'rbp-two'); ?>"><i class="fa-brands fa-twitter"></i></a>
							</li>
                            <?php endif; ?>

							<!-- Instagram URL -->
                            <?php
                            if(get_option('rb_link')): ?>
                            <li>
								<a href="<?php echo esc_url(get_option('rb_link')); ?>" target="_blank" aria-label="<?php echo esc_attr('Facebook', 'rbp-two'); ?>"><i class="fa-brands fa-instagram"></i></a>
							</li>
                            <?php endif; ?>
							
							<!-- Linkedin URL -->
                            <?php
                            if(get_option('rb_link')): ?>
                            <li>
								<a href="<?php echo esc_url(get_option('rb_link')); ?>" target="_blank" aria-label="<?php echo esc_attr('Linkedin', 'rbp-two'); ?>"><i class="fa-brands fa-linkedin-in"></i></a>
							</li>
                            <?php endif; ?>

							<!-- Pinterest URL -->
                            <?php
                            if(get_option('rb_link')): ?>
                            <li>
								<a href="<?php echo esc_url(get_option('rb_link')); ?>" target="_blank" aria-label="<?php echo esc_attr('Pinterest', 'rbp-two'); ?>"><i class="fa-brands fa-pinterest-p"></i></a>
							</li>
                            <?php endif; ?>

							
						</ul>
					</div>
				</div>
				<!--==================================
				===== Social Icons Area End Here =====
				===================================-->
				
			</div><!-- row end -->
		</div><!-- container end -->
	</footer>
	<!--============================ 
	===== Footer Area End Here =====
	=============================-->

	<!--===================================== 
	===== Scroll to Top Area Strat Here =====
	======================================-->
	<button class="rbp-two-scroll-to-top">
        <i class="fa-solid fa-angles-up"></i>
	</button>
	<!--=================================== 
	===== Scroll to Top Area End Here =====
	====================================-->
	
	</div><!-- #rbp-two-page -->
    <?php wp_footer(); ?>
    </body>
</html>