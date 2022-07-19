<?php
// CountUp Section Background Image
$rb_portfolio_two_countup_image = get_post_meta(get_the_ID(), 'rb_portfolio_two_countup_image', true);
?>

<!--============================== 
===== Countup Area Strat Here =====
===============================-->
<section class="rb-portfolio-two-countup" <?php if ( isset ($rb_portfolio_two_countup_image) && !empty ($rb_portfolio_two_countup_image)) : ?> style="background-image: url(<?php echo esc_url($rb_portfolio_two_countup_image); ?>);" <?php endif; ?> >

    <!--================================== 
    ===== Section Content Strat Here =====
    ===================================-->
    <div class="container">
        <div class="row">
            
            <?php
            $rb_portfolio_two_countup_items = get_post_meta(get_the_ID(), 'rb_portfolio_two_countup_items', true);
            if( isset ($rb_portfolio_two_countup_items) && !empty ($rb_portfolio_two_countup_items) ): 
                
            foreach($rb_portfolio_two_countup_items as $rb_portfolio_two_countup_items_single):
            ?>

            <!--===== 01. Single Countup Item Strat Here =====-->
            <div class="col-lg-3">
                <div class="rb-portfolio-two-single-countup-item">
                    <div class="rb-portfolio-two-countup-icon">
                        <i class="<?php
                                $rb_portfolio_two_countup_item_icon = $rb_portfolio_two_countup_items_single['rb_portfolio_two_countup_item_icon'];
                                if( isset ($rb_portfolio_two_countup_item_icon) && !empty ($rb_portfolio_two_countup_item_icon) ){
                                    echo esc_attr($rb_portfolio_two_countup_item_icon);
                                }
                                else {
                                    echo esc_attr('fas fa-coffee');
                                }
                                ?>">
                        </i>
                    </div>
                    <div class="rb-portfolio-two-countup-number" data-from="0" data-to="781" data-speed="3000" data-refresh-interval="50">
                        <h2>
                        <?php
                        $rb_portfolio_two_countup_item_number = $rb_portfolio_two_countup_items_single['rb_portfolio_two_countup_item_number'];
                        if( isset ($rb_portfolio_two_countup_item_number) && !empty ($rb_portfolio_two_countup_item_number) ){
                            printf(
                                /* translators: %s: CountUp Item Number */
                                __('%s','rb-portfolio-two'),
                                $rb_portfolio_two_countup_item_number
                            );
                        }
                        else {
                            esc_html_e('781','rb-portfolio-two');
                        }
                        ?>
                        </h2>
                    </div>
                    <div class="rb-portfolio-two-separator-countup"></div>
                    <div class="rb-portfolio-two-countup-text">
                        <p>
                        <?php
                        $rb_portfolio_two_countup_item_title = $rb_portfolio_two_countup_items_single['rb_portfolio_two_countup_item_title'];
                        if( isset ($rb_portfolio_two_countup_item_title) && !empty ($rb_portfolio_two_countup_item_title) ){
                            printf(
                                /* translators: %s: CountUp Item Title */
                                __('%s','rb-portfolio-two'),
                                $rb_portfolio_two_countup_item_title
                            );
                        }
                        else {
                            esc_html_e('cups of coffee','rb-portfolio-two');
                        }
                        ?>
                        </p>
                    </div>
                </div>
            </div>
            <!--===== 01. Single Countup Item End Here =====-->
            
            <?php endforeach; else: ?>
            <!--===== 01. Single Countup Item Strat Here =====-->
            <div class="col-lg-3">
                <div class="rb-portfolio-two-single-countup-item">
                    <div class="rb-portfolio-two-countup-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <div class="rb-portfolio-two-countup-number" data-from="0" data-to="215" data-speed="3000" data-refresh-interval="50">
                        <h2><?php esc_html_e('215', 'rb-portfolio-two'); ?></h2>
                    </div>
                    <div class="rb-portfolio-two-separator-countup"></div>
                    <div class="rb-portfolio-two-countup-text">
                        <p><?php esc_html_e('projects done', 'rb-portfolio-two'); ?></p>
                    </div>
                </div>
            </div>
            <!--===== 01. Single Countup Item End Here =====-->
            
            <!--===== 02. Single Countup Item Strat Here =====-->
            <div class="col-lg-3">
                <div class="rb-portfolio-two-single-countup-item">
                    <div class="rb-portfolio-two-countup-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="rb-portfolio-two-countup-number" data-from="0" data-to="650" data-speed="3000" data-refresh-interval="50">
                        <h2><?php esc_html_e('650', 'rb-portfolio-two'); ?></h2>
                    </div>
                    <div class="rb-portfolio-two-separator-countup"></div>
                    <div class="rb-portfolio-two-countup-text">
                        <p><?php esc_html_e('happy clients', 'rb-portfolio-two'); ?></p>
                    </div>
                </div>
            </div>
            <!--===== 02. Single Countup Item End Here =====-->
            
            <!--===== 03. Single Countup Item Strat Here =====-->
            <div class="col-lg-3">
                <div class="rb-portfolio-two-single-countup-item">
                    <div class="rb-portfolio-two-countup-icon">
                        <i class="far fa-clock"></i>
                    </div>
                    <div class="rb-portfolio-two-countup-number" data-from="0" data-to="3475" data-speed="3000" data-refresh-interval="50">
                        <h2><?php esc_html_e('3475', 'rb-portfolio-two'); ?></h2>
                    </div>
                    <div class="rb-portfolio-two-separator-countup"></div>
                    <div class="rb-portfolio-two-countup-text">
                        <p><?php esc_html_e('hours worked', 'rb-portfolio-two'); ?></p>
                    </div>
                </div>
            </div>
            <!--===== 03. Single Countup Item End Here =====-->
            
            <!--===== 04. Single Countup Item Strat Here =====-->
            <div class="col-lg-3">
                <div class="rb-portfolio-two-single-countup-item">
                    <div class="rb-portfolio-two-countup-icon">
                        <i class="fas fa-coffee"></i>
                    </div>
                    <div class="rb-portfolio-two-countup-number" data-from="0" data-to="781" data-speed="3000" data-refresh-interval="50">
                        <h2><?php esc_html_e('781', 'rb-portfolio-two'); ?></h2>
                    </div>
                    <div class="rb-portfolio-two-separator-countup"></div>
                    <div class="rb-portfolio-two-countup-text">
                        <p><?php esc_html_e('cups of coffee', 'rb-portfolio-two'); ?></p>
                    </div>
                </div>
            </div>
            <!--===== 04. Single Countup Item End Here =====-->
            <?php endif; ?>
            
        </div><!-- row end -->
    </div><!-- container end -->
    <!--================================ 
    ===== Section Content End Here =====
    =================================-->

</section>
<!--============================ 
===== Countup Area End Here =====
=============================-->