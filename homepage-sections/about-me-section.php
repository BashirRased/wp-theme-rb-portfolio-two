<!--================================ 
===== About Me Area Strat Here =====
=================================-->
<section class="about-me rb-portfolio-two-scroll-menu" id="about-me">

    <!--================================ 
    ===== Section Title Strat Here =====
    =================================-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>
                        <?php
                        $rb_portfolio_two_about_me_title_black = get_post_meta(get_the_ID(), 'rb_portfolio_two_about_me_title_black', true);
                        if(isset($rb_portfolio_two_about_me_title_black) && !empty($rb_portfolio_two_about_me_title_black)){
                            printf(
                                /* translators: %s: About Me Section Title Black */
                                __('%s','rb-portfolio-two'),
                                $rb_portfolio_two_about_me_title_black
                                );
                        }
                        else {
                            esc_html_e('About','rb-portfolio-two');
                        }
                        ?>

                        <span class="theme-color">
                        <?php
                        $rb_portfolio_two_about_me_title_theme_color = get_post_meta(get_the_ID(), 'rb_portfolio_two_about_me_title_theme_color', true);
                        if( isset ($rb_portfolio_two_about_me_title_theme_color) && !empty ($rb_portfolio_two_about_me_title_theme_color) ){
                            printf(
                                /* translators: %s: About Me Section Title Theme Color */
                                __('%s','rb-portfolio-two'),
                                $rb_portfolio_two_about_me_title_theme_color
                                );
                        }
                        else {
                            esc_html_e('Me','rb-portfolio-two');
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
                <div class="about-me-left">
                    <img src="<?php
                       $rb_portfolio_two_about_me_content_img = get_post_meta(get_the_ID(), 'rb_portfolio_two_about_me_content_img', true);
                        if( isset ($rb_portfolio_two_about_me_content_img) && !empty ($rb_portfolio_two_about_me_content_img) ){
                            echo esc_url ($rb_portfolio_two_about_me_content_img);
                        }
                        else {
                            echo esc_url(get_template_directory_uri().'/assets/img/user.jpg');
                        }
                        ?>" alt="<?php echo esc_attr('User Image', 'rb-portfolio-two'); ?>" />
                </div>
            </div>
            <!--===== About Me Section Left Area End Here =====-->
            
            <!--===== About Me Section Right Area Strat Here =====-->
            <div class="col-lg-7">
                <div class="about-me-right">
                    
                    <!--===== About Me Section Title Area Strat Here =====-->
                    <div class="about-me-title">
                        
                        <h3>
                        <?php
                        $rb_portfolio_two_about_me_content_title = get_post_meta(get_the_ID(), 'rb_portfolio_two_about_me_content_title', true);
                        if( isset ($rb_portfolio_two_about_me_content_title) && !empty ($rb_portfolio_two_about_me_content_title) ){
                            printf(
                                /* translators: %s: About Me Content Title */
                                __('%s','rb-portfolio-two'),
                                $rb_portfolio_two_about_me_content_title
                                );
                        }
                        else {
                            esc_html_e('RB Portfolio Two','rb-portfolio-two');
                        }
                        ?>
                        </h3>
                        
                        <h6>
                        <?php
                        $rb_portfolio_two_about_me_content_sub_title = get_post_meta(get_the_ID(), 'rb_portfolio_two_about_me_content_sub_title', true);
                        if( isset ($rb_portfolio_two_about_me_content_sub_title) && !empty ($rb_portfolio_two_about_me_content_sub_title) ){
                            printf(
                                /* translators: %s: About Me Content Sub Title */
                                __('%s','rb-portfolio-two'),
                                $rb_portfolio_two_about_me_content_sub_title
                                );
                        }
                        else {
                            esc_html_e('I am a Full-Stack Web Developer','rb-portfolio-two');
                        }
                        ?>
                        </h6>

                    </div>
                    <!--===== About Me Section Title Area End Here =====-->
                    
                    <!--===== About Me Section Description Area Strat Here =====-->
                    <div class="about-me-description">
                        <?php
                        $rb_portfolio_two_about_me_content_description = get_post_meta(get_the_ID(), 'rb_portfolio_two_about_me_content_description', true);
                        if( isset ($rb_portfolio_two_about_me_content_description) && !empty ($rb_portfolio_two_about_me_content_description) ){
                            printf(
                                /* translators: %s: About Me Content Description */
                                __('%s','rb-portfolio-two'),
                                $rb_portfolio_two_about_me_content_description
                                );
                        }
                        else { ?>

                        <p>
                            <?php
                            esc_html_e("My name is RB Portfolio Two. I am a freelancer based in UK and I have been building noteworthy websites for years. For this time i've done all types of projects.","rb-portfolio-two"); ?>
                        </p>

                        <p>
                            <?php
                            esc_html_e("I help convert a vision and an idea into meaningful and useful products. Having a sharp eye for product evolution helps me prioritize tasks, iterate fast and deliver faster. If you're interested in working with me, don't hesitate to hire me.","rb-portfolio-two"); ?>
                        </p>

                        <?php } ?>

                    </div>
                    <!--===== About Me Section Description Area End Here =====-->
                    
                    <!--===== About Me Section Description Area Strat Here =====-->
                    <div class="about-me-separator"></div>
                    <!--===== About Me Section Description Area End Here =====-->
                    
                    <!--===== About Me Section Details Area Strat Here =====-->
                    <div class="about-me-details">
                        <ul>

                            <?php
                            $rb_portfolio_two_about_me_content_details = get_post_meta(get_the_ID(), 'rb_portfolio_two_about_me_content_details', true);
                            if( isset ($rb_portfolio_two_about_me_content_details) && !empty ($rb_portfolio_two_about_me_content_details) ): 
                                
                            foreach($rb_portfolio_two_about_me_content_details as $rb_portfolio_two_about_me_content_details_single):
                            ?>
                            <li>
                                <span class="user-icon">

                                <i class="<?php
                                $rb_portfolio_two_about_me_content_details_single_icon = $rb_portfolio_two_about_me_content_details_single['rb_portfolio_two_about_me_content_details_icon'];
                                if( isset ($rb_portfolio_two_about_me_content_details_single_icon) && !empty ($rb_portfolio_two_about_me_content_details_single_icon) ){
                                    echo esc_attr($rb_portfolio_two_about_me_content_details_single_icon);
                                }
                                else {
                                    echo esc_attr('fas fa-user');
                                }
                                ?>">
                                </i>

                                </span>

                                <span class="user-title rb-portfolio-two-strong-text rb-portfolio-two-theme-color">

                                <?php
                                $rb_portfolio_two_about_me_content_details_single_title = $rb_portfolio_two_about_me_content_details_single['rb_portfolio_two_about_me_content_details_strong_text'];
                                if( isset ($rb_portfolio_two_about_me_content_details_single_title) && !empty ($rb_portfolio_two_about_me_content_details_single_title) ){
                                    printf(
                                        /* translators: %s: About Me Content Details Title */
                                        __('%s','rb-portfolio-two'),
                                        $rb_portfolio_two_about_me_content_details_single_title
                                        );
                                }
                                else {
                                    esc_html_e('Name','rb-portfolio-two');
                                }
                                ?>
                                </span>

                                <span><?php esc_html_e(':','rb-portfolio-two'); ?></span>

                                <span class="user-details">
                                <?php
                                $rb_portfolio_two_about_me_content_details_single_text = $rb_portfolio_two_about_me_content_details_single['rb_portfolio_two_about_me_content_details_normal_text'];
                                if( isset ($rb_portfolio_two_about_me_content_details_single_text) && !empty ($rb_portfolio_two_about_me_content_details_single_text) ){
                                    printf(
                                        /* translators: %s: About Me Content Details Text */
                                        __('%s','rb-portfolio-two'),
                                        $rb_portfolio_two_about_me_content_details_single_text
                                        );
                                }
                                else {
                                    esc_html_e('RB Portfolio Two','rb-portfolio-two');
                                }
                                ?>
                                </span>
                            </li>

                            <?php endforeach; else: ?>
                            <li>
                                <span class="user-icon"><i class="fas fa-user"></i></span>
                                <span class="user-title rb-portfolio-two-strong-text rb-portfolio-two-theme-color">
                                    <?php esc_html_e("Name","rb-portfolio-two"); ?>
                                </span>
                                <span><?php esc_html_e(":","rb-portfolio-two"); ?></span>
                                <span class="user-details">
                                <?php esc_html_e("RB Portfolio Two","rb-portfolio-two"); ?></span>
                            </li>

                            <li>
                                <span class="user-icon"><i class="fas fa-magic"></i></span>
                                <span class="user-title rb-portfolio-two-strong-text rb-portfolio-two-theme-color"><?php esc_html_e("Date of Birth","rb-portfolio-two"); ?></span>
                                <span><?php esc_html_e(":","rb-portfolio-two"); ?></span>
                                <span class="user-details"><?php esc_html_e("05 November 1994","rb-portfolio-two"); ?></span>
                            </li>

                            <li>
                                <span class="user-icon"><i class="fas fa-phone-alt"></i></span>
                                <span class="user-title rb-portfolio-two-strong-text rb-portfolio-two-theme-color"><?php esc_html_e("Phone","rb-portfolio-two"); ?></span>
                                <span><?php esc_html_e(":","rb-portfolio-two"); ?></span>
                                <span class="user-details"><?php esc_html_e("+44 1632 967704, +20 0129 147 2249","rb-portfolio-two"); ?></span>
                            </li>

                            <li>
                                <span class="user-icon"><i class="fas fa-envelope"></i></span>
                                <span class="user-title rb-portfolio-two-strong-text rb-portfolio-two-theme-color"><?php esc_html_e("E-mail","rb-portfolio-two"); ?></span>
                                <span><?php esc_html_e(":","rb-portfolio-two"); ?></span>
                                <span class="user-details"><?php esc_html_e("support@website.com, smith@example.com","rb-portfolio-two"); ?></span>
                            </li>

                            <li>
                                <span class="user-icon"><i class="fas fa-map-marker-alt"></i></span>
                                <span class="user-title rb-portfolio-two-strong-text rb-portfolio-two-theme-color"><?php esc_html_e("Address","rb-portfolio-two"); ?></span>
                                <span><?php esc_html_e(":","rb-portfolio-two"); ?></span>
                                <span class="user-details"><?php esc_html_e("4612 Los Angeles CA, United State.","rb-portfolio-two"); ?></span>
                            </li>

                            <?php endif; ?>
                        </ul>
                    </div>
                    <!--===== About Me Section Details Area End Here =====-->
                    
                    <!--===== About Me Section Bottons Area Strat Here =====-->
                    <div class="about-me-btns">
                        
                        <?php
                        $rb_portfolio_two_about_me_content_buttons = get_post_meta(get_the_ID(), 'rb_portfolio_two_about_me_content_buttons', true);
                        if( isset ($rb_portfolio_two_about_me_content_buttons) && !empty ($rb_portfolio_two_about_me_content_buttons) ): 
                            
                        foreach($rb_portfolio_two_about_me_content_buttons as $rb_portfolio_two_about_me_content_buttons_single):
                        ?>

                        <div class="btn btn-download-cv">
                            <a href="<?php
                                $rb_portfolio_two_about_me_content_buttons_single_url = $rb_portfolio_two_about_me_content_buttons_single['rb_portfolio_two_about_me_content_button_url'];
                                if( isset ($rb_portfolio_two_about_me_content_buttons_single_url) && !empty ($rb_portfolio_two_about_me_content_buttons_single_url) ){
                                    echo esc_url($rb_portfolio_two_about_me_content_buttons_single_url);
                                }
                                else {
                                    echo esc_url('#');
                                }
                                ?>">
                                <?php
                                $rb_portfolio_two_about_me_content_buttons_single_text = $rb_portfolio_two_about_me_content_buttons_single['rb_portfolio_two_about_me_content_button_text'];
                                if( isset ($rb_portfolio_two_about_me_content_buttons_single_text) && !empty ($rb_portfolio_two_about_me_content_buttons_single_text) ){
                                    printf(
                                        /* translators: %s: About Me Button Text */
                                        __('%s','rb-portfolio-two'),
                                        $rb_portfolio_two_about_me_content_buttons_single_text
                                        );
                                }
                                else {
                                    esc_html_e('Download CV','rb-portfolio-two');
                                }
                                ?>
                                </a>
                        </div>

                        <?php endforeach; else: ?>
                            
                        <div class="btn btn-download-cv">
                            <a href="<?php echo esc_url('#'); ?>"><?php esc_html_e('Download CV','rb-portfolio-two'); ?></a>
                        </div>
                        <div class="btn btn-contact-me">
                            <a href="<?php echo esc_url('#'); ?>"><?php esc_html_e('Contact Me','rb-portfolio-two'); ?></a>
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