<!--================================= 
===== My Skills Area Strat Here =====
==================================-->
<section class="jhon-smith-my-skills jhon-smith-scroll-menu" id="jhon-smith-my-skills">

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
                        $jhon_smith_my_skills_title_theme_color = get_post_meta(get_the_ID(), 'jhon_smith_my_skills_title_theme_color', true);
                        if( isset ($jhon_smith_my_skills_title_theme_color) && !empty ($jhon_smith_my_skills_title_theme_color) ){
                            printf(
                                /* translators: %s: My Skills Section Title Theme Color */
                                __('%s','jhon-smith'),
                                $jhon_smith_my_skills_title_theme_color
                                );
                        }
                        else {
                            esc_html_e('My','jhon-smith');
                        }
                        ?>
                        </span>

                        <?php
                        $jhon_smith_my_skills_title_black = get_post_meta(get_the_ID(), 'jhon_smith_my_skills_title_black', true);
                        if( isset ($jhon_smith_my_skills_title_black)  && !empty ($jhon_smith_my_skills_title_black) ){
                            printf(
                                /* translators: %s: My Skills Section Title Black */
                                __('%s','jhon-smith'),
                                $jhon_smith_my_skills_title_black
                                );
                        }
                        else {
                            esc_html_e('Skills','jhon-smith');
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
                <div class="jhon-smith-content-title">
                    <h3>
                        <?php
                        $jhon_smith_my_design_skills_title = get_post_meta(get_the_ID(), 'jhon_smith_my_design_skills_title', true);
                        if( isset ($jhon_smith_my_design_skills_title) && !empty ($jhon_smith_my_design_skills_title) ){
                            printf(
                                /* translators: %s: My Design Section Title */
                                __('%s','jhon-smith'),
                                $jhon_smith_my_design_skills_title
                                );
                        }
                        else {
                            esc_html_e('Design Skills','jhon-smith');
                        }
                        ?>
                    </h3>
                </div>

                <?php
                $jhon_smith_my_design_skill_items = get_post_meta(get_the_ID(), 'jhon_smith_my_design_skill_items', true);
                if( isset ($jhon_smith_my_design_skill_items) && !empty ($jhon_smith_my_design_skill_items) ): 
                    
                foreach($jhon_smith_my_design_skill_items as $jhon_smith_my_design_skill_items_single):
                ?>
                
                <!--===== 01. Design Skills Single Item Strat Here =====-->
                <div class="jhon-smith-skill-item">

                    <div class="jhon-smith-skill-name">
                    <?php
                    $jhon_smith_my_design_skill_items_single_title = $jhon_smith_my_design_skill_items_single['jhon_smith_my_design_skill_item_text'];
                    if( isset ($jhon_smith_my_design_skill_items_single_title) && !empty ($jhon_smith_my_design_skill_items_single_title) ){
                        printf(
                            /* translators: %s: My Skills Development Item Skill Title */
                            __('%s','jhon-smith'),
                            $jhon_smith_my_design_skill_items_single_title
                        );
                    }
                    else {
                        esc_html_e('Abode Illustrator','jhon-smith');
                    }
                    ?>
                    </div>

                    <div class="jhon-smith-skill-bar" data-percent="<?php
                                $jhon_smith_my_design_skill_items_single_percent = $jhon_smith_my_design_skill_items_single['jhon_smith_my_design_skill_item_percent'];
                                if( isset ($jhon_smith_my_design_skill_items_single_percent) && !empty ($jhon_smith_my_design_skill_items_single_percent) ){
                                    echo esc_attr($jhon_smith_my_design_skill_items_single_percent."%");
                                }
                                else {
                                    echo esc_attr('90%');
                                }
                                ?>">
                        <div class="jhon-smith-skill-animation">
                            <div class="jhon-smith-skill-percentage">
                            <?php
                                $jhon_smith_my_design_skill_items_single_percent = $jhon_smith_my_design_skill_items_single['jhon_smith_my_design_skill_item_percent'];
                                if( isset ($jhon_smith_my_design_skill_items_single_percent) && !empty ($jhon_smith_my_design_skill_items_single_percent) ){
                                    printf(
                                        /* translators: %s: My Skills Design Item Skill Percent */
                                        __('%s','jhon-smith'),
                                        $jhon_smith_my_design_skill_items_single_percent."%"
                                        );
                                }
                                else {
                                    esc_html_e('90%','jhon-smith');
                                }
                            ?>
                            </div>
                        </div>			
                    </div>
                </div>
                <!--===== 01. Design Skills Single Item End Here =====-->

                <?php endforeach; else: ?>
                <!--===== 01. Design Skills Single Item Strat Here =====-->
                <div class="jhon-smith-skill-item">
                    <div class="jhon-smith-skill-name"><?php esc_html_e('Abode Illustrator', 'jhon-smith'); ?></div>
                    <div class="jhon-smith-skill-bar" data-percent="90%">
                        <div class="jhon-smith-skill-animation">
                            <div class="jhon-smith-skill-percentage"><?php esc_html_e('90%', 'jhon-smith'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 01. Design Skills Single Item End Here =====-->
                
                <!--===== 02. Design Skills Single Item Strat Here =====-->
                <div class="jhon-smith-skill-item">
                    <div class="jhon-smith-skill-name"><?php esc_html_e('Abode Photoshop', 'jhon-smith'); ?></div>
                    <div class="jhon-smith-skill-bar" data-percent="80%">
                        <div class="jhon-smith-skill-animation">
                            <div class="jhon-smith-skill-percentage"><?php esc_html_e('80%', 'jhon-smith'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 02. Design Skills Single Item End Here =====-->
                
                <!--===== 03. Design Skills Single Item Strat Here =====-->
                <div class="jhon-smith-skill-item">
                    <div class="jhon-smith-skill-name"><?php esc_html_e('HTML', 'jhon-smith'); ?></div>
                    <div class="jhon-smith-skill-bar" data-percent="85%">
                        <div class="jhon-smith-skill-animation">
                            <div class="jhon-smith-skill-percentage"><?php esc_html_e('85%', 'jhon-smith'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 03. Design Skills Single Item End Here =====-->
                
                <!--===== 04. Design Skills Single Item Strat Here =====-->
                <div class="jhon-smith-skill-item">
                    <div class="jhon-smith-skill-name"><?php esc_html_e('CSS', 'jhon-smith'); ?></div>
                    <div class="jhon-smith-skill-bar" data-percent="80%">
                        <div class="jhon-smith-skill-animation">
                            <div class="jhon-smith-skill-percentage"><?php esc_html_e('80%', 'jhon-smith'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 04. Design Skills Single Item End Here =====-->
                
                <!--===== 05. Design Skills Single Item Strat Here =====-->
                <div class="jhon-smith-skill-item">
                    <div class="jhon-smith-skill-name"><?php esc_html_e('JavaScript', 'jhon-smith'); ?></div>
                    <div class="jhon-smith-skill-bar" data-percent="75%">
                        <div class="jhon-smith-skill-animation">
                            <div class="jhon-smith-skill-percentage"><?php esc_html_e('75%', 'jhon-smith'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 05. Design Skills Single Item End Here =====-->

                <?php endif; ?>
                
            </div>
            <!--===== Design Skills End Here =====-->
            
            <!--===== Development Skills Strat Here =====-->
            <div class="col-lg-6">
                <div class="jhon-smith-content-title">
                    <h3>
                    <?php
                        $jhon_smith_my_development_skills_title = get_post_meta(get_the_ID(), 'jhon_smith_my_development_skills_title', true);
                        if( isset ($jhon_smith_my_development_skills_title) && !empty ($jhon_smith_my_development_skills_title) ){
                            printf(
                                /* translators: %s: My Design Section Title */
                                __('%s','jhon-smith'),
                                $jhon_smith_my_development_skills_title
                                );
                        }
                        else {
                            esc_html_e('Development Skills','jhon-smith');
                        }
                    ?>
                    </h3>
                </div>
                
                <?php
                $jhon_smith_my_development_skill_items = get_post_meta(get_the_ID(), 'jhon_smith_my_development_skill_items', true);
                if( isset ($jhon_smith_my_development_skill_items) && !empty ($jhon_smith_my_development_skill_items) ): 
                    
                foreach($jhon_smith_my_development_skill_items as $jhon_smith_my_development_skill_items_single):
                ?>

                <!--===== 01. Development Skills Single Item Strat Here =====-->
                <div class="jhon-smith-skill-item">

                    <div class="jhon-smith-skill-name">
                    <?php
                    $jhon_smith_my_development_skill_items_single_title = $jhon_smith_my_development_skill_items_single['jhon_smith_my_development_skill_item_text'];
                    if( isset ($jhon_smith_my_development_skill_items_single_title) && !empty ($jhon_smith_my_development_skill_items_single_title) ){
                        printf(
                            /* translators: %s: My Skills Development Item Skill Title */
                            __('%s','jhon-smith'),
                            $jhon_smith_my_development_skill_items_single_title
                        );
                    }
                    else {
                        esc_html_e('PHP','jhon-smith');
                    }
                    ?>
                    </div>

                    <div class="jhon-smith-skill-bar" data-percent="<?php
                                $jhon_smith_my_development_skill_items_single_percent = $jhon_smith_my_development_skill_items_single['jhon_smith_my_development_skill_item_percent'];
                                if( isset ($jhon_smith_my_development_skill_items_single_percent) && !empty ($jhon_smith_my_development_skill_items_single_percent) ){
                                    echo esc_attr($jhon_smith_my_development_skill_items_single_percent."%");
                                }
                                else {
                                    echo esc_attr('80%');
                                }
                                ?>">
                        <div class="jhon-smith-skill-animation">
                            <div class="jhon-smith-skill-percentage"><?php
                                $jhon_smith_my_development_skill_items_single_percent = $jhon_smith_my_development_skill_items_single['jhon_smith_my_development_skill_item_percent'];
                                if( isset ($jhon_smith_my_development_skill_items_single_percent) && !empty ($jhon_smith_my_development_skill_items_single_percent) ){
                                    printf(
                                        /* translators: %s: My Skills Developement Item Skill Percent */
                                        __('%s','jhon-smith'),
                                        $jhon_smith_my_development_skill_items_single_percent."%"
                                        );
                                }
                                else {
                                    esc_html_e('80%','jhon-smith');
                                }
                            ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 01. Development Skills Single Item End Here =====-->

                <?php endforeach; else: ?>
                <!--===== 01. Development Skills Single Item Strat Here =====-->
                <div class="jhon-smith-skill-item">
                    <div class="jhon-smith-skill-name"><?php esc_html_e('PHP', 'jhon-smith'); ?></div>
                    <div class="jhon-smith-skill-bar" data-percent="80%">
                        <div class="jhon-smith-skill-animation">
                            <div class="jhon-smith-skill-percentage"><?php esc_html_e('80%', 'jhon-smith'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 01. Development Skills Single Item End Here =====-->
                
                <!--===== 02. Development Skills Single Item Strat Here =====-->
                <div class="jhon-smith-skill-item">
                    <div class="jhon-smith-skill-name"><?php esc_html_e('MySQL', 'jhon-smith'); ?></div>
                    <div class="jhon-smith-skill-bar" data-percent="70%">
                        <div class="jhon-smith-skill-animation">
                            <div class="jhon-smith-skill-percentage"><?php esc_html_e('70%', 'jhon-smith'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 02. Development Skills Single Item End Here =====-->
                
                <!--===== 03. Development Skills Single Item Strat Here =====-->
                <div class="jhon-smith-skill-item">
                    <div class="jhon-smith-skill-name"><?php esc_html_e('WordPress', 'jhon-smith'); ?></div>
                    <div class="jhon-smith-skill-bar" data-percent="90%">
                        <div class="jhon-smith-skill-animation">
                            <div class="jhon-smith-skill-percentage"><?php esc_html_e('90%', 'jhon-smith'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 03. Development Skills Single Item End Here =====-->
                
                <!--===== 04. Development Skills Single Item Strat Here =====-->
                <div class="jhon-smith-skill-item">
                    <div class="jhon-smith-skill-name"><?php esc_html_e('Laravel', 'jhon-smith'); ?></div>
                    <div class="jhon-smith-skill-bar" data-percent="70%">
                        <div class="jhon-smith-skill-animation">
                            <div class="jhon-smith-skill-percentage"><?php esc_html_e('70%', 'jhon-smith'); ?></div>
                        </div>			
                    </div>
                </div>
                <!--===== 04. Development Skills Single Item End Here =====-->
                
                <!--===== 05. Development Skills Single Item Strat Here =====-->
                <div class="jhon-smith-skill-item">
                    <div class="jhon-smith-skill-name"><?php esc_html_e('Apps Development', 'jhon-smith'); ?></div>
                    <div class="jhon-smith-skill-bar" data-percent="65%">
                        <div class="jhon-smith-skill-animation">
                            <div class="jhon-smith-skill-percentage"><?php esc_html_e('65%', 'jhon-smith'); ?></div>
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