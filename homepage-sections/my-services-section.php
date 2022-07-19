<!--=================================== 
===== My Services Area Strat Here =====
====================================-->
<section class="rb-portfolio-two-services rb-portfolio-two-scroll-menu" id="rb-portfolio-two-services">

    <!--================================ 
    ===== Section Title Strat Here =====
    =================================-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rb-portfolio-two-section-title">
                    <h2>
                        <span class="rb-portfolio-two-theme-color">
                        <?php
                        $rb_portfolio_two_my_services_title_theme_color = get_post_meta(get_the_ID(), 'rb_portfolio_two_my_services_title_theme_color', true);
                        if( isset ($rb_portfolio_two_my_services_title_theme_color)  && !empty ($rb_portfolio_two_my_services_title_theme_color) ){
                            printf(
                                /* translators: %s: My Services Section Title Theme Color */
                                __('%s','rb-portfolio-two'),
                                $rb_portfolio_two_my_services_title_theme_color
                                );
                        }
                        else {
                            esc_html_e('My','rb-portfolio-two');
                        }
                        ?>
                        </span>

                        <?php
                        $rb_portfolio_two_my_services_title_black = get_post_meta(get_the_ID(), 'rb_portfolio_two_my_services_title_black', true);
                        if( isset ($rb_portfolio_two_my_services_title_black) && !empty ($rb_portfolio_two_my_services_title_black) ){
                            printf(
                                /* translators: %s: My Services Section Title Theme Color */
                                __('%s','rb-portfolio-two'),
                                $rb_portfolio_two_my_services_title_black
                                );
                        }
                        else {
                            esc_html_e('Services','rb-portfolio-two');
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
            $rb_portfolio_two_my_service_items = get_post_meta(get_the_ID(), 'rb_portfolio_two_my_service_items', true);
            if( isset ($rb_portfolio_two_my_service_items) && !empty ($rb_portfolio_two_my_service_items) ): 
                
            foreach($rb_portfolio_two_my_service_items as $rb_portfolio_two_my_service_items_single):
            ?>
            <!--===== 01. Single Service Strat Here =====-->
            <div class="col-lg-4">
                <div class="rb-portfolio-two-section-content">
                    <div class="rb-portfolio-two-single-service">
                        <div class="rb-portfolio-two-services-icon">
                            <i class="<?php
                                $rb_portfolio_two_my_service_item_icon = $rb_portfolio_two_my_service_items_single['rb_portfolio_two_my_service_item_icon'];
                                if( isset ($rb_portfolio_two_my_service_item_icon)  && !empty ($rb_portfolio_two_my_service_item_icon) ){
                                    echo esc_attr($rb_portfolio_two_my_service_item_icon);
                                }
                                else {
                                    echo esc_attr('fas fa-palette');
                                }
                                ?>"></i>
                        </div>
                        <div class="rb-portfolio-two-services-title">
                            <h4>
                            <?php
                            $rb_portfolio_two_my_service_item_title = $rb_portfolio_two_my_service_items_single['rb_portfolio_two_my_service_item_title'];
                            if( isset ($rb_portfolio_two_my_service_item_title)  && !empty ($rb_portfolio_two_my_service_item_title) ){
                                printf(
                                    /* translators: %s: My Services Item Title */
                                    __('%s','rb-portfolio-two'),
                                    $rb_portfolio_two_my_service_item_title
                                );
                            }
                            else {
                                esc_html_e('Graphic Design','rb-portfolio-two');
                            }
                            ?>
                            </h4>
                        </div>
                        <div class="rb-portfolio-two-services-description">
                            <p>
                            <?php
                            $rb_portfolio_two_my_service_item_description = $rb_portfolio_two_my_service_items_single['rb_portfolio_two_my_service_item_description'];
                            if( isset ($rb_portfolio_two_my_service_item_description)  && !empty ($rb_portfolio_two_my_service_item_description) ){
                                printf(
                                    /* translators: %s: My Services Item Description */
                                    __('%s','rb-portfolio-two'),
                                    $rb_portfolio_two_my_service_item_description
                                );
                            }
                            else {
                                esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.','rb-portfolio-two');
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
                <div class="rb-portfolio-two-section-content">
                    <div class="rb-portfolio-two-single-service">
                        <div class="rb-portfolio-two-services-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <div class="rb-portfolio-two-services-title">
                            <h4><?php esc_html_e('Graphic Design', 'rb-portfolio-two'); ?></h4>
                        </div>
                        <div class="rb-portfolio-two-services-description">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.', 'rb-portfolio-two'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--===== 01. Single Service End Here =====-->
            
            <!--===== 02. Single Service Strat Here =====-->
            <div class="col-lg-4">
                <div class="rb-portfolio-two-section-content">
                    <div class="rb-portfolio-two-single-service">
                        <div class="rb-portfolio-two-services-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div class="rb-portfolio-two-services-title">
                            <h4><?php esc_html_e('Web Design', 'rb-portfolio-two'); ?></h4>
                        </div>
                        <div class="rb-portfolio-two-services-description">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.', 'rb-portfolio-two'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--===== 02. Single Service End Here =====-->
            
            <!--===== 03. Single Service Strat Here =====-->
            <div class="col-lg-4">
                <div class="rb-portfolio-two-section-content">
                    <div class="rb-portfolio-two-single-service">
                        <div class="rb-portfolio-two-services-icon">
                            <i class="fab fa-wordpress"></i>
                        </div>
                        <div class="rb-portfolio-two-services-title">
                            <h4><?php esc_html_e('WordPress', 'rb-portfolio-two'); ?></h4>
                        </div>
                        <div class="rb-portfolio-two-services-description">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.', 'rb-portfolio-two'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--===== 03. Single Service End Here =====-->
            
            <!--===== 04. Single Service Strat Here =====-->
            <div class="col-lg-4">
                <div class="rb-portfolio-two-section-content">
                    <div class="rb-portfolio-two-single-service">
                        <div class="rb-portfolio-two-services-icon">
                            <i class="fab fa-laravel"></i>
                        </div>
                        <div class="rb-portfolio-two-services-title">
                            <h4><?php esc_html_e('Laravel', 'rb-portfolio-two'); ?></h4>
                        </div>
                        <div class="rb-portfolio-two-services-description">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.', 'rb-portfolio-two'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--===== 04. Single Service End Here =====-->
            
            <!--===== 05. Single Service Strat Here =====-->
            <div class="col-lg-4">
                <div class="rb-portfolio-two-section-content">
                    <div class="rb-portfolio-two-single-service">
                        <div class="rb-portfolio-two-services-icon">
                            <i class="fab fa-google-play"></i>
                        </div>
                        <div class="rb-portfolio-two-services-title">
                            <h4><?php esc_html_e('Apps Development', 'rb-portfolio-two'); ?></h4>
                        </div>
                        <div class="rb-portfolio-two-services-description">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.', 'rb-portfolio-two'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--===== 05. Single Service End Here =====-->
            
            <!--===== 06. Single Service Strat Here =====-->
            <div class="col-lg-4">
                <div class="rb-portfolio-two-section-content">
                    <div class="rb-portfolio-two-single-service">
                        <div class="rb-portfolio-two-services-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <div class="rb-portfolio-two-services-title">
                            <h4><?php esc_html_e('24/7 Support', 'rb-portfolio-two'); ?></h4>
                        </div>
                        <div class="rb-portfolio-two-services-description">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.', 'rb-portfolio-two'); ?></p>
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