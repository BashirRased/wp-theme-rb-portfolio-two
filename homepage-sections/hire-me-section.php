<?php
// Hire Me Section Background Image
$rb_portfolio_two_hire_me_image = get_post_meta(get_the_ID(), 'rb_portfolio_two_hire_me_image', true);
?>

<!--=============================== 
===== Hire Me Area Strat Here =====
================================-->
<section class="rb-portfolio-two-hire-me" <?php if ( isset ($rb_portfolio_two_hire_me_image) && !empty ($rb_portfolio_two_hire_me_image)) : ?> style="background-image: url(<?php echo esc_url($rb_portfolio_two_hire_me_image); ?>);" <?php endif; ?> >
    
    <!--================================== 
    ===== Section Content Strat Here =====
    ===================================-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rb-portfolio-two-hire-me-content">
                    <h2>
                    <?php
                        $rb_portfolio_two_hire_me_title = get_post_meta(get_the_ID(), 'rb_portfolio_two_hire_me_title', true);
                        if( isset ($rb_portfolio_two_hire_me_title) && !empty ($rb_portfolio_two_hire_me_title) ){
                            printf(
                                /* translators: %s: My Skills Section Title Theme Color */
                                __('%s','rb-portfolio-two'),
                                $rb_portfolio_two_hire_me_title
                                );
                        }
                        else {
                            esc_html_e("Let's Work Together!","rb-portfolio-two");
                        }
                    ?>
                    </h2>
                    <p>
                    <?php
                        $rb_portfolio_two_hire_me_sub_title = get_post_meta(get_the_ID(), 'rb_portfolio_two_hire_me_sub_title', true);
                        if( isset ($rb_portfolio_two_hire_me_sub_title)  && !empty ($rb_portfolio_two_hire_me_sub_title) ){
                            printf(
                                /* translators: %s: My Skills Section Title Theme Color */
                                __('%s','rb-portfolio-two'),
                                $rb_portfolio_two_hire_me_sub_title
                                );
                        }
                        else {
                            esc_html_e('I am available for freelance projects. Hire me and get your project done.','rb-portfolio-two');
                        }
                    ?>
                    </p>
                    <div class="rb-portfolio-two-btn btn-hire-me">
                        <a href="<?php
                        $rb_portfolio_two_hire_me_btn_url = get_post_meta(get_the_ID(), 'rb_portfolio_two_hire_me_btn_url', true);
                        if( isset ($rb_portfolio_two_hire_me_btn_url) && !empty ($rb_portfolio_two_hire_me_btn_url) ){
                            echo esc_url($rb_portfolio_two_hire_me_btn_url);
                        }
                        else {
                            echo esc_url('#');
                        }
                        ?>">
                        <?php
                        $rb_portfolio_two_hire_me_btn_text = get_post_meta(get_the_ID(), 'rb_portfolio_two_hire_me_btn_text', true);
                        if( isset ($rb_portfolio_two_hire_me_btn_text) && !empty ($rb_portfolio_two_hire_me_btn_text) ){
                            printf(
                                /* translators: %s: My Skills Section Title Theme Color */
                                __('%s','rb-portfolio-two'),
                                $rb_portfolio_two_hire_me_btn_text
                                );
                        }
                        else {
                            esc_html_e('hire me','rb-portfolio-two');
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