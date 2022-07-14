<!--=================================== 
===== My Services Area Strat Here =====
====================================-->
<section class="jhon-smith-services jhon-smith-scroll-menu" id="jhon-smith-services">

    <!--================================ 
    ===== Section Title Strat Here =====
    =================================-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="jhon-smith-section-title">
                    <h2>
                        <span class="jhon-smith-theme-color">
                        <?php
                        $jhon_smith_my_services_title_theme_color = get_post_meta(get_the_ID(), 'jhon_smith_my_services_title_theme_color', true);
                        if( isset ($jhon_smith_my_services_title_theme_color)  && !empty ($jhon_smith_my_services_title_theme_color) ){
                            printf(
                                /* translators: %s: My Services Section Title Theme Color */
                                __('%s','jhon-smith'),
                                $jhon_smith_my_services_title_theme_color
                                );
                        }
                        else {
                            esc_html_e('My','jhon-smith');
                        }
                        ?>
                        </span>

                        <?php
                        $jhon_smith_my_services_title_black = get_post_meta(get_the_ID(), 'jhon_smith_my_services_title_black', true);
                        if( isset ($jhon_smith_my_services_title_black) && !empty ($jhon_smith_my_services_title_black) ){
                            printf(
                                /* translators: %s: My Services Section Title Theme Color */
                                __('%s','jhon-smith'),
                                $jhon_smith_my_services_title_black
                                );
                        }
                        else {
                            esc_html_e('Services','jhon-smith');
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
            $jhon_smith_my_service_items = get_post_meta(get_the_ID(), 'jhon_smith_my_service_items', true);
            if( isset ($jhon_smith_my_service_items) && !empty ($jhon_smith_my_service_items) ): 
                
            foreach($jhon_smith_my_service_items as $jhon_smith_my_service_items_single):
            ?>
            <!--===== 01. Single Service Strat Here =====-->
            <div class="col-lg-4">
                <div class="jhon-smith-section-content">
                    <div class="jhon-smith-single-service">
                        <div class="jhon-smith-services-icon">
                            <i class="<?php
                                $jhon_smith_my_service_item_icon = $jhon_smith_my_service_items_single['jhon_smith_my_service_item_icon'];
                                if( isset ($jhon_smith_my_service_item_icon)  && !empty ($jhon_smith_my_service_item_icon) ){
                                    echo esc_attr($jhon_smith_my_service_item_icon);
                                }
                                else {
                                    echo esc_attr('fas fa-palette');
                                }
                                ?>"></i>
                        </div>
                        <div class="jhon-smith-services-title">
                            <h4>
                            <?php
                            $jhon_smith_my_service_item_title = $jhon_smith_my_service_items_single['jhon_smith_my_service_item_title'];
                            if( isset ($jhon_smith_my_service_item_title)  && !empty ($jhon_smith_my_service_item_title) ){
                                printf(
                                    /* translators: %s: My Services Item Title */
                                    __('%s','jhon-smith'),
                                    $jhon_smith_my_service_item_title
                                );
                            }
                            else {
                                esc_html_e('Graphic Design','jhon-smith');
                            }
                            ?>
                            </h4>
                        </div>
                        <div class="jhon-smith-services-description">
                            <p>
                            <?php
                            $jhon_smith_my_service_item_description = $jhon_smith_my_service_items_single['jhon_smith_my_service_item_description'];
                            if( isset ($jhon_smith_my_service_item_description)  && !empty ($jhon_smith_my_service_item_description) ){
                                printf(
                                    /* translators: %s: My Services Item Description */
                                    __('%s','jhon-smith'),
                                    $jhon_smith_my_service_item_description
                                );
                            }
                            else {
                                esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.','jhon-smith');
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
                <div class="jhon-smith-section-content">
                    <div class="jhon-smith-single-service">
                        <div class="jhon-smith-services-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <div class="jhon-smith-services-title">
                            <h4><?php esc_html_e('Graphic Design', 'jhon-smith'); ?></h4>
                        </div>
                        <div class="jhon-smith-services-description">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.', 'jhon-smith'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--===== 01. Single Service End Here =====-->
            
            <!--===== 02. Single Service Strat Here =====-->
            <div class="col-lg-4">
                <div class="jhon-smith-section-content">
                    <div class="jhon-smith-single-service">
                        <div class="jhon-smith-services-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div class="jhon-smith-services-title">
                            <h4><?php esc_html_e('Web Design', 'jhon-smith'); ?></h4>
                        </div>
                        <div class="jhon-smith-services-description">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.', 'jhon-smith'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--===== 02. Single Service End Here =====-->
            
            <!--===== 03. Single Service Strat Here =====-->
            <div class="col-lg-4">
                <div class="jhon-smith-section-content">
                    <div class="jhon-smith-single-service">
                        <div class="jhon-smith-services-icon">
                            <i class="fab fa-wordpress"></i>
                        </div>
                        <div class="jhon-smith-services-title">
                            <h4><?php esc_html_e('WordPress', 'jhon-smith'); ?></h4>
                        </div>
                        <div class="jhon-smith-services-description">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.', 'jhon-smith'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--===== 03. Single Service End Here =====-->
            
            <!--===== 04. Single Service Strat Here =====-->
            <div class="col-lg-4">
                <div class="jhon-smith-section-content">
                    <div class="jhon-smith-single-service">
                        <div class="jhon-smith-services-icon">
                            <i class="fab fa-laravel"></i>
                        </div>
                        <div class="jhon-smith-services-title">
                            <h4><?php esc_html_e('Laravel', 'jhon-smith'); ?></h4>
                        </div>
                        <div class="jhon-smith-services-description">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.', 'jhon-smith'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--===== 04. Single Service End Here =====-->
            
            <!--===== 05. Single Service Strat Here =====-->
            <div class="col-lg-4">
                <div class="jhon-smith-section-content">
                    <div class="jhon-smith-single-service">
                        <div class="jhon-smith-services-icon">
                            <i class="fab fa-google-play"></i>
                        </div>
                        <div class="jhon-smith-services-title">
                            <h4><?php esc_html_e('Apps Development', 'jhon-smith'); ?></h4>
                        </div>
                        <div class="jhon-smith-services-description">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.', 'jhon-smith'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--===== 05. Single Service End Here =====-->
            
            <!--===== 06. Single Service Strat Here =====-->
            <div class="col-lg-4">
                <div class="jhon-smith-section-content">
                    <div class="jhon-smith-single-service">
                        <div class="jhon-smith-services-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <div class="jhon-smith-services-title">
                            <h4><?php esc_html_e('24/7 Support', 'jhon-smith'); ?></h4>
                        </div>
                        <div class="jhon-smith-services-description">
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.', 'jhon-smith'); ?></p>
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