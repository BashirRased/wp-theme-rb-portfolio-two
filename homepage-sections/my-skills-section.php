<!--================================= 
===== My Skills Area Strat Here =====
==================================-->
<section class="rb-portfolio-two-my-skills rb-portfolio-two-scroll-menu" id="rb-portfolio-two-my-skills">

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
                        $rb_portfolio_two_my_skills_title_theme_color = get_post_meta(get_the_ID(), 'rb_portfolio_two_my_skills_title_theme_color', true);
                        if( isset ($rb_portfolio_two_my_skills_title_theme_color) && !empty ($rb_portfolio_two_my_skills_title_theme_color) ){
                            printf(
                                /* translators: %s: My Skills Section Title Theme Color */
                                __('%s','rb-portfolio-two'),
                                $rb_portfolio_two_my_skills_title_theme_color
                                );
                        }
                        else {
                            esc_html_e('My','rb-portfolio-two');
                        }
                        ?>
                        </span>

                        <?php
                        $rb_portfolio_two_my_skills_title_black = get_post_meta(get_the_ID(), 'rb_portfolio_two_my_skills_title_black', true);
                        if( isset ($rb_portfolio_two_my_skills_title_black)  && !empty ($rb_portfolio_two_my_skills_title_black) ){
                            printf(
                                /* translators: %s: My Skills Section Title Black */
                                __('%s','rb-portfolio-two'),
                                $rb_portfolio_two_my_skills_title_black
                                );
                        }
                        else {
                            esc_html_e('Skills','rb-portfolio-two');
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
            
            <!--===== Design Skills Strat Here =====-->
            <div class="col-lg-6">
                <div class="rb-portfolio-two-content-title">
                    <h3>
                        <?php
                        $rb_portfolio_two_my_design_skills_title = get_post_meta(get_the_ID(), 'rb_portfolio_two_my_design_skills_title', true);
                        if( isset ($rb_portfolio_two_my_design_skills_title) && !empty ($rb_portfolio_two_my_design_skills_title) ){
                            printf(
                                /* translators: %s: My Design Section Title */
                                __('%s','rb-portfolio-two'),
                                $rb_portfolio_two_my_design_skills_title
                                );
                        }
                        else {
                            esc_html_e('Design Skills','rb-portfolio-two');
                        }
                        ?>
                    </h3>
                </div>

                <?php
                $rb_portfolio_two_my_design_skill_items = get_post_meta(get_the_ID(), 'rb_portfolio_two_my_design_skill_items', true);
                if( isset ($rb_portfolio_two_my_design_skill_items) && !empty ($rb_portfolio_two_my_design_skill_items) ): 
                    
                foreach($rb_portfolio_two_my_design_skill_items as $rb_portfolio_two_my_design_skill_items_single):
                ?>
                
                <!--===== 01. Design Skills Single Item Strat Here =====-->
                <div class="rb-portfolio-two-skill-item">

                    <div class="rb-portfolio-two-skill-name">
                    <?php
                    $rb_portfolio_two_my_design_skill_items_single_title = $rb_portfolio_two_my_design_skill_items_single['rb_portfolio_two_my_design_skill_item_text'];
                    if( isset ($rb_portfolio_two_my_design_skill_items_single_title) && !empty ($rb_portfolio_two_my_design_skill_items_single_title) ){
                        printf(
                            /* translators: %s: My Skills Development Item Skill Title */
                            __('%s','rb-portfolio-two'),
                            $rb_portfolio_two_my_design_skill_items_single_title
                        );
                    }
                    else {
                        esc_html_e('Abode Illustrator','rb-portfolio-two');
                    }
                    ?>
                    </div>

                    <div class="rb-portfolio-two-skill-bar" data-percent="<?php
                                $rb_portfolio_two_my_design_skill_items_single_percent = $rb_portfolio_two_my_design_skill_items_single['rb_portfolio_two_my_design_skill_item_percent'];
                                if( isset ($rb_portfolio_two_my_design_skill_items_single_percent) && !empty ($rb_portfolio_two_my_design_skill_items_single_percent) ){
                                    echo esc_attr($rb_portfolio_two_my_design_skill_items_single_percent."%");
                                }
                                else {
                                    echo esc_attr('90%');
                                }
                                ?>">
                        <div class="rb-portfolio-two-skill-animation">
                            <div class="rb-portfolio-two-skill-percentage">
                            <?php
                                $rb_portfolio_two_my_design_skill_items_single_percent = $rb_portfolio_two_my_design_skill_items_single['rb_portfolio_two_my_design_skill_item_percent'];
                                if( isset ($rb_portfolio_two_my_design_skill_items_single_percent) && !empty ($rb_portfolio_two_my_design_skill_items_single_percent) ){
                                    printf(
                                        /* translators: %s: My Skills Design Item Skill Percent */
                                        __('%s','rb-portfolio-two'),
                                        $rb_portfolio_two_my_design_skill_items_single_percent."%"
                                        );
                                }
                                else {
                                    esc_html_e('90%','rb-portfolio-two');
                                }
                            ?>
                            </div>
                        </div>			
                    </div>
                </div>
                <!--===== 01. Design Skills Single Item End Here =====-->

                <?php endforeach; else: ?>
                <!--===== 01. Design Skills Single Item Strat Here =====-->
                <div class="rb-portfolio-two-skill-item">
                    <div class="rb-portfolio-two-skill-name"><?php esc_html_e('Abode Illustrator', 'rb-portfolio-two'); ?></div>
                    <div class="rb-portfolio-two-skill-bar" data-percent="90%">
                        <div class="rb-portfolio-two-skill-animation">
                            <div class="rb-portfolio-two-skill-percentage"><?php esc_html_e('90%', 'rb-portfolio-two'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 01. Design Skills Single Item End Here =====-->
                
                <!--===== 02. Design Skills Single Item Strat Here =====-->
                <div class="rb-portfolio-two-skill-item">
                    <div class="rb-portfolio-two-skill-name"><?php esc_html_e('Abode Photoshop', 'rb-portfolio-two'); ?></div>
                    <div class="rb-portfolio-two-skill-bar" data-percent="80%">
                        <div class="rb-portfolio-two-skill-animation">
                            <div class="rb-portfolio-two-skill-percentage"><?php esc_html_e('80%', 'rb-portfolio-two'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 02. Design Skills Single Item End Here =====-->
                
                <!--===== 03. Design Skills Single Item Strat Here =====-->
                <div class="rb-portfolio-two-skill-item">
                    <div class="rb-portfolio-two-skill-name"><?php esc_html_e('HTML', 'rb-portfolio-two'); ?></div>
                    <div class="rb-portfolio-two-skill-bar" data-percent="85%">
                        <div class="rb-portfolio-two-skill-animation">
                            <div class="rb-portfolio-two-skill-percentage"><?php esc_html_e('85%', 'rb-portfolio-two'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 03. Design Skills Single Item End Here =====-->
                
                <!--===== 04. Design Skills Single Item Strat Here =====-->
                <div class="rb-portfolio-two-skill-item">
                    <div class="rb-portfolio-two-skill-name"><?php esc_html_e('CSS', 'rb-portfolio-two'); ?></div>
                    <div class="rb-portfolio-two-skill-bar" data-percent="80%">
                        <div class="rb-portfolio-two-skill-animation">
                            <div class="rb-portfolio-two-skill-percentage"><?php esc_html_e('80%', 'rb-portfolio-two'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 04. Design Skills Single Item End Here =====-->
                
                <!--===== 05. Design Skills Single Item Strat Here =====-->
                <div class="rb-portfolio-two-skill-item">
                    <div class="rb-portfolio-two-skill-name"><?php esc_html_e('JavaScript', 'rb-portfolio-two'); ?></div>
                    <div class="rb-portfolio-two-skill-bar" data-percent="75%">
                        <div class="rb-portfolio-two-skill-animation">
                            <div class="rb-portfolio-two-skill-percentage"><?php esc_html_e('75%', 'rb-portfolio-two'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 05. Design Skills Single Item End Here =====-->

                <?php endif; ?>
                
            </div>
            <!--===== Design Skills End Here =====-->
            
            <!--===== Development Skills Strat Here =====-->
            <div class="col-lg-6">
                <div class="rb-portfolio-two-content-title">
                    <h3>
                    <?php
                        $rb_portfolio_two_my_development_skills_title = get_post_meta(get_the_ID(), 'rb_portfolio_two_my_development_skills_title', true);
                        if( isset ($rb_portfolio_two_my_development_skills_title) && !empty ($rb_portfolio_two_my_development_skills_title) ){
                            printf(
                                /* translators: %s: My Design Section Title */
                                __('%s','rb-portfolio-two'),
                                $rb_portfolio_two_my_development_skills_title
                                );
                        }
                        else {
                            esc_html_e('Development Skills','rb-portfolio-two');
                        }
                    ?>
                    </h3>
                </div>
                
                <?php
                $rb_portfolio_two_my_development_skill_items = get_post_meta(get_the_ID(), 'rb_portfolio_two_my_development_skill_items', true);
                if( isset ($rb_portfolio_two_my_development_skill_items) && !empty ($rb_portfolio_two_my_development_skill_items) ): 
                    
                foreach($rb_portfolio_two_my_development_skill_items as $rb_portfolio_two_my_development_skill_items_single):
                ?>

                <!--===== 01. Development Skills Single Item Strat Here =====-->
                <div class="rb-portfolio-two-skill-item">

                    <div class="rb-portfolio-two-skill-name">
                    <?php
                    $rb_portfolio_two_my_development_skill_items_single_title = $rb_portfolio_two_my_development_skill_items_single['rb_portfolio_two_my_development_skill_item_text'];
                    if( isset ($rb_portfolio_two_my_development_skill_items_single_title) && !empty ($rb_portfolio_two_my_development_skill_items_single_title) ){
                        printf(
                            /* translators: %s: My Skills Development Item Skill Title */
                            __('%s','rb-portfolio-two'),
                            $rb_portfolio_two_my_development_skill_items_single_title
                        );
                    }
                    else {
                        esc_html_e('PHP','rb-portfolio-two');
                    }
                    ?>
                    </div>

                    <div class="rb-portfolio-two-skill-bar" data-percent="<?php
                                $rb_portfolio_two_my_development_skill_items_single_percent = $rb_portfolio_two_my_development_skill_items_single['rb_portfolio_two_my_development_skill_item_percent'];
                                if( isset ($rb_portfolio_two_my_development_skill_items_single_percent) && !empty ($rb_portfolio_two_my_development_skill_items_single_percent) ){
                                    echo esc_attr($rb_portfolio_two_my_development_skill_items_single_percent."%");
                                }
                                else {
                                    echo esc_attr('80%');
                                }
                                ?>">
                        <div class="rb-portfolio-two-skill-animation">
                            <div class="rb-portfolio-two-skill-percentage"><?php
                                $rb_portfolio_two_my_development_skill_items_single_percent = $rb_portfolio_two_my_development_skill_items_single['rb_portfolio_two_my_development_skill_item_percent'];
                                if( isset ($rb_portfolio_two_my_development_skill_items_single_percent) && !empty ($rb_portfolio_two_my_development_skill_items_single_percent) ){
                                    printf(
                                        /* translators: %s: My Skills Developement Item Skill Percent */
                                        __('%s','rb-portfolio-two'),
                                        $rb_portfolio_two_my_development_skill_items_single_percent."%"
                                        );
                                }
                                else {
                                    esc_html_e('80%','rb-portfolio-two');
                                }
                            ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 01. Development Skills Single Item End Here =====-->

                <?php endforeach; else: ?>
                <!--===== 01. Development Skills Single Item Strat Here =====-->
                <div class="rb-portfolio-two-skill-item">
                    <div class="rb-portfolio-two-skill-name"><?php esc_html_e('PHP', 'rb-portfolio-two'); ?></div>
                    <div class="rb-portfolio-two-skill-bar" data-percent="80%">
                        <div class="rb-portfolio-two-skill-animation">
                            <div class="rb-portfolio-two-skill-percentage"><?php esc_html_e('80%', 'rb-portfolio-two'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 01. Development Skills Single Item End Here =====-->
                
                <!--===== 02. Development Skills Single Item Strat Here =====-->
                <div class="rb-portfolio-two-skill-item">
                    <div class="rb-portfolio-two-skill-name"><?php esc_html_e('MySQL', 'rb-portfolio-two'); ?></div>
                    <div class="rb-portfolio-two-skill-bar" data-percent="70%">
                        <div class="rb-portfolio-two-skill-animation">
                            <div class="rb-portfolio-two-skill-percentage"><?php esc_html_e('70%', 'rb-portfolio-two'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 02. Development Skills Single Item End Here =====-->
                
                <!--===== 03. Development Skills Single Item Strat Here =====-->
                <div class="rb-portfolio-two-skill-item">
                    <div class="rb-portfolio-two-skill-name"><?php esc_html_e('WordPress', 'rb-portfolio-two'); ?></div>
                    <div class="rb-portfolio-two-skill-bar" data-percent="90%">
                        <div class="rb-portfolio-two-skill-animation">
                            <div class="rb-portfolio-two-skill-percentage"><?php esc_html_e('90%', 'rb-portfolio-two'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 03. Development Skills Single Item End Here =====-->
                
                <!--===== 04. Development Skills Single Item Strat Here =====-->
                <div class="rb-portfolio-two-skill-item">
                    <div class="rb-portfolio-two-skill-name"><?php esc_html_e('Laravel', 'rb-portfolio-two'); ?></div>
                    <div class="rb-portfolio-two-skill-bar" data-percent="70%">
                        <div class="rb-portfolio-two-skill-animation">
                            <div class="rb-portfolio-two-skill-percentage"><?php esc_html_e('70%', 'rb-portfolio-two'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 04. Development Skills Single Item End Here =====-->
                
                <!--===== 05. Development Skills Single Item Strat Here =====-->
                <div class="rb-portfolio-two-skill-item">
                    <div class="rb-portfolio-two-skill-name"><?php esc_html_e('Apps Development', 'rb-portfolio-two'); ?></div>
                    <div class="rb-portfolio-two-skill-bar" data-percent="65%">
                        <div class="rb-portfolio-two-skill-animation">
                            <div class="rb-portfolio-two-skill-percentage"><?php esc_html_e('65%', 'rb-portfolio-two'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 05. Development Skills Single Item End Here =====-->

                <?php endif; ?>
                
            </div>
            <!--===== Development Skills End Here =====-->
            
        </div><!-- row end -->
    </div><!-- container end -->
    <!--================================ 
    ===== Section Content End Here =====
    =================================-->

</section>
<!--=============================== 
===== My Skills Area End Here =====
================================-->