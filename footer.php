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
	<footer class="rb-portfolio-two-footer-area">
		<div class="container">
			<div class="row">
			
				<!--=================================
				===== Copyright Text Strat Here =====
				==================================-->
				<div class="col-lg-6">
					<?php
						$fromYear = (int)esc_html('2022','rb-portfolio-two');
						$thisYear = (int)esc_html(date('Y'),'rb-portfolio-two');
						$copyrightYear = $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');

						printf(
							'<p class="rb-portfolio-two-copyright-text">%1$s <a href="%2$s" target="_blank">%3$s</a> %4$s <a href="%5$s" target="_blank"> %6$s </a> %7$s %8$s</p>',
							
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
				
				<!--====================================
				===== Social Icons Area Strat Here =====
				=====================================-->
				<div class="col-lg-6">					
					<div class="rb-portfolio-two-footer-social-icons float-end">
						<ul>
                            
                            <!-- Facebook URL -->
                            <?php
                            if(get_option('rb_link')): ?>
                            <li>
								<a href="<?php echo esc_url(get_option('rb_link')); ?>" target="_blank" aria-label="<?php echo esc_attr('Facebook', 'rb-portfolio-two'); ?>"><i class="fa-brands fa-facebook-f"></i></a>
							</li>
                            <?php endif; ?>

                            <!-- Twitter URL -->
                            <?php
                            if(get_option('rb_link')): ?>
                            <li>
								<a href="<?php echo esc_url(get_option('rb_link')); ?>" target="_blank" aria-label="<?php echo esc_attr('Twitter', 'rb-portfolio-two'); ?>"><i class="fa-brands fa-twitter"></i></a>
							</li>
                            <?php endif; ?>

							<!-- Instagram URL -->
                            <?php
                            if(get_option('rb_link')): ?>
                            <li>
								<a href="<?php echo esc_url(get_option('rb_link')); ?>" target="_blank" aria-label="<?php echo esc_attr('Facebook', 'rb-portfolio-two'); ?>"><i class="fa-brands fa-instagram"></i></a>
							</li>
                            <?php endif; ?>
							
							<!-- Linkedin URL -->
                            <?php
                            if(get_option('rb_link')): ?>
                            <li>
								<a href="<?php echo esc_url(get_option('rb_link')); ?>" target="_blank" aria-label="<?php echo esc_attr('Linkedin', 'rb-portfolio-two'); ?>"><i class="fa-brands fa-linkedin-in"></i></a>
							</li>
                            <?php endif; ?>

							<!-- Pinterest URL -->
                            <?php
                            if(get_option('rb_link')): ?>
                            <li>
								<a href="<?php echo esc_url(get_option('rb_link')); ?>" target="_blank" aria-label="<?php echo esc_attr('Pinterest', 'rb-portfolio-two'); ?>"><i class="fa-brands fa-pinterest-p"></i></a>
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
	<button class="rb-portfolio-two-scroll-to-top">
        <i class="fa-solid fa-angles-up"></i>
	</button>
	<!--=================================== 
	===== Scroll to Top Area End Here =====
	====================================-->
	
	</div><!-- #rb-portfolio-two-page -->
    <?php wp_footer(); ?>
    </body>
</html>