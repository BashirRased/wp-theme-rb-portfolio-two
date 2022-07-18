<?php
// CountUp Section Background Image
$rbp_two_countup_image = get_post_meta(get_the_ID(), 'rbp_two_countup_image', true);
?>

<!--============================== 
===== Countup Area Strat Here =====
===============================-->
<section class="rbp-two-countup" <?php if ( isset ($rbp_two_countup_image) && !empty ($rbp_two_countup_image)) : ?> style="background-image: url(<?php echo esc_url($rbp_two_countup_image); ?>);" <?php endif; ?> >

    <!--================================== 
    ===== Section Content Strat Here =====
    ===================================-->
    <div class="container">
        <div class="row">
            
            <?php
            $rbp_two_countup_items = get_post_meta(get_the_ID(), 'rbp_two_countup_items', true);
            if( isset ($rbp_two_countup_items) && !empty ($rbp_two_countup_items) ): 
                
            foreach($rbp_two_countup_items as $rbp_two_countup_items_single):
            ?>

            <!--===== 01. Single Countup Item Strat Here =====-->
            <div class="col-lg-3">
                <div class="rbp-two-single-countup-item">
                    <div class="rbp-two-countup-icon">
                        <i class="<?php
                                $rbp_two_countup_item_icon = $rbp_two_countup_items_single['rbp_two_countup_item_icon'];
                                if( isset ($rbp_two_countup_item_icon) && !empty ($rbp_two_countup_item_icon) ){
                                    echo esc_attr($rbp_two_countup_item_icon);
                                }
                                else {
                                    echo esc_attr('fas fa-coffee');
                                }
                                ?>">
                        </i>
                    </div>
                    <div class="rbp-two-countup-number" data-from="0" data-to="781" data-speed="3000" data-refresh-interval="50">
                        <h2>
                        <?php
                        $rbp_two_countup_item_number = $rbp_two_countup_items_single['rbp_two_countup_item_number'];
                        if( isset ($rbp_two_countup_item_number) && !empty ($rbp_two_countup_item_number) ){
                            printf(
                                /* translators: %s: CountUp Item Number */
                                __('%s','rbp-two'),
                                $rbp_two_countup_item_number
                            );
                        }
                        else {
                            esc_html_e('781','rbp-two');
                        }
                        ?>
                        </h2>
                    </div>
                    <div class="rbp-two-separator-countup"></div>
                    <div class="rbp-two-countup-text">
                        <p>
                        <?php
                        $rbp_two_countup_item_title = $rbp_two_countup_items_single['rbp_two_countup_item_title'];
                        if( isset ($rbp_two_countup_item_title) && !empty ($rbp_two_countup_item_title) ){
                            printf(
                                /* translators: %s: CountUp Item Title */
                                __('%s','rbp-two'),
                                $rbp_two_countup_item_title
                            );
                        }
                        else {
                            esc_html_e('cups of coffee','rbp-two');
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
                <div class="rbp-two-single-countup-item">
                    <div class="rbp-two-countup-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <div class="rbp-two-countup-number" data-from="0" data-to="215" data-speed="3000" data-refresh-interval="50">
                        <h2><?php esc_html_e('215', 'rbp-two'); ?></h2>
                    </div>
                    <div class="rbp-two-separator-countup"></div>
                    <div class="rbp-two-countup-text">
                        <p><?php esc_html_e('projects done', 'rbp-two'); ?></p>
                    </div>
                </div>
            </div>
            <!--===== 01. Single Countup Item End Here =====-->
            
            <!--===== 02. Single Countup Item Strat Here =====-->
            <div class="col-lg-3">
                <div class="rbp-two-single-countup-item">
                    <div class="rbp-two-countup-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="rbp-two-countup-number" data-from="0" data-to="650" data-speed="3000" data-refresh-interval="50">
                        <h2><?php esc_html_e('650', 'rbp-two'); ?></h2>
                    </div>
                    <div class="rbp-two-separator-countup"></div>
                    <div class="rbp-two-countup-text">
                        <p><?php esc_html_e('happy clients', 'rbp-two'); ?></p>
                    </div>
                </div>
            </div>
            <!--===== 02. Single Countup Item End Here =====-->
            
            <!--===== 03. Single Countup Item Strat Here =====-->
            <div class="col-lg-3">
                <div class="rbp-two-single-countup-item">
                    <div class="rbp-two-countup-icon">
                        <i class="far fa-clock"></i>
                    </div>
                    <div class="rbp-two-countup-number" data-from="0" data-to="3475" data-speed="3000" data-refresh-interval="50">
                        <h2><?php esc_html_e('3475', 'rbp-two'); ?></h2>
                    </div>
                    <div class="rbp-two-separator-countup"></div>
                    <div class="rbp-two-countup-text">
                        <p><?php esc_html_e('hours worked', 'rbp-two'); ?></p>
                    </div>
                </div>
            </div>
            <!--===== 03. Single Countup Item End Here =====-->
            
            <!--===== 04. Single Countup Item Strat Here =====-->
            <div class="col-lg-3">
                <div class="rbp-two-single-countup-item">
                    <div class="rbp-two-countup-icon">
                        <i class="fas fa-coffee"></i>
                    </div>
                    <div class="rbp-two-countup-number" data-from="0" data-to="781" data-speed="3000" data-refresh-interval="50">
                        <h2><?php esc_html_e('781', 'rbp-two'); ?></h2>
                    </div>
                    <div class="rbp-two-separator-countup"></div>
                    <div class="rbp-two-countup-text">
                        <p><?php esc_html_e('cups of coffee', 'rbp-two'); ?></p>
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