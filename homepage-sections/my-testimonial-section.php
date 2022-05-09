<!--=================================== 
===== Testimonial Area Strat Here =====
====================================-->
<section class="jhon-smith-testimonials">		
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="jhon-smith-testimonials-area owl-carousel">                    
                    
                    <?php
                    $jhon_smith_testimonials_items = get_post_meta(get_the_ID(), 'jhon_smith_testimonials_items', true);
                    if($jhon_smith_testimonials_items): 
                        
                    foreach($jhon_smith_testimonials_items as $jhon_smith_testimonials_items_single):
                    ?>
                    <!--===== 01. Single Testimonial Area Strat Here =====-->
                    <div class="jhon-smith-signle-testimonial">
                        <div class="jhon-smith-client">
                            <div class="jhon-smith-client-img">
                                <img src="<?php
                                $jhon_smith_testimonials_item_image = $jhon_smith_testimonials_items_single['jhon_smith_testimonials_item_image'];
                                if($jhon_smith_testimonials_item_image){
                                    echo esc_url($jhon_smith_testimonials_item_image);
                                }
                                else {
                                    echo esc_url(get_template_directory_uri().'/assets/img/client/client-1.jpg');
                                }
                                ?>" alt="<?php echo esc_attr('Client 1', 'jhon-smith'); ?>" />
                            </div>
                            <div class="jhon-smith-client-name jhon-smith-strong-text">
                                <h4><?php
                            $jhon_smith_testimonials_item_title = $jhon_smith_testimonials_items_single['jhon_smith_testimonials_item_title'];
                            if($jhon_smith_testimonials_item_title){
                                printf(
                                    /* translators: %s: Testimonials Item Title */
                                    __('%s','jhon-smith'),
                                    $jhon_smith_testimonials_item_title
                                );
                            }
                            else {
                                esc_html_e('Danny J. Trujillo','jhon-smith');
                            }
                            ?></h4>
                            </div>
                            <div class="jhon-smith-client-designation"><?php
                            $jhon_smith_testimonials_item_sub_title = $jhon_smith_testimonials_items_single['jhon_smith_testimonials_item_sub_title'];
                            if($jhon_smith_testimonials_item_sub_title){
                                printf(
                                    /* translators: %s: Testimonials Item Sub-title */
                                    __('%s','jhon-smith'),
                                    $jhon_smith_testimonials_item_sub_title
                                );
                            }
                            else {
                                esc_html_e('Client','jhon-smith');
                            }
                            ?></div>
                        </div>
                        <div class="jhon-smith-review">
                            <p><?php
                            $jhon_smith_testimonials_item_description = $jhon_smith_testimonials_items_single['jhon_smith_testimonials_item_description'];
                            if($jhon_smith_testimonials_item_description){
                                printf(
                                    /* translators: %s: Testimonials Item Description */
                                    __('%s','jhon-smith'),
                                    $jhon_smith_testimonials_item_description
                                );
                            }
                            else {
                                esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.','jhon-smith');
                            }
                            ?></p>
                        </div>
                    </div>
                    <!--===== 01. Single Testimonial Area End Here =====-->

                    <?php endforeach; else: ?>
                    <!--===== 01. Single Testimonial Area Strat Here =====-->
                    <div class="jhon-smith-signle-testimonial">
                        <div class="jhon-smith-client">
                            <div class="jhon-smith-client-img">
                                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/client/client-1.jpg'); ?>" alt="<?php echo esc_attr('Client 1', 'jhon-smith'); ?>" />
                            </div>
                            <div class="jhon-smith-client-name jhon-smith-strong-text">
                                <h4><?php esc_html_e('Danny J. Trujillo', 'jhon-smith'); ?></h4>
                            </div>
                            <div class="jhon-smith-client-designation"><?php esc_html_e('Client', 'jhon-smith'); ?></div>
                        </div>
                        <div class="jhon-smith-review">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'jhon-smith'); ?></p>
                        </div>
                    </div>
                    <!--===== 01. Single Testimonial Area End Here =====-->
                    
                    <!--===== 02. Single Testimonial Area Strat Here =====-->
                    <div class="jhon-smith-signle-testimonial">
                        <div class="jhon-smith-client">
                            <div class="jhon-smith-client-img">
                                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/client/client-2.jpg'); ?>" alt="<?php echo esc_attr('Client 2', 'jhon-smith'); ?>" />
                            </div>
                            <div class="jhon-smith-client-name jhon-smith-strong-text">
                                <h4><?php esc_html_e('Robert L. Garcia', 'jhon-smith'); ?></h4>
                            </div>
                            <div class="jhon-smith-client-designation"><?php esc_html_e('Client', 'jhon-smith'); ?></div>
                        </div>
                        <div class="jhon-smith-review">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'jhon-smith'); ?></p>
                        </div>
                    </div>
                    <!--===== 02. Single Testimonial Area End Here =====-->
                    
                    <!--===== 03. Single Testimonial Area Strat Here =====-->
                    <div class="jhon-smith-signle-testimonial">
                        <div class="jhon-smith-client">
                            <div class="jhon-smith-client-img">
                                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/client/client-3.jpg'); ?>" alt="<?php echo esc_attr('Client 3', 'jhon-smith'); ?>" />
                            </div>
                            <div class="jhon-smith-client-name jhon-smith-strong-text">
                                <h4><?php esc_html_e('Chris R. Leblanc', 'jhon-smith'); ?></h4>
                            </div>
                            <div class="jhon-smith-client-designation"><?php esc_html_e('Client', 'jhon-smith'); ?></div>
                        </div>
                        <div class="jhon-smith-review">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'jhon-smith'); ?></p>
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