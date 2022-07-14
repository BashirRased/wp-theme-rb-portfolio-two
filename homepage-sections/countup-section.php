<?php
// CountUp Section Background Image
$jhon_smith_countup_image = get_post_meta(get_the_ID(), 'jhon_smith_countup_image', true);
?>

<!--============================== 
===== Countup Area Strat Here =====
===============================-->
<section class="jhon-smith-countup" <?php if ( isset ($jhon_smith_countup_image) && !empty ($jhon_smith_countup_image)) : ?> style="background-image: url(<?php echo esc_url($jhon_smith_countup_image); ?>);" <?php endif; ?> >

    <!--================================== 
    ===== Section Content Strat Here =====
    ===================================-->
    <div class="container">
        <div class="row">
            
            <?php
            $jhon_smith_countup_items = get_post_meta(get_the_ID(), 'jhon_smith_countup_items', true);
            if( isset ($jhon_smith_countup_items) && !empty ($jhon_smith_countup_items) ): 
                
            foreach($jhon_smith_countup_items as $jhon_smith_countup_items_single):
            ?>

            <!--===== 01. Single Countup Item Strat Here =====-->
            <div class="col-lg-3">
                <div class="jhon-smith-single-countup-item">
                    <div class="jhon-smith-countup-icon">
                        <i class="<?php
                                $jhon_smith_countup_item_icon = $jhon_smith_countup_items_single['jhon_smith_countup_item_icon'];
                                if( isset ($jhon_smith_countup_item_icon) && !empty ($jhon_smith_countup_item_icon) ){
                                    echo esc_attr($jhon_smith_countup_item_icon);
                                }
                                else {
                                    echo esc_attr('fas fa-coffee');
                                }
                                ?>">
                        </i>
                    </div>
                    <div class="jhon-smith-countup-number" data-from="0" data-to="781" data-speed="3000" data-refresh-interval="50">
                        <h2>
                        <?php
                        $jhon_smith_countup_item_number = $jhon_smith_countup_items_single['jhon_smith_countup_item_number'];
                        if( isset ($jhon_smith_countup_item_number) && !empty ($jhon_smith_countup_item_number) ){
                            printf(
                                /* translators: %s: CountUp Item Number */
                                __('%s','jhon-smith'),
                                $jhon_smith_countup_item_number
                            );
                        }
                        else {
                            esc_html_e('781','jhon-smith');
                        }
                        ?>
                        </h2>
                    </div>
                    <div class="jhon-smith-separator-countup"></div>
                    <div class="jhon-smith-countup-text">
                        <p>
                        <?php
                        $jhon_smith_countup_item_title = $jhon_smith_countup_items_single['jhon_smith_countup_item_title'];
                        if( isset ($jhon_smith_countup_item_title) && !empty ($jhon_smith_countup_item_title) ){
                            printf(
                                /* translators: %s: CountUp Item Title */
                                __('%s','jhon-smith'),
                                $jhon_smith_countup_item_title
                            );
                        }
                        else {
                            esc_html_e('cups of coffee','jhon-smith');
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
                <div class="jhon-smith-single-countup-item">
                    <div class="jhon-smith-countup-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <div class="jhon-smith-countup-number" data-from="0" data-to="215" data-speed="3000" data-refresh-interval="50">
                        <h2><?php esc_html_e('215', 'jhon-smith'); ?></h2>
                    </div>
                    <div class="jhon-smith-separator-countup"></div>
                    <div class="jhon-smith-countup-text">
                        <p><?php esc_html_e('projects done', 'jhon-smith'); ?></p>
                    </div>
                </div>
            </div>
            <!--===== 01. Single Countup Item End Here =====-->
            
            <!--===== 02. Single Countup Item Strat Here =====-->
            <div class="col-lg-3">
                <div class="jhon-smith-single-countup-item">
                    <div class="jhon-smith-countup-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="jhon-smith-countup-number" data-from="0" data-to="650" data-speed="3000" data-refresh-interval="50">
                        <h2><?php esc_html_e('650', 'jhon-smith'); ?></h2>
                    </div>
                    <div class="jhon-smith-separator-countup"></div>
                    <div class="jhon-smith-countup-text">
                        <p><?php esc_html_e('happy clients', 'jhon-smith'); ?></p>
                    </div>
                </div>
            </div>
            <!--===== 02. Single Countup Item End Here =====-->
            
            <!--===== 03. Single Countup Item Strat Here =====-->
            <div class="col-lg-3">
                <div class="jhon-smith-single-countup-item">
                    <div class="jhon-smith-countup-icon">
                        <i class="far fa-clock"></i>
                    </div>
                    <div class="jhon-smith-countup-number" data-from="0" data-to="3475" data-speed="3000" data-refresh-interval="50">
                        <h2><?php esc_html_e('3475', 'jhon-smith'); ?></h2>
                    </div>
                    <div class="jhon-smith-separator-countup"></div>
                    <div class="jhon-smith-countup-text">
                        <p><?php esc_html_e('hours worked', 'jhon-smith'); ?></p>
                    </div>
                </div>
            </div>
            <!--===== 03. Single Countup Item End Here =====-->
            
            <!--===== 04. Single Countup Item Strat Here =====-->
            <div class="col-lg-3">
                <div class="jhon-smith-single-countup-item">
                    <div class="jhon-smith-countup-icon">
                        <i class="fas fa-coffee"></i>
                    </div>
                    <div class="jhon-smith-countup-number" data-from="0" data-to="781" data-speed="3000" data-refresh-interval="50">
                        <h2><?php esc_html_e('781', 'jhon-smith'); ?></h2>
                    </div>
                    <div class="jhon-smith-separator-countup"></div>
                    <div class="jhon-smith-countup-text">
                        <p><?php esc_html_e('cups of coffee', 'jhon-smith'); ?></p>
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