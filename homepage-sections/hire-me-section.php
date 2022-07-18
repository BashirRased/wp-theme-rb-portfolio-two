<?php
// Hire Me Section Background Image
$rbp_two_hire_me_image = get_post_meta(get_the_ID(), 'rbp_two_hire_me_image', true);
?>

<!--=============================== 
===== Hire Me Area Strat Here =====
================================-->
<section class="rbp-two-hire-me" <?php if ( isset ($rbp_two_hire_me_image) && !empty ($rbp_two_hire_me_image)) : ?> style="background-image: url(<?php echo esc_url($rbp_two_hire_me_image); ?>);" <?php endif; ?> >
    
    <!--================================== 
    ===== Section Content Strat Here =====
    ===================================-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rbp-two-hire-me-content">
                    <h2>
                    <?php
                        $rbp_two_hire_me_title = get_post_meta(get_the_ID(), 'rbp_two_hire_me_title', true);
                        if( isset ($rbp_two_hire_me_title) && !empty ($rbp_two_hire_me_title) ){
                            printf(
                                /* translators: %s: My Skills Section Title Theme Color */
                                __('%s','rbp-two'),
                                $rbp_two_hire_me_title
                                );
                        }
                        else {
                            esc_html_e("Let's Work Together!","rbp-two");
                        }
                    ?>
                    </h2>
                    <p>
                    <?php
                        $rbp_two_hire_me_sub_title = get_post_meta(get_the_ID(), 'rbp_two_hire_me_sub_title', true);
                        if( isset ($rbp_two_hire_me_sub_title)  && !empty ($rbp_two_hire_me_sub_title) ){
                            printf(
                                /* translators: %s: My Skills Section Title Theme Color */
                                __('%s','rbp-two'),
                                $rbp_two_hire_me_sub_title
                                );
                        }
                        else {
                            esc_html_e('I am available for freelance projects. Hire me and get your project done.','rbp-two');
                        }
                    ?>
                    </p>
                    <div class="rbp-two-btn btn-hire-me">
                        <a href="<?php
                        $rbp_two_hire_me_btn_url = get_post_meta(get_the_ID(), 'rbp_two_hire_me_btn_url', true);
                        if( isset ($rbp_two_hire_me_btn_url) && !empty ($rbp_two_hire_me_btn_url) ){
                            echo esc_url($rbp_two_hire_me_btn_url);
                        }
                        else {
                            echo esc_url('#');
                        }
                        ?>">
                        <?php
                        $rbp_two_hire_me_btn_text = get_post_meta(get_the_ID(), 'rbp_two_hire_me_btn_text', true);
                        if( isset ($rbp_two_hire_me_btn_text) && !empty ($rbp_two_hire_me_btn_text) ){
                            printf(
                                /* translators: %s: My Skills Section Title Theme Color */
                                __('%s','rbp-two'),
                                $rbp_two_hire_me_btn_text
                                );
                        }
                        else {
                            esc_html_e('hire me','rbp-two');
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