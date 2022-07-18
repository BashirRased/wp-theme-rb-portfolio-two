<!--=================================== 
===== Testimonial Area Strat Here =====
====================================-->
<section class="rbp-two-testimonials">		
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rbp-two-testimonials-area owl-carousel">                    
                    
                    <?php
                    $rbp_two_testimonials_items = get_post_meta(get_the_ID(), 'rbp_two_testimonials_items', true);
                    if( isset ($rbp_two_testimonials_items) && !empty ($rbp_two_testimonials_items) ): 
                        
                    foreach($rbp_two_testimonials_items as $rbp_two_testimonials_items_single):
                    ?>
                    <!--===== 01. Single Testimonial Area Strat Here =====-->
                    <div class="rbp-two-signle-testimonial">
                        <div class="rbp-two-client">
                            <div class="rbp-two-client-img">
                                <img src="<?php
                                $rbp_two_testimonials_item_image = $rbp_two_testimonials_items_single['rbp_two_testimonials_item_image'];
                                if( isset ($rbp_two_testimonials_item_image) && !empty ($rbp_two_testimonials_item_image) ){
                                    echo esc_url($rbp_two_testimonials_item_image);
                                }
                                else {
                                    echo esc_url(get_template_directory_uri().'/assets/img/client/client-1.jpg');
                                }
                                ?>" alt="<?php echo esc_attr('Client 1', 'rbp-two'); ?>" />
                            </div>
                            <div class="rbp-two-client-name rbp-two-strong-text">
                                <h4><?php
                            $rbp_two_testimonials_item_title = $rbp_two_testimonials_items_single['rbp_two_testimonials_item_title'];
                            if( isset ($rbp_two_testimonials_item_title) && !empty ($rbp_two_testimonials_item_title) ){
                                printf(
                                    /* translators: %s: Testimonials Item Title */
                                    __('%s','rbp-two'),
                                    $rbp_two_testimonials_item_title
                                );
                            }
                            else {
                                esc_html_e('Danny J. Trujillo','rbp-two');
                            }
                            ?></h4>
                            </div>
                            <div class="rbp-two-client-designation"><?php
                            $rbp_two_testimonials_item_sub_title = $rbp_two_testimonials_items_single['rbp_two_testimonials_item_sub_title'];
                            if( isset ($rbp_two_testimonials_item_sub_title) && !empty ($rbp_two_testimonials_item_sub_title) ){
                                printf(
                                    /* translators: %s: Testimonials Item Sub-title */
                                    __('%s','rbp-two'),
                                    $rbp_two_testimonials_item_sub_title
                                );
                            }
                            else {
                                esc_html_e('Client','rbp-two');
                            }
                            ?></div>
                        </div>
                        <div class="rbp-two-review">
                            <p><?php
                            $rbp_two_testimonials_item_description = $rbp_two_testimonials_items_single['rbp_two_testimonials_item_description'];
                            if( isset ($rbp_two_testimonials_item_description) && !empty ($rbp_two_testimonials_item_description) ){
                                printf(
                                    /* translators: %s: Testimonials Item Description */
                                    __('%s','rbp-two'),
                                    $rbp_two_testimonials_item_description
                                );
                            }
                            else {
                                esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.','rbp-two');
                            }
                            ?></p>
                        </div>
                    </div>
                    <!--===== 01. Single Testimonial Area End Here =====-->

                    <?php endforeach; else: ?>
                    <!--===== 01. Single Testimonial Area Strat Here =====-->
                    <div class="rbp-two-signle-testimonial">
                        <div class="rbp-two-client">
                            <div class="rbp-two-client-img">
                                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/client/client-1.jpg'); ?>" alt="<?php echo esc_attr('Client 1', 'rbp-two'); ?>" />
                            </div>
                            <div class="rbp-two-client-name rbp-two-strong-text">
                                <h4><?php esc_html_e('Danny J. Trujillo', 'rbp-two'); ?></h4>
                            </div>
                            <div class="rbp-two-client-designation"><?php esc_html_e('Client', 'rbp-two'); ?></div>
                        </div>
                        <div class="rbp-two-review">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'rbp-two'); ?></p>
                        </div>
                    </div>
                    <!--===== 01. Single Testimonial Area End Here =====-->
                    
                    <!--===== 02. Single Testimonial Area Strat Here =====-->
                    <div class="rbp-two-signle-testimonial">
                        <div class="rbp-two-client">
                            <div class="rbp-two-client-img">
                                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/client/client-2.jpg'); ?>" alt="<?php echo esc_attr('Client 2', 'rbp-two'); ?>" />
                            </div>
                            <div class="rbp-two-client-name rbp-two-strong-text">
                                <h4><?php esc_html_e('Robert L. Garcia', 'rbp-two'); ?></h4>
                            </div>
                            <div class="rbp-two-client-designation"><?php esc_html_e('Client', 'rbp-two'); ?></div>
                        </div>
                        <div class="rbp-two-review">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'rbp-two'); ?></p>
                        </div>
                    </div>
                    <!--===== 02. Single Testimonial Area End Here =====-->
                    
                    <!--===== 03. Single Testimonial Area Strat Here =====-->
                    <div class="rbp-two-signle-testimonial">
                        <div class="rbp-two-client">
                            <div class="rbp-two-client-img">
                                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/client/client-3.jpg'); ?>" alt="<?php echo esc_attr('Client 3', 'rbp-two'); ?>" />
                            </div>
                            <div class="rbp-two-client-name rbp-two-strong-text">
                                <h4><?php esc_html_e('Chris R. Leblanc', 'rbp-two'); ?></h4>
                            </div>
                            <div class="rbp-two-client-designation"><?php esc_html_e('Client', 'rbp-two'); ?></div>
                        </div>
                        <div class="rbp-two-review">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'rbp-two'); ?></p>
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