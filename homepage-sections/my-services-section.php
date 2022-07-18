<!--=================================== 
===== My Services Area Strat Here =====
====================================-->
<section class="rbp-two-services rbp-two-scroll-menu" id="rbp-two-services">

    <!--================================ 
    ===== Section Title Strat Here =====
    =================================-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rbp-two-section-title">
                    <h2>
                        <span class="rbp-two-theme-color">
                        <?php
                        $rbp_two_my_services_title_theme_color = get_post_meta(get_the_ID(), 'rbp_two_my_services_title_theme_color', true);
                        if( isset ($rbp_two_my_services_title_theme_color)  && !empty ($rbp_two_my_services_title_theme_color) ){
                            printf(
                                /* translators: %s: My Services Section Title Theme Color */
                                __('%s','rbp-two'),
                                $rbp_two_my_services_title_theme_color
                                );
                        }
                        else {
                            esc_html_e('My','rbp-two');
                        }
                        ?>
                        </span>

                        <?php
                        $rbp_two_my_services_title_black = get_post_meta(get_the_ID(), 'rbp_two_my_services_title_black', true);
                        if( isset ($rbp_two_my_services_title_black) && !empty ($rbp_two_my_services_title_black) ){
                            printf(
                                /* translators: %s: My Services Section Title Theme Color */
                                __('%s','rbp-two'),
                                $rbp_two_my_services_title_black
                                );
                        }
                        else {
                            esc_html_e('Services','rbp-two');
                        }
                        ?>

                        </h2>
                </div>
            </div>
        </div><!-- row end -->
    </div><!-- container end -->
    <!--============================== 
    ===== Section Title End Here =====
    ===============================-->
    
    <!--================================== 
    ===== Section Content Strat Here =====
    ===================================-->
    <div class="container">
        <div class="row">
            
            <?php
            $rbp_two_my_service_items = get_post_meta(get_the_ID(), 'rbp_two_my_service_items', true);
            if( isset ($rbp_two_my_service_items) && !empty ($rbp_two_my_service_items) ): 
                
            foreach($rbp_two_my_service_items as $rbp_two_my_service_items_single):
            ?>
            <!--===== 01. Single Service Strat Here =====-->
            <div class="col-lg-4">
                <div class="rbp-two-section-content">
                    <div class="rbp-two-single-service">
                        <div class="rbp-two-services-icon">
                            <i class="<?php
                                $rbp_two_my_service_item_icon = $rbp_two_my_service_items_single['rbp_two_my_service_item_icon'];
                                if( isset ($rbp_two_my_service_item_icon)  && !empty ($rbp_two_my_service_item_icon) ){
                                    echo esc_attr($rbp_two_my_service_item_icon);
                                }
                                else {
                                    echo esc_attr('fas fa-palette');
                                }
                                ?>"></i>
                        </div>
                        <div class="rbp-two-services-title">
                            <h4>
                            <?php
                            $rbp_two_my_service_item_title = $rbp_two_my_service_items_single['rbp_two_my_service_item_title'];
                            if( isset ($rbp_two_my_service_item_title)  && !empty ($rbp_two_my_service_item_title) ){
                                printf(
                                    /* translators: %s: My Services Item Title */
                                    __('%s','rbp-two'),
                                    $rbp_two_my_service_item_title
                                );
                            }
                            else {
                                esc_html_e('Graphic Design','rbp-two');
                            }
                            ?>
                            </h4>
                        </div>
                        <div class="rbp-two-services-description">
                            <p>
                            <?php
                            $rbp_two_my_service_item_description = $rbp_two_my_service_items_single['rbp_two_my_service_item_description'];
                            if( isset ($rbp_two_my_service_item_description)  && !empty ($rbp_two_my_service_item_description) ){
                                printf(
                                    /* translators: %s: My Services Item Description */
                                    __('%s','rbp-two'),
                                    $rbp_two_my_service_item_description
                                );
                            }
                            else {
                                esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.','rbp-two');
                            }
                            ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--===== 01. Single Service End Here =====-->

            <?php endforeach; else: ?>
            <!--===== 01. Single Service Strat Here =====-->
            <div class="col-lg-4">
                <div class="rbp-two-section-content">
                    <div class="rbp-two-single-service">
                        <div class="rbp-two-services-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <div class="rbp-two-services-title">
                            <h4><?php esc_html_e('Graphic Design', 'rbp-two'); ?></h4>
                        </div>
                        <div class="rbp-two-services-description">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.', 'rbp-two'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--===== 01. Single Service End Here =====-->
            
            <!--===== 02. Single Service Strat Here =====-->
            <div class="col-lg-4">
                <div class="rbp-two-section-content">
                    <div class="rbp-two-single-service">
                        <div class="rbp-two-services-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div class="rbp-two-services-title">
                            <h4><?php esc_html_e('Web Design', 'rbp-two'); ?></h4>
                        </div>
                        <div class="rbp-two-services-description">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.', 'rbp-two'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--===== 02. Single Service End Here =====-->
            
            <!--===== 03. Single Service Strat Here =====-->
            <div class="col-lg-4">
                <div class="rbp-two-section-content">
                    <div class="rbp-two-single-service">
                        <div class="rbp-two-services-icon">
                            <i class="fab fa-wordpress"></i>
                        </div>
                        <div class="rbp-two-services-title">
                            <h4><?php esc_html_e('WordPress', 'rbp-two'); ?></h4>
                        </div>
                        <div class="rbp-two-services-description">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.', 'rbp-two'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--===== 03. Single Service End Here =====-->
            
            <!--===== 04. Single Service Strat Here =====-->
            <div class="col-lg-4">
                <div class="rbp-two-section-content">
                    <div class="rbp-two-single-service">
                        <div class="rbp-two-services-icon">
                            <i class="fab fa-laravel"></i>
                        </div>
                        <div class="rbp-two-services-title">
                            <h4><?php esc_html_e('Laravel', 'rbp-two'); ?></h4>
                        </div>
                        <div class="rbp-two-services-description">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.', 'rbp-two'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--===== 04. Single Service End Here =====-->
            
            <!--===== 05. Single Service Strat Here =====-->
            <div class="col-lg-4">
                <div class="rbp-two-section-content">
                    <div class="rbp-two-single-service">
                        <div class="rbp-two-services-icon">
                            <i class="fab fa-google-play"></i>
                        </div>
                        <div class="rbp-two-services-title">
                            <h4><?php esc_html_e('Apps Development', 'rbp-two'); ?></h4>
                        </div>
                        <div class="rbp-two-services-description">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.', 'rbp-two'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--===== 05. Single Service End Here =====-->
            
            <!--===== 06. Single Service Strat Here =====-->
            <div class="col-lg-4">
                <div class="rbp-two-section-content">
                    <div class="rbp-two-single-service">
                        <div class="rbp-two-services-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <div class="rbp-two-services-title">
                            <h4><?php esc_html_e('24/7 Support', 'rbp-two'); ?></h4>
                        </div>
                        <div class="rbp-two-services-description">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.', 'rbp-two'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--===== 06. Single Service End Here =====-->

            <?php endif; ?>
            
        </div><!-- row end -->
    </div><!-- container end -->
    <!--================================ 
    ===== Section Content End Here =====
    =================================-->
    
</section>	
<!--================================= 
===== My Services Area End Here =====
==================================-->