<!--================================== 
===== Contact Me Area Strat Here =====
===================================-->
<section class="contact-me jhon-smith-scroll-menu" id="contact-me">

    <!--================================ 
    ===== Section Title Strat Here =====
    =================================-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="jhon-smith-section-title">
                    <h2><?php
                        $jhon_smith_contact_me_title_black = get_post_meta(get_the_ID(), 'jhon_smith_contact_me_title_black', true);
                        if($jhon_smith_contact_me_title_black){
                            printf(
                                /* translators: %s: Contact Me Section Title Theme Color */
                                __('%s','jhon-smith'),
                                $jhon_smith_contact_me_title_black
                                );
                        }
                        else {
                            esc_html_e('Contact','jhon-smith');
                        }
                        ?> <span class="jhon-smith-theme-color"><?php
                        $jhon_smith_contact_me_title_theme_color = get_post_meta(get_the_ID(), 'jhon_smith_contact_me_title_theme_color', true);
                        if($jhon_smith_contact_me_title_theme_color){
                            printf(
                                /* translators: %s: Contact Me Section Title Theme Color */
                                __('%s','jhon-smith'),
                                $jhon_smith_contact_me_title_theme_color
                                );
                        }
                        else {
                            esc_html_e('Me','jhon-smith');
                        }
                        ?></span></h2>
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
    
    <!--===== Get in a touch Area Strat Here =====-->
    <div class="container">
        <div class="row">
            
            <?php
            $jhon_smith_contact_me_items = get_post_meta(get_the_ID(), 'jhon_smith_contact_me_items', true);
            if($jhon_smith_contact_me_items): 
                
            foreach($jhon_smith_contact_me_items as $jhon_smith_contact_me_items_single):
            ?>
            <!--===== 01. Single Contact Info Item Strat Here =====-->
            <div class="col-lg-4">
                <div class="jhon-smith-contact-info-box">
                    <div class="jhon-smith-contact-info-icon">
                        <i class="<?php
                                $jhon_smith_contact_me_item_icon = $jhon_smith_contact_me_items_single['jhon_smith_contact_me_item_icon'];
                                if($jhon_smith_contact_me_item_icon){
                                    echo esc_attr($jhon_smith_contact_me_item_icon);
                                }
                                else {
                                    echo esc_attr('fas fa-phone-alt');
                                }
                                ?>">
                        </i>
                    </div>
                    <div class="jhon-smith-contact-info-text">
                        <p>
                        <?php
                        $jhon_smith_contact_me_item_description = $jhon_smith_contact_me_items_single['jhon_smith_contact_me_item_description'];
                        if($jhon_smith_contact_me_item_description){
                            printf(
                                /* translators: %s: Contact Me Item Description */
                                __('%s','jhon-smith'),
                                $jhon_smith_contact_me_item_description
                            );
                        }
                        else {
                            esc_html_e('+44 1632 967704, +20 0129 147 2249','jhon-smith');
                        }
                        ?>
                        </p>
                    </div>
                </div>
            </div>
            <!--===== 01. Single Contact Info Item End Here =====-->

            <?php endforeach; else: ?>
            <!--===== 01. Single Contact Info Item Strat Here =====-->
            <div class="col-lg-4">
                <div class="jhon-smith-contact-info-box">
                    <div class="jhon-smith-contact-info-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="jhon-smith-contact-info-text">
                        <p><?php esc_html_e('+44 1632 967704, +20 0129 147 2249', 'jhon-smith'); ?></p>
                    </div>
                </div>
            </div>
            <!--===== 01. Single Contact Info Item End Here =====-->
            
            <!--===== 02. Single Contact Info Item Strat Here =====-->
            <div class="col-lg-4">
                <div class="jhon-smith-contact-info-box">
                    <div class="jhon-smith-contact-info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="jhon-smith-contact-info-text">
                        <p><?php esc_html_e('support@website.com, smith@example.com', 'jhon-smith'); ?></p>
                    </div>
                </div>
            </div>
            <!--===== 02. Single Contact Info Item End Here =====-->
            
            <!--===== 03. Single Contact Info Item Strat Here =====-->
            <div class="col-lg-4">
                <div class="jhon-smith-contact-info-box">
                    <div class="jhon-smith-contact-info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="jhon-smith-contact-info-text">
                        <p><?php esc_html_e('Address: 4612 Los Angeles CA. United State', 'jhon-smith'); ?></p>
                    </div>
                </div>
            </div>
            <!--===== 03. Single Contact Info Item End Here =====-->

            <?php endif; ?>
            
        </div><!-- row end -->
    </div><!-- container end -->
    <!--===== Get in a touch Area End Here =====-->
    
    <!--===== Send Massage Area Strat Here =====-->
    <div class="container">
        <div class="row">
            
                <!-- Add Contact 7 ShortCode -->

        </div><!-- row end -->
    </div><!-- container end -->
    <!--===== Send Massage Area End Here =====-->
    <!--================================
    ===== Section Content End Here =====
    =================================-->

</section>
<!--================================ 
===== Contact Me Area End Here =====
=================================-->