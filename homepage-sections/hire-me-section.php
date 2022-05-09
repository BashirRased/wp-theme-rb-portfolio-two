<?php
// Hire Me Section Background Image
$jhon_smith_hire_me_image = get_post_meta(get_the_ID(), 'jhon_smith_hire_me_image', true);
?>

<!--=============================== 
===== Hire Me Area Strat Here =====
================================-->
<section class="jhon-smith-hire-me" style="background-image: url(<?php echo esc_url($jhon_smith_hire_me_image); ?>);">
    
    <!--================================== 
    ===== Section Content Strat Here =====
    ===================================-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="jhon-smith-hire-me-content">
                    <h2>
                    <?php
                        $jhon_smith_hire_me_title = get_post_meta(get_the_ID(), 'jhon_smith_hire_me_title', true);
                        if($jhon_smith_hire_me_title){
                            printf(
                                /* translators: %s: My Skills Section Title Theme Color */
                                __('%s','jhon-smith'),
                                $jhon_smith_hire_me_title
                                );
                        }
                        else {
                            esc_html_e("Let's Work Together!","jhon-smith");
                        }
                    ?>
                    </h2>
                    <p>
                    <?php
                        $jhon_smith_hire_me_sub_title = get_post_meta(get_the_ID(), 'jhon_smith_hire_me_sub_title', true);
                        if($jhon_smith_hire_me_sub_title){
                            printf(
                                /* translators: %s: My Skills Section Title Theme Color */
                                __('%s','jhon-smith'),
                                $jhon_smith_hire_me_sub_title
                                );
                        }
                        else {
                            esc_html_e('I am available for freelance projects. Hire me and get your project done.','jhon-smith');
                        }
                    ?>
                    </p>
                    <div class="jhon-smith-btn btn-hire-me">
                        <a href="<?php
                        $jhon_smith_hire_me_btn_url = get_post_meta(get_the_ID(), 'jhon_smith_hire_me_btn_url', true);
                        if($jhon_smith_hire_me_btn_url){
                            echo esc_url($jhon_smith_hire_me_btn_url);
                        }
                        else {
                            echo esc_url('#');
                        }
                        ?>">
                        <?php
                        $jhon_smith_hire_me_btn_text = get_post_meta(get_the_ID(), 'jhon_smith_hire_me_btn_text', true);
                        if($jhon_smith_hire_me_btn_text){
                            printf(
                                /* translators: %s: My Skills Section Title Theme Color */
                                __('%s','jhon-smith'),
                                $jhon_smith_hire_me_btn_text
                                );
                        }
                        else {
                            esc_html_e('hire me','jhon-smith');
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div><!-- container end -->
    <!--================================ 
    ===== Section Content End Here =====
    =================================-->
    
</section>
<!--============================= 
===== Hire Me Area End Here =====
==============================-->