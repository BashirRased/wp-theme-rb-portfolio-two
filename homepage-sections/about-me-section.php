<!--================================ 
===== About Me Area Strat Here =====
=================================-->
<section class="jhon-smith-about-me jhon-smith-scroll-menu" id="jhon-smith-about-me">

    <!--================================ 
    ===== Section Title Strat Here =====
    =================================-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="jhon-smith-section-title">
                    <h2>
                        <?php
                        $jhon_smith_about_me_title_black = get_post_meta(get_the_ID(), 'jhon_smith_about_me_title_black', true);
                        if(isset($jhon_smith_about_me_title_black) && !empty($jhon_smith_about_me_title_black)){
                            printf(
                                /* translators: %s: About Me Section Title Black */
                                __('%s','jhon-smith'),
                                $jhon_smith_about_me_title_black
                                );
                        }
                        else {
                            esc_html_e('About','jhon-smith');
                        }
                        ?>

                        <span class="jhon-smith-theme-color">
                        <?php
                        $jhon_smith_about_me_title_theme_color = get_post_meta(get_the_ID(), 'jhon_smith_about_me_title_theme_color', true);
                        if( isset ($jhon_smith_about_me_title_theme_color) && !empty ($jhon_smith_about_me_title_theme_color) ){
                            printf(
                                /* translators: %s: About Me Section Title Theme Color */
                                __('%s','jhon-smith'),
                                $jhon_smith_about_me_title_theme_color
                                );
                        }
                        else {
                            esc_html_e('Me','jhon-smith');
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
                <div class="jhon-smith-about-me-left">
                    <img src="<?php
                       $jhon_smith_about_me_content_img = get_post_meta(get_the_ID(), 'jhon_smith_about_me_content_img', true);
                        if( isset ($jhon_smith_about_me_content_img) && !empty ($jhon_smith_about_me_content_img) ){
                            echo esc_url ($jhon_smith_about_me_content_img);
                        }
                        else {
                            echo esc_url(get_template_directory_uri().'/assets/img/user.jpg');
                        }
                        ?>" alt="<?php echo esc_attr('User Image', 'jhon-smith'); ?>" />
                </div>
            </div>
            <!--===== About Me Section Left Area End Here =====-->
            
            <!--===== About Me Section Right Area Strat Here =====-->
            <div class="col-lg-7">
                <div class="jhon-smith-about-me-right">
                    
                    <!--===== About Me Section Title Area Strat Here =====-->
                    <div class="jhon-smith-about-me-title">
                        
                        <h3>
                        <?php
                        $jhon_smith_about_me_content_title = get_post_meta(get_the_ID(), 'jhon_smith_about_me_content_title', true);
                        if( isset ($jhon_smith_about_me_content_title) && !empty ($jhon_smith_about_me_content_title) ){
                            printf(
                                /* translators: %s: About Me Content Title */
                                __('%s','jhon-smith'),
                                $jhon_smith_about_me_content_title
                                );
                        }
                        else {
                            esc_html_e('Jhon Smith','jhon-smith');
                        }
                        ?>
                        </h3>
                        
                        <h6>
                        <?php
                        $jhon_smith_about_me_content_sub_title = get_post_meta(get_the_ID(), 'jhon_smith_about_me_content_sub_title', true);
                        if( isset ($jhon_smith_about_me_content_sub_title) && !empty ($jhon_smith_about_me_content_sub_title) ){
                            printf(
                                /* translators: %s: About Me Content Sub Title */
                                __('%s','jhon-smith'),
                                $jhon_smith_about_me_content_sub_title
                                );
                        }
                        else {
                            esc_html_e('I am a Full-Stack Web Developer','jhon-smith');
                        }
                        ?>
                        </h6>

                    </div>
                    <!--===== About Me Section Title Area End Here =====-->
                    
                    <!--===== About Me Section Description Area Strat Here =====-->
                    <div class="jhon-smith-about-me-description">
                        <?php
                        $jhon_smith_about_me_content_description = get_post_meta(get_the_ID(), 'jhon_smith_about_me_content_description', true);
                        if( isset ($jhon_smith_about_me_content_description) && !empty ($jhon_smith_about_me_content_description) ){
                            printf(
                                /* translators: %s: About Me Content Description */
                                __('%s','jhon-smith'),
                                $jhon_smith_about_me_content_description
                                );
                        }
                        else { ?>

                        <p>
                            <?php
                            esc_html_e("My name is Jhon Smith. I am a freelancer based in UK and I have been building noteworthy websites for years. For this time i've done all types of projects.","jhon-smith"); ?>
                        </p>

                        <p>
                            <?php
                            esc_html_e("I help convert a vision and an idea into meaningful and useful products. Having a sharp eye for product evolution helps me prioritize tasks, iterate fast and deliver faster. If you're interested in working with me, don't hesitate to hire me.","jhon-smith"); ?>
                        </p>

                        <?php } ?>

                    </div>
                    <!--===== About Me Section Description Area End Here =====-->
                    
                    <!--===== About Me Section Description Area Strat Here =====-->
                    <div class="jhon-smith-about-me-separator"></div>
                    <!--===== About Me Section Description Area End Here =====-->
                    
                    <!--===== About Me Section Details Area Strat Here =====-->
                    <div class="jhon-smith-about-me-details">
                        <ul>

                            <?php
                            $jhon_smith_about_me_content_details = get_post_meta(get_the_ID(), 'jhon_smith_about_me_content_details', true);
                            if( isset ($jhon_smith_about_me_content_details) && !empty ($jhon_smith_about_me_content_details) ): 
                                
                            foreach($jhon_smith_about_me_content_details as $jhon_smith_about_me_content_details_single):
                            ?>
                            <li>
                                <span class="jhon-smith-user-icon">

                                <i class="<?php
                                $jhon_smith_about_me_content_details_single_icon = $jhon_smith_about_me_content_details_single['jhon_smith_about_me_content_details_icon'];
                                if( isset ($jhon_smith_about_me_content_details_single_icon) && !empty ($jhon_smith_about_me_content_details_single_icon) ){
                                    echo esc_attr($jhon_smith_about_me_content_details_single_icon);
                                }
                                else {
                                    echo esc_attr('fas fa-user');
                                }
                                ?>">
                                </i>

                                </span>

                                <span class="jhon-smith-user-title jhon-smith-strong-text jhon-smith-theme-color">

                                <?php
                                $jhon_smith_about_me_content_details_single_title = $jhon_smith_about_me_content_details_single['jhon_smith_about_me_content_details_strong_text'];
                                if( isset ($jhon_smith_about_me_content_details_single_title) && !empty ($jhon_smith_about_me_content_details_single_title) ){
                                    printf(
                                        /* translators: %s: About Me Content Details Title */
                                        __('%s','jhon-smith'),
                                        $jhon_smith_about_me_content_details_single_title
                                        );
                                }
                                else {
                                    esc_html_e('Name','jhon-smith');
                                }
                                ?>
                                </span>

                                <span><?php esc_html_e(':','jhon-smith'); ?></span>

                                <span class="jhon-smith-user-details">
                                <?php
                                $jhon_smith_about_me_content_details_single_text = $jhon_smith_about_me_content_details_single['jhon_smith_about_me_content_details_normal_text'];
                                if( isset ($jhon_smith_about_me_content_details_single_text) && !empty ($jhon_smith_about_me_content_details_single_text) ){
                                    printf(
                                        /* translators: %s: About Me Content Details Text */
                                        __('%s','jhon-smith'),
                                        $jhon_smith_about_me_content_details_single_text
                                        );
                                }
                                else {
                                    esc_html_e('Jhon Smith','jhon-smith');
                                }
                                ?>
                                </span>
                            </li>

                            <?php endforeach; else: ?>
                            <li>
                                <span class="jhon-smith-user-icon"><i class="fas fa-user"></i></span>
                                <span class="jhon-smith-user-title jhon-smith-strong-text jhon-smith-theme-color">
                                    <?php esc_html_e("Name","jhon-smith"); ?>
                                </span>
                                <span><?php esc_html_e(":","jhon-smith"); ?></span>
                                <span class="jhon-smith-user-details">
                                <?php esc_html_e("Jhon Smith","jhon-smith"); ?></span>
                            </li>

                            <li>
                                <span class="jhon-smith-user-icon"><i class="fas fa-magic"></i></span>
                                <span class="jhon-smith-user-title jhon-smith-strong-text jhon-smith-theme-color"><?php esc_html_e("Date of Birth","jhon-smith"); ?></span>
                                <span><?php esc_html_e(":","jhon-smith"); ?></span>
                                <span class="jhon-smith-user-details"><?php esc_html_e("05 November 1994","jhon-smith"); ?></span>
                            </li>

                            <li>
                                <span class="jhon-smith-user-icon"><i class="fas fa-phone-alt"></i></span>
                                <span class="jhon-smith-user-title jhon-smith-strong-text jhon-smith-theme-color"><?php esc_html_e("Phone","jhon-smith"); ?></span>
                                <span><?php esc_html_e(":","jhon-smith"); ?></span>
                                <span class="jhon-smith-user-details"><?php esc_html_e("+44 1632 967704, +20 0129 147 2249","jhon-smith"); ?></span>
                            </li>

                            <li>
                                <span class="jhon-smith-user-icon"><i class="fas fa-envelope"></i></span>
                                <span class="jhon-smith-user-title jhon-smith-strong-text jhon-smith-theme-color"><?php esc_html_e("E-mail","jhon-smith"); ?></span>
                                <span><?php esc_html_e(":","jhon-smith"); ?></span>
                                <span class="jhon-smith-user-details"><?php esc_html_e("support@website.com, smith@example.com","jhon-smith"); ?></span>
                            </li>

                            <li>
                                <span class="jhon-smith-user-icon"><i class="fas fa-map-marker-alt"></i></span>
                                <span class="jhon-smith-user-title jhon-smith-strong-text jhon-smith-theme-color"><?php esc_html_e("Address","jhon-smith"); ?></span>
                                <span><?php esc_html_e(":","jhon-smith"); ?></span>
                                <span class="jhon-smith-user-details"><?php esc_html_e("4612 Los Angeles CA, United State.","jhon-smith"); ?></span>
                            </li>

                            <?php endif; ?>
                        </ul>
                    </div>
                    <!--===== About Me Section Details Area End Here =====-->
                    
                    <!--===== About Me Section Bottons Area Strat Here =====-->
                    <div class="jhon-smith-about-me-btns">
                        
                        <?php
                        $jhon_smith_about_me_content_buttons = get_post_meta(get_the_ID(), 'jhon_smith_about_me_content_buttons', true);
                        if( isset ($jhon_smith_about_me_content_buttons) && !empty ($jhon_smith_about_me_content_buttons) ): 
                            
                        foreach($jhon_smith_about_me_content_buttons as $jhon_smith_about_me_content_buttons_single):
                        ?>

                        <div class="jhon-smith-btn btn-download-cv">
                            <a href="<?php
                                $jhon_smith_about_me_content_buttons_single_url = $jhon_smith_about_me_content_buttons_single['jhon_smith_about_me_content_button_url'];
                                if( isset ($jhon_smith_about_me_content_buttons_single_url) && !empty ($jhon_smith_about_me_content_buttons_single_url) ){
                                    echo esc_url($jhon_smith_about_me_content_buttons_single_url);
                                }
                                else {
                                    echo esc_url('#');
                                }
                                ?>">
                                <?php
                                $jhon_smith_about_me_content_buttons_single_text = $jhon_smith_about_me_content_buttons_single['jhon_smith_about_me_content_button_text'];
                                if( isset ($jhon_smith_about_me_content_buttons_single_text) && !empty ($jhon_smith_about_me_content_buttons_single_text) ){
                                    printf(
                                        /* translators: %s: About Me Button Text */
                                        __('%s','jhon-smith'),
                                        $jhon_smith_about_me_content_buttons_single_text
                                        );
                                }
                                else {
                                    esc_html_e('Download CV','jhon-smith');
                                }
                                ?>
                                </a>
                        </div>

                        <?php endforeach; else: ?>
                            
                        <div class="jhon-smith-btn btn-download-cv">
                            <a href="<?php echo esc_url('#'); ?>"><?php esc_html_e('Download CV','jhon-smith'); ?></a>
                        </div>
                        <div class="jhon-smith-btn btn-contact-me">
                            <a href="<?php echo esc_url('#'); ?>"><?php esc_html_e('Contact Me','jhon-smith'); ?></a>
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