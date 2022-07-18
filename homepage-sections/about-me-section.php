<!--================================ 
===== About Me Area Strat Here =====
=================================-->
<section class="rbp-two-about-me rbp-two-scroll-menu" id="rbp-two-about-me">

    <!--================================ 
    ===== Section Title Strat Here =====
    =================================-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rbp-two-section-title">
                    <h2>
                        <?php
                        $rbp_two_about_me_title_black = get_post_meta(get_the_ID(), 'rbp_two_about_me_title_black', true);
                        if(isset($rbp_two_about_me_title_black) && !empty($rbp_two_about_me_title_black)){
                            printf(
                                /* translators: %s: About Me Section Title Black */
                                __('%s','rbp-two'),
                                $rbp_two_about_me_title_black
                                );
                        }
                        else {
                            esc_html_e('About','rbp-two');
                        }
                        ?>

                        <span class="rbp-two-theme-color">
                        <?php
                        $rbp_two_about_me_title_theme_color = get_post_meta(get_the_ID(), 'rbp_two_about_me_title_theme_color', true);
                        if( isset ($rbp_two_about_me_title_theme_color) && !empty ($rbp_two_about_me_title_theme_color) ){
                            printf(
                                /* translators: %s: About Me Section Title Theme Color */
                                __('%s','rbp-two'),
                                $rbp_two_about_me_title_theme_color
                                );
                        }
                        else {
                            esc_html_e('Me','rbp-two');
                        }
                        ?>
                        </span>

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
            
            <!--===== About Me Section Left Area Strat Here =====-->
            <div class="col-lg-5">
                <div class="rbp-two-about-me-left">
                    <img src="<?php
                       $rbp_two_about_me_content_img = get_post_meta(get_the_ID(), 'rbp_two_about_me_content_img', true);
                        if( isset ($rbp_two_about_me_content_img) && !empty ($rbp_two_about_me_content_img) ){
                            echo esc_url ($rbp_two_about_me_content_img);
                        }
                        else {
                            echo esc_url(get_template_directory_uri().'/assets/img/user.jpg');
                        }
                        ?>" alt="<?php echo esc_attr('User Image', 'rbp-two'); ?>" />
                </div>
            </div>
            <!--===== About Me Section Left Area End Here =====-->
            
            <!--===== About Me Section Right Area Strat Here =====-->
            <div class="col-lg-7">
                <div class="rbp-two-about-me-right">
                    
                    <!--===== About Me Section Title Area Strat Here =====-->
                    <div class="rbp-two-about-me-title">
                        
                        <h3>
                        <?php
                        $rbp_two_about_me_content_title = get_post_meta(get_the_ID(), 'rbp_two_about_me_content_title', true);
                        if( isset ($rbp_two_about_me_content_title) && !empty ($rbp_two_about_me_content_title) ){
                            printf(
                                /* translators: %s: About Me Content Title */
                                __('%s','rbp-two'),
                                $rbp_two_about_me_content_title
                                );
                        }
                        else {
                            esc_html_e('RB Portfolio Two','rbp-two');
                        }
                        ?>
                        </h3>
                        
                        <h6>
                        <?php
                        $rbp_two_about_me_content_sub_title = get_post_meta(get_the_ID(), 'rbp_two_about_me_content_sub_title', true);
                        if( isset ($rbp_two_about_me_content_sub_title) && !empty ($rbp_two_about_me_content_sub_title) ){
                            printf(
                                /* translators: %s: About Me Content Sub Title */
                                __('%s','rbp-two'),
                                $rbp_two_about_me_content_sub_title
                                );
                        }
                        else {
                            esc_html_e('I am a Full-Stack Web Developer','rbp-two');
                        }
                        ?>
                        </h6>

                    </div>
                    <!--===== About Me Section Title Area End Here =====-->
                    
                    <!--===== About Me Section Description Area Strat Here =====-->
                    <div class="rbp-two-about-me-description">
                        <?php
                        $rbp_two_about_me_content_description = get_post_meta(get_the_ID(), 'rbp_two_about_me_content_description', true);
                        if( isset ($rbp_two_about_me_content_description) && !empty ($rbp_two_about_me_content_description) ){
                            printf(
                                /* translators: %s: About Me Content Description */
                                __('%s','rbp-two'),
                                $rbp_two_about_me_content_description
                                );
                        }
                        else { ?>

                        <p>
                            <?php
                            esc_html_e("My name is RB Portfolio Two. I am a freelancer based in UK and I have been building noteworthy websites for years. For this time i've done all types of projects.","rbp-two"); ?>
                        </p>

                        <p>
                            <?php
                            esc_html_e("I help convert a vision and an idea into meaningful and useful products. Having a sharp eye for product evolution helps me prioritize tasks, iterate fast and deliver faster. If you're interested in working with me, don't hesitate to hire me.","rbp-two"); ?>
                        </p>

                        <?php } ?>

                    </div>
                    <!--===== About Me Section Description Area End Here =====-->
                    
                    <!--===== About Me Section Description Area Strat Here =====-->
                    <div class="rbp-two-about-me-separator"></div>
                    <!--===== About Me Section Description Area End Here =====-->
                    
                    <!--===== About Me Section Details Area Strat Here =====-->
                    <div class="rbp-two-about-me-details">
                        <ul>

                            <?php
                            $rbp_two_about_me_content_details = get_post_meta(get_the_ID(), 'rbp_two_about_me_content_details', true);
                            if( isset ($rbp_two_about_me_content_details) && !empty ($rbp_two_about_me_content_details) ): 
                                
                            foreach($rbp_two_about_me_content_details as $rbp_two_about_me_content_details_single):
                            ?>
                            <li>
                                <span class="rbp-two-user-icon">

                                <i class="<?php
                                $rbp_two_about_me_content_details_single_icon = $rbp_two_about_me_content_details_single['rbp_two_about_me_content_details_icon'];
                                if( isset ($rbp_two_about_me_content_details_single_icon) && !empty ($rbp_two_about_me_content_details_single_icon) ){
                                    echo esc_attr($rbp_two_about_me_content_details_single_icon);
                                }
                                else {
                                    echo esc_attr('fas fa-user');
                                }
                                ?>">
                                </i>

                                </span>

                                <span class="rbp-two-user-title rbp-two-strong-text rbp-two-theme-color">

                                <?php
                                $rbp_two_about_me_content_details_single_title = $rbp_two_about_me_content_details_single['rbp_two_about_me_content_details_strong_text'];
                                if( isset ($rbp_two_about_me_content_details_single_title) && !empty ($rbp_two_about_me_content_details_single_title) ){
                                    printf(
                                        /* translators: %s: About Me Content Details Title */
                                        __('%s','rbp-two'),
                                        $rbp_two_about_me_content_details_single_title
                                        );
                                }
                                else {
                                    esc_html_e('Name','rbp-two');
                                }
                                ?>
                                </span>

                                <span><?php esc_html_e(':','rbp-two'); ?></span>

                                <span class="rbp-two-user-details">
                                <?php
                                $rbp_two_about_me_content_details_single_text = $rbp_two_about_me_content_details_single['rbp_two_about_me_content_details_normal_text'];
                                if( isset ($rbp_two_about_me_content_details_single_text) && !empty ($rbp_two_about_me_content_details_single_text) ){
                                    printf(
                                        /* translators: %s: About Me Content Details Text */
                                        __('%s','rbp-two'),
                                        $rbp_two_about_me_content_details_single_text
                                        );
                                }
                                else {
                                    esc_html_e('RB Portfolio Two','rbp-two');
                                }
                                ?>
                                </span>
                            </li>

                            <?php endforeach; else: ?>
                            <li>
                                <span class="rbp-two-user-icon"><i class="fas fa-user"></i></span>
                                <span class="rbp-two-user-title rbp-two-strong-text rbp-two-theme-color">
                                    <?php esc_html_e("Name","rbp-two"); ?>
                                </span>
                                <span><?php esc_html_e(":","rbp-two"); ?></span>
                                <span class="rbp-two-user-details">
                                <?php esc_html_e("RB Portfolio Two","rbp-two"); ?></span>
                            </li>

                            <li>
                                <span class="rbp-two-user-icon"><i class="fas fa-magic"></i></span>
                                <span class="rbp-two-user-title rbp-two-strong-text rbp-two-theme-color"><?php esc_html_e("Date of Birth","rbp-two"); ?></span>
                                <span><?php esc_html_e(":","rbp-two"); ?></span>
                                <span class="rbp-two-user-details"><?php esc_html_e("05 November 1994","rbp-two"); ?></span>
                            </li>

                            <li>
                                <span class="rbp-two-user-icon"><i class="fas fa-phone-alt"></i></span>
                                <span class="rbp-two-user-title rbp-two-strong-text rbp-two-theme-color"><?php esc_html_e("Phone","rbp-two"); ?></span>
                                <span><?php esc_html_e(":","rbp-two"); ?></span>
                                <span class="rbp-two-user-details"><?php esc_html_e("+44 1632 967704, +20 0129 147 2249","rbp-two"); ?></span>
                            </li>

                            <li>
                                <span class="rbp-two-user-icon"><i class="fas fa-envelope"></i></span>
                                <span class="rbp-two-user-title rbp-two-strong-text rbp-two-theme-color"><?php esc_html_e("E-mail","rbp-two"); ?></span>
                                <span><?php esc_html_e(":","rbp-two"); ?></span>
                                <span class="rbp-two-user-details"><?php esc_html_e("support@website.com, smith@example.com","rbp-two"); ?></span>
                            </li>

                            <li>
                                <span class="rbp-two-user-icon"><i class="fas fa-map-marker-alt"></i></span>
                                <span class="rbp-two-user-title rbp-two-strong-text rbp-two-theme-color"><?php esc_html_e("Address","rbp-two"); ?></span>
                                <span><?php esc_html_e(":","rbp-two"); ?></span>
                                <span class="rbp-two-user-details"><?php esc_html_e("4612 Los Angeles CA, United State.","rbp-two"); ?></span>
                            </li>

                            <?php endif; ?>
                        </ul>
                    </div>
                    <!--===== About Me Section Details Area End Here =====-->
                    
                    <!--===== About Me Section Bottons Area Strat Here =====-->
                    <div class="rbp-two-about-me-btns">
                        
                        <?php
                        $rbp_two_about_me_content_buttons = get_post_meta(get_the_ID(), 'rbp_two_about_me_content_buttons', true);
                        if( isset ($rbp_two_about_me_content_buttons) && !empty ($rbp_two_about_me_content_buttons) ): 
                            
                        foreach($rbp_two_about_me_content_buttons as $rbp_two_about_me_content_buttons_single):
                        ?>

                        <div class="rbp-two-btn btn-download-cv">
                            <a href="<?php
                                $rbp_two_about_me_content_buttons_single_url = $rbp_two_about_me_content_buttons_single['rbp_two_about_me_content_button_url'];
                                if( isset ($rbp_two_about_me_content_buttons_single_url) && !empty ($rbp_two_about_me_content_buttons_single_url) ){
                                    echo esc_url($rbp_two_about_me_content_buttons_single_url);
                                }
                                else {
                                    echo esc_url('#');
                                }
                                ?>">
                                <?php
                                $rbp_two_about_me_content_buttons_single_text = $rbp_two_about_me_content_buttons_single['rbp_two_about_me_content_button_text'];
                                if( isset ($rbp_two_about_me_content_buttons_single_text) && !empty ($rbp_two_about_me_content_buttons_single_text) ){
                                    printf(
                                        /* translators: %s: About Me Button Text */
                                        __('%s','rbp-two'),
                                        $rbp_two_about_me_content_buttons_single_text
                                        );
                                }
                                else {
                                    esc_html_e('Download CV','rbp-two');
                                }
                                ?>
                                </a>
                        </div>

                        <?php endforeach; else: ?>
                            
                        <div class="rbp-two-btn btn-download-cv">
                            <a href="<?php echo esc_url('#'); ?>"><?php esc_html_e('Download CV','rbp-two'); ?></a>
                        </div>
                        <div class="rbp-two-btn btn-contact-me">
                            <a href="<?php echo esc_url('#'); ?>"><?php esc_html_e('Contact Me','rbp-two'); ?></a>
                        </div>

                        <?php endif; ?>

                    </div>
                    <!--===== About Me Section Bottons Area End Here =====-->
                    
                </div>
            </div>
            <!--===== About Me Section Right Area End Here =====-->
            
        </div><!-- row end -->
    </div><!-- container end -->
    <!--================================ 
    ===== Section Content End Here =====
    =================================-->

</section>
<!--============================== 
===== About Me Area End Here =====
===============================-->