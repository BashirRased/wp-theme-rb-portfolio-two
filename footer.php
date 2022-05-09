<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage RB Free Theme
 * @since Jhon Smith 1.0.0
 */

?>

    <!--============================== 
	===== Footer Area Strat Here =====
	===============================-->
	<footer class="jhon-smith-footer-area">
		<div class="container">
			<div class="row">
			
				<!--=================================
				===== Copyright Text Strat Here =====
				==================================-->
				<div class="col-lg-6">
					<?php
						$fromYear = (int)esc_html('2010','jhon-smith');
						$thisYear = (int)esc_html(date('Y'),'jhon-smith');
						$copyrightYear = $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');

						printf(
							'<p class="jhon-smith-copyright-text">%1$s <a href="%2$s" target="_blank">%3$s</a> %4$s <a href="%5$s" target="_blank"> %6$s </a> %7$s %8$s</p>',
							
                            /* translators:
							%1$s: Copyright Symbol.
							*/
							esc_html('Copyright &copy; By ','jhon-smith'),

                            /* translators:
							%2$s: Home URL.
							*/
							esc_url(home_url('/')),

                            /* translators:
							%3$s: Site Name.
							*/
							esc_html(get_bloginfo('name'),'jhon-smith'),

                            /* translators:
							%4$s: Powered By.
							*/
							esc_html('Powered By ','jhon-smith'),

                            /* translators:
                            %5$s: Powered By URL.
							*/
                            esc_url('http://bashir-rased.com/'),

                            /* translators:
							%6$s: Powered By Name.
							*/
							esc_html('Bashir Rased','jhon-smith'),

                            /* translators:
                            %7$s: Copyright Year.
							*/
							esc_html($copyrightYear,'jhon-smith'),

                            /* translators:
							%8$s: Copyright Condition.
							*/
							esc_html('| All Rights Reserved.','jhon-smith')
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
					<div class="jhon-smith-footer-social-icons float-end">
						<ul>
                            
                            <!-- Facebook URL -->
                            <?php
                            if(get_option('rb_link')): ?>
                            <li>
								<a href="<?php echo esc_url(get_option('rb_link')); ?>" target="_blank" aria-label="<?php echo esc_attr('Facebook', 'jhon-smith'); ?>"><i class="fa-brands fa-facebook-f"></i></a>
							</li>
                            <?php endif; ?>

                            <!-- Twitter URL -->
                            <?php
                            if(get_option('rb_link')): ?>
                            <li>
								<a href="<?php echo esc_url(get_option('rb_link')); ?>" target="_blank" aria-label="<?php echo esc_attr('Twitter', 'jhon-smith'); ?>"><i class="fa-brands fa-twitter"></i></a>
							</li>
                            <?php endif; ?>

							<!-- Instagram URL -->
                            <?php
                            if(get_option('rb_link')): ?>
                            <li>
								<a href="<?php echo esc_url(get_option('rb_link')); ?>" target="_blank" aria-label="<?php echo esc_attr('Facebook', 'jhon-smith'); ?>"><i class="fa-brands fa-instagram"></i></a>
							</li>
                            <?php endif; ?>
							
							<!-- Linkedin URL -->
                            <?php
                            if(get_option('rb_link')): ?>
                            <li>
								<a href="<?php echo esc_url(get_option('rb_link')); ?>" target="_blank" aria-label="<?php echo esc_attr('Linkedin', 'jhon-smith'); ?>"><i class="fa-brands fa-linkedin-in"></i></a>
							</li>
                            <?php endif; ?>

							<!-- Pinterest URL -->
                            <?php
                            if(get_option('rb_link')): ?>
                            <li>
								<a href="<?php echo esc_url(get_option('rb_link')); ?>" target="_blank" aria-label="<?php echo esc_attr('Pinterest', 'jhon-smith'); ?>"><i class="fa-brands fa-pinterest-p"></i></a>
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
	<div class="jhon-smith-scroll-to-top">
        <i class="fa-solid fa-angles-up"></i>
	</div>
	<!--=================================== 
	===== Scroll to Top Area End Here =====
	====================================-->
	
	</div><!-- #jhon-smith-page -->
    <?php wp_footer(); ?>
    </body>
</html>