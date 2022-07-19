<!--=================================== 
===== Testimonial Area Strat Here =====
====================================-->
<section class="testimonials">		
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonials-area owl-carousel">                    
                    
                    <?php
                    $rb_portfolio_two_testimonials_items = get_post_meta(get_the_ID(), 'rb_portfolio_two_testimonials_items', true);
                    if( isset ($rb_portfolio_two_testimonials_items) && !empty ($rb_portfolio_two_testimonials_items) ): 
                        
                    foreach($rb_portfolio_two_testimonials_items as $rb_portfolio_two_testimonials_items_single):
                    ?>
                    <!--===== 01. Single Testimonial Area Strat Here =====-->
                    <div class="signle-testimonial">
                        <div class="client">
                            <div class="client-img">
                                <img src="<?php
                                $rb_portfolio_two_testimonials_item_image = $rb_portfolio_two_testimonials_items_single['rb_portfolio_two_testimonials_item_image'];
                                if( isset ($rb_portfolio_two_testimonials_item_image) && !empty ($rb_portfolio_two_testimonials_item_image) ){
                                    echo esc_url($rb_portfolio_two_testimonials_item_image);
                                }
                                else {
                                    echo esc_url(get_template_directory_uri().'/assets/img/client/client-1.jpg');
                                }
                                ?>" alt="<?php echo esc_attr('Client 1', 'rb-portfolio-two'); ?>" />
                            </div>
                            <div class="client-name rb-portfolio-two-strong-text">
                                <h4><?php
                            $rb_portfolio_two_testimonials_item_title = $rb_portfolio_two_testimonials_items_single['rb_portfolio_two_testimonials_item_title'];
                            if( isset ($rb_portfolio_two_testimonials_item_title) && !empty ($rb_portfolio_two_testimonials_item_title) ){
                                printf(
                                    /* translators: %s: Testimonials Item Title */
                                    __('%s','rb-portfolio-two'),
                                    $rb_portfolio_two_testimonials_item_title
                                );
                            }
                            else {
                                esc_html_e('Danny J. Trujillo','rb-portfolio-two');
                            }
                            ?></h4>
                            </div>
                            <div class="client-designation"><?php
                            $rb_portfolio_two_testimonials_item_sub_title = $rb_portfolio_two_testimonials_items_single['rb_portfolio_two_testimonials_item_sub_title'];
                            if( isset ($rb_portfolio_two_testimonials_item_sub_title) && !empty ($rb_portfolio_two_testimonials_item_sub_title) ){
                                printf(
                                    /* translators: %s: Testimonials Item Sub-title */
                                    __('%s','rb-portfolio-two'),
                                    $rb_portfolio_two_testimonials_item_sub_title
                                );
                            }
                            else {
                                esc_html_e('Client','rb-portfolio-two');
                            }
                            ?></div>
                        </div>
                        <div class="review">
                            <p><?php
                            $rb_portfolio_two_testimonials_item_description = $rb_portfolio_two_testimonials_items_single['rb_portfolio_two_testimonials_item_description'];
                            if( isset ($rb_portfolio_two_testimonials_item_description) && !empty ($rb_portfolio_two_testimonials_item_description) ){
                                printf(
                                    /* translators: %s: Testimonials Item Description */
                                    __('%s','rb-portfolio-two'),
                                    $rb_portfolio_two_testimonials_item_description
                                );
                            }
                            else {
                                esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.','rb-portfolio-two');
                            }
                            ?></p>
                        </div>
                    </div>
                    <!--===== 01. Single Testimonial Area End Here =====-->

                    <?php endforeach; else: ?>
                    <!--===== 01. Single Testimonial Area Strat Here =====-->
                    <div class="signle-testimonial">
                        <div class="client">
                            <div class="client-img">
                                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/client/client-1.jpg'); ?>" alt="<?php echo esc_attr('Client 1', 'rb-portfolio-two'); ?>" />
                            </div>
                            <div class="client-name rb-portfolio-two-strong-text">
                                <h4><?php esc_html_e('Danny J. Trujillo', 'rb-portfolio-two'); ?></h4>
                            </div>
                            <div class="client-designation"><?php esc_html_e('Client', 'rb-portfolio-two'); ?></div>
                        </div>
                        <div class="review">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'rb-portfolio-two'); ?></p>
                        </div>
                    </div>
                    <!--===== 01. Single Testimonial Area End Here =====-->
                    
                    <!--===== 02. Single Testimonial Area Strat Here =====-->
                    <div class="signle-testimonial">
                        <div class="client">
                            <div class="client-img">
                                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/client/client-2.jpg'); ?>" alt="<?php echo esc_attr('Client 2', 'rb-portfolio-two'); ?>" />
                            </div>
                            <div class="client-name rb-portfolio-two-strong-text">
                                <h4><?php esc_html_e('Robert L. Garcia', 'rb-portfolio-two'); ?></h4>
                            </div>
                            <div class="client-designation"><?php esc_html_e('Client', 'rb-portfolio-two'); ?></div>
                        </div>
                        <div class="review">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'rb-portfolio-two'); ?></p>
                        </div>
                    </div>
                    <!--===== 02. Single Testimonial Area End Here =====-->
                    
                    <!--===== 03. Single Testimonial Area Strat Here =====-->
                    <div class="signle-testimonial">
                        <div class="client">
                            <div class="client-img">
                                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/client/client-3.jpg'); ?>" alt="<?php echo esc_attr('Client 3', 'rb-portfolio-two'); ?>" />
                            </div>
                            <div class="client-name rb-portfolio-two-strong-text">
                                <h4><?php esc_html_e('Chris R. Leblanc', 'rb-portfolio-two'); ?></h4>
                            </div>
                            <div class="client-designation"><?php esc_html_e('Client', 'rb-portfolio-two'); ?></div>
                        </div>
                        <div class="review">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'rb-portfolio-two'); ?></p>
                        </div>
                    </div>
                    <!--===== 03. Single Testimonial Area End Here =====-->

                    <?php endif; ?>
                    
                </div>
            </div>
        </div><!-- row end -->
    </div><!-- container end -->
</section>
<!--================================= 
===== Testimonial Area End Here =====
==================================-->