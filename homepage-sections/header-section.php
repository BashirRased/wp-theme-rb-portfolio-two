<!--============================== 
===== Header Area Strat Here =====
===============================-->
<?php
// Header Section Background Image
$rb_portfolio_two_header_img = get_post_meta(get_the_ID(), 'rb_portfolio_two_header_img', true);

?>

<header class="header-area rb-portfolio-two-scroll-menu" id="header-area" <?php if ( isset ($rb_portfolio_two_header_img) && !empty ($rb_portfolio_two_header_img)) : ?>style="background-image: url(<?php echo esc_url($rb_portfolio_two_header_img); ?>);" <?php endif; ?> >
    
    <!--====================================== 
    ===== Header Content Area Strat Here =====
    =======================================-->
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <?php
                    // Header Section Title
                    $rb_portfolio_two_header_title = get_post_meta(get_the_ID(), 'rb_portfolio_two_header_title', true);

                    if( isset ($rb_portfolio_two_header_title) && !empty ($rb_portfolio_two_header_title) ) : ?>

                    <div class="header-content-title">
                        <h1>
                            <?php 
                            printf(
                            /* translators: %s: Header Section Title */
                            __('%s','rb-portfolio-two'),
                            $rb_portfolio_two_header_title
                            );
                            ?>
                        </h1>
                    </div>

                    <?php endif; ?>

                    <?php
                    // Header Section Sub-Title 01
                    $rb_portfolio_two_header_subtitle_1 = get_post_meta(get_the_ID(), 'rb_portfolio_two_header_subtitle_1', true);

                    // Header Section Sub-Title 02
                    $rb_portfolio_two_header_subtitle_2 = get_post_meta(get_the_ID(), 'rb_portfolio_two_header_subtitle_2', true);

                    // Header Section Sub-Title 02
                    if( isset ($rb_portfolio_two_header_subtitle_2)  && !empty ($rb_portfolio_two_header_subtitle_2) ) : ?>
                    <div class="header-content-subtitle">
                        <h3>

                        <?php 
                            printf(
                            /* translators: %s: Header Section Sub-Title 01 */
                            __('%s ','rb-portfolio-two'),
                            $rb_portfolio_two_header_subtitle_1
                            );
                        ?>
                        
                        <span class="type-effect rb-portfolio-two-theme-color" data-period="2000" data-type='[
                            <?php
                            $i = 0;
                            foreach($rb_portfolio_two_header_subtitle_2 as $rb_portfolio_two_header_subtitle_2_single):
                            
                            $i++;
                            if($i === 1){
                                $rb_portfolio_two_header_subtitle_2_count = '';
                            }
                            else {
                                $rb_portfolio_two_header_subtitle_2_count = ', '; 
                            }

                            printf(
                            /* translators:
                            %1$s: Count
                            %2$s: Header Section Sub-Title 02 Text */
                            __('%1$s "%2$s"','rb-portfolio-two'),
                            $rb_portfolio_two_header_subtitle_2_count,
                            $rb_portfolio_two_header_subtitle_2_single['rb_portfolio_two_header_subtitle_2_txt']
                            );
                            endforeach;
                            ?>
                            ]'>
                        </span>

                        </h3>
                    </div>
                    <?php endif; ?>


                </div>
            </div>
        </div>
    </div>
    <!--==================================== 
    ===== Header Content Area End Here =====
    =====================================-->
    
    <!--===================================== 
    ===== Header Scroll Down Strat Here =====
    ======================================-->
    <a href="#about-me" class="header-scroll-down"></a>
    <!--=================================== 
    ===== Header Scroll Down End Here =====
    ====================================-->

</header>
<!--============================ 
===== Header Area End Here =====
=============================-->