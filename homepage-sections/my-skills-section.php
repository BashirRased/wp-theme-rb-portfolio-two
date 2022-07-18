<!--================================= 
===== My Skills Area Strat Here =====
==================================-->
<section class="rbp-two-my-skills rbp-two-scroll-menu" id="rbp-two-my-skills">

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
                        $rbp_two_my_skills_title_theme_color = get_post_meta(get_the_ID(), 'rbp_two_my_skills_title_theme_color', true);
                        if( isset ($rbp_two_my_skills_title_theme_color) && !empty ($rbp_two_my_skills_title_theme_color) ){
                            printf(
                                /* translators: %s: My Skills Section Title Theme Color */
                                __('%s','rbp-two'),
                                $rbp_two_my_skills_title_theme_color
                                );
                        }
                        else {
                            esc_html_e('My','rbp-two');
                        }
                        ?>
                        </span>

                        <?php
                        $rbp_two_my_skills_title_black = get_post_meta(get_the_ID(), 'rbp_two_my_skills_title_black', true);
                        if( isset ($rbp_two_my_skills_title_black)  && !empty ($rbp_two_my_skills_title_black) ){
                            printf(
                                /* translators: %s: My Skills Section Title Black */
                                __('%s','rbp-two'),
                                $rbp_two_my_skills_title_black
                                );
                        }
                        else {
                            esc_html_e('Skills','rbp-two');
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
                <div class="rbp-two-content-title">
                    <h3>
                        <?php
                        $rbp_two_my_design_skills_title = get_post_meta(get_the_ID(), 'rbp_two_my_design_skills_title', true);
                        if( isset ($rbp_two_my_design_skills_title) && !empty ($rbp_two_my_design_skills_title) ){
                            printf(
                                /* translators: %s: My Design Section Title */
                                __('%s','rbp-two'),
                                $rbp_two_my_design_skills_title
                                );
                        }
                        else {
                            esc_html_e('Design Skills','rbp-two');
                        }
                        ?>
                    </h3>
                </div>

                <?php
                $rbp_two_my_design_skill_items = get_post_meta(get_the_ID(), 'rbp_two_my_design_skill_items', true);
                if( isset ($rbp_two_my_design_skill_items) && !empty ($rbp_two_my_design_skill_items) ): 
                    
                foreach($rbp_two_my_design_skill_items as $rbp_two_my_design_skill_items_single):
                ?>
                
                <!--===== 01. Design Skills Single Item Strat Here =====-->
                <div class="rbp-two-skill-item">

                    <div class="rbp-two-skill-name">
                    <?php
                    $rbp_two_my_design_skill_items_single_title = $rbp_two_my_design_skill_items_single['rbp_two_my_design_skill_item_text'];
                    if( isset ($rbp_two_my_design_skill_items_single_title) && !empty ($rbp_two_my_design_skill_items_single_title) ){
                        printf(
                            /* translators: %s: My Skills Development Item Skill Title */
                            __('%s','rbp-two'),
                            $rbp_two_my_design_skill_items_single_title
                        );
                    }
                    else {
                        esc_html_e('Abode Illustrator','rbp-two');
                    }
                    ?>
                    </div>

                    <div class="rbp-two-skill-bar" data-percent="<?php
                                $rbp_two_my_design_skill_items_single_percent = $rbp_two_my_design_skill_items_single['rbp_two_my_design_skill_item_percent'];
                                if( isset ($rbp_two_my_design_skill_items_single_percent) && !empty ($rbp_two_my_design_skill_items_single_percent) ){
                                    echo esc_attr($rbp_two_my_design_skill_items_single_percent."%");
                                }
                                else {
                                    echo esc_attr('90%');
                                }
                                ?>">
                        <div class="rbp-two-skill-animation">
                            <div class="rbp-two-skill-percentage">
                            <?php
                                $rbp_two_my_design_skill_items_single_percent = $rbp_two_my_design_skill_items_single['rbp_two_my_design_skill_item_percent'];
                                if( isset ($rbp_two_my_design_skill_items_single_percent) && !empty ($rbp_two_my_design_skill_items_single_percent) ){
                                    printf(
                                        /* translators: %s: My Skills Design Item Skill Percent */
                                        __('%s','rbp-two'),
                                        $rbp_two_my_design_skill_items_single_percent."%"
                                        );
                                }
                                else {
                                    esc_html_e('90%','rbp-two');
                                }
                            ?>
                            </div>
                        </div>			
                    </div>
                </div>
                <!--===== 01. Design Skills Single Item End Here =====-->

                <?php endforeach; else: ?>
                <!--===== 01. Design Skills Single Item Strat Here =====-->
                <div class="rbp-two-skill-item">
                    <div class="rbp-two-skill-name"><?php esc_html_e('Abode Illustrator', 'rbp-two'); ?></div>
                    <div class="rbp-two-skill-bar" data-percent="90%">
                        <div class="rbp-two-skill-animation">
                            <div class="rbp-two-skill-percentage"><?php esc_html_e('90%', 'rbp-two'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 01. Design Skills Single Item End Here =====-->
                
                <!--===== 02. Design Skills Single Item Strat Here =====-->
                <div class="rbp-two-skill-item">
                    <div class="rbp-two-skill-name"><?php esc_html_e('Abode Photoshop', 'rbp-two'); ?></div>
                    <div class="rbp-two-skill-bar" data-percent="80%">
                        <div class="rbp-two-skill-animation">
                            <div class="rbp-two-skill-percentage"><?php esc_html_e('80%', 'rbp-two'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 02. Design Skills Single Item End Here =====-->
                
                <!--===== 03. Design Skills Single Item Strat Here =====-->
                <div class="rbp-two-skill-item">
                    <div class="rbp-two-skill-name"><?php esc_html_e('HTML', 'rbp-two'); ?></div>
                    <div class="rbp-two-skill-bar" data-percent="85%">
                        <div class="rbp-two-skill-animation">
                            <div class="rbp-two-skill-percentage"><?php esc_html_e('85%', 'rbp-two'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 03. Design Skills Single Item End Here =====-->
                
                <!--===== 04. Design Skills Single Item Strat Here =====-->
                <div class="rbp-two-skill-item">
                    <div class="rbp-two-skill-name"><?php esc_html_e('CSS', 'rbp-two'); ?></div>
                    <div class="rbp-two-skill-bar" data-percent="80%">
                        <div class="rbp-two-skill-animation">
                            <div class="rbp-two-skill-percentage"><?php esc_html_e('80%', 'rbp-two'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 04. Design Skills Single Item End Here =====-->
                
                <!--===== 05. Design Skills Single Item Strat Here =====-->
                <div class="rbp-two-skill-item">
                    <div class="rbp-two-skill-name"><?php esc_html_e('JavaScript', 'rbp-two'); ?></div>
                    <div class="rbp-two-skill-bar" data-percent="75%">
                        <div class="rbp-two-skill-animation">
                            <div class="rbp-two-skill-percentage"><?php esc_html_e('75%', 'rbp-two'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 05. Design Skills Single Item End Here =====-->

                <?php endif; ?>
                
            </div>
            <!--===== Design Skills End Here =====-->
            
            <!--===== Development Skills Strat Here =====-->
            <div class="col-lg-6">
                <div class="rbp-two-content-title">
                    <h3>
                    <?php
                        $rbp_two_my_development_skills_title = get_post_meta(get_the_ID(), 'rbp_two_my_development_skills_title', true);
                        if( isset ($rbp_two_my_development_skills_title) && !empty ($rbp_two_my_development_skills_title) ){
                            printf(
                                /* translators: %s: My Design Section Title */
                                __('%s','rbp-two'),
                                $rbp_two_my_development_skills_title
                                );
                        }
                        else {
                            esc_html_e('Development Skills','rbp-two');
                        }
                    ?>
                    </h3>
                </div>
                
                <?php
                $rbp_two_my_development_skill_items = get_post_meta(get_the_ID(), 'rbp_two_my_development_skill_items', true);
                if( isset ($rbp_two_my_development_skill_items) && !empty ($rbp_two_my_development_skill_items) ): 
                    
                foreach($rbp_two_my_development_skill_items as $rbp_two_my_development_skill_items_single):
                ?>

                <!--===== 01. Development Skills Single Item Strat Here =====-->
                <div class="rbp-two-skill-item">

                    <div class="rbp-two-skill-name">
                    <?php
                    $rbp_two_my_development_skill_items_single_title = $rbp_two_my_development_skill_items_single['rbp_two_my_development_skill_item_text'];
                    if( isset ($rbp_two_my_development_skill_items_single_title) && !empty ($rbp_two_my_development_skill_items_single_title) ){
                        printf(
                            /* translators: %s: My Skills Development Item Skill Title */
                            __('%s','rbp-two'),
                            $rbp_two_my_development_skill_items_single_title
                        );
                    }
                    else {
                        esc_html_e('PHP','rbp-two');
                    }
                    ?>
                    </div>

                    <div class="rbp-two-skill-bar" data-percent="<?php
                                $rbp_two_my_development_skill_items_single_percent = $rbp_two_my_development_skill_items_single['rbp_two_my_development_skill_item_percent'];
                                if( isset ($rbp_two_my_development_skill_items_single_percent) && !empty ($rbp_two_my_development_skill_items_single_percent) ){
                                    echo esc_attr($rbp_two_my_development_skill_items_single_percent."%");
                                }
                                else {
                                    echo esc_attr('80%');
                                }
                                ?>">
                        <div class="rbp-two-skill-animation">
                            <div class="rbp-two-skill-percentage"><?php
                                $rbp_two_my_development_skill_items_single_percent = $rbp_two_my_development_skill_items_single['rbp_two_my_development_skill_item_percent'];
                                if( isset ($rbp_two_my_development_skill_items_single_percent) && !empty ($rbp_two_my_development_skill_items_single_percent) ){
                                    printf(
                                        /* translators: %s: My Skills Developement Item Skill Percent */
                                        __('%s','rbp-two'),
                                        $rbp_two_my_development_skill_items_single_percent."%"
                                        );
                                }
                                else {
                                    esc_html_e('80%','rbp-two');
                                }
                            ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 01. Development Skills Single Item End Here =====-->

                <?php endforeach; else: ?>
                <!--===== 01. Development Skills Single Item Strat Here =====-->
                <div class="rbp-two-skill-item">
                    <div class="rbp-two-skill-name"><?php esc_html_e('PHP', 'rbp-two'); ?></div>
                    <div class="rbp-two-skill-bar" data-percent="80%">
                        <div class="rbp-two-skill-animation">
                            <div class="rbp-two-skill-percentage"><?php esc_html_e('80%', 'rbp-two'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 01. Development Skills Single Item End Here =====-->
                
                <!--===== 02. Development Skills Single Item Strat Here =====-->
                <div class="rbp-two-skill-item">
                    <div class="rbp-two-skill-name"><?php esc_html_e('MySQL', 'rbp-two'); ?></div>
                    <div class="rbp-two-skill-bar" data-percent="70%">
                        <div class="rbp-two-skill-animation">
                            <div class="rbp-two-skill-percentage"><?php esc_html_e('70%', 'rbp-two'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 02. Development Skills Single Item End Here =====-->
                
                <!--===== 03. Development Skills Single Item Strat Here =====-->
                <div class="rbp-two-skill-item">
                    <div class="rbp-two-skill-name"><?php esc_html_e('WordPress', 'rbp-two'); ?></div>
                    <div class="rbp-two-skill-bar" data-percent="90%">
                        <div class="rbp-two-skill-animation">
                            <div class="rbp-two-skill-percentage"><?php esc_html_e('90%', 'rbp-two'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 03. Development Skills Single Item End Here =====-->
                
                <!--===== 04. Development Skills Single Item Strat Here =====-->
                <div class="rbp-two-skill-item">
                    <div class="rbp-two-skill-name"><?php esc_html_e('Laravel', 'rbp-two'); ?></div>
                    <div class="rbp-two-skill-bar" data-percent="70%">
                        <div class="rbp-two-skill-animation">
                            <div class="rbp-two-skill-percentage"><?php esc_html_e('70%', 'rbp-two'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 04. Development Skills Single Item End Here =====-->
                
                <!--===== 05. Development Skills Single Item Strat Here =====-->
                <div class="rbp-two-skill-item">
                    <div class="rbp-two-skill-name"><?php esc_html_e('Apps Development', 'rbp-two'); ?></div>
                    <div class="rbp-two-skill-bar" data-percent="65%">
                        <div class="rbp-two-skill-animation">
                            <div class="rbp-two-skill-percentage"><?php esc_html_e('65%', 'rbp-two'); ?></div>
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