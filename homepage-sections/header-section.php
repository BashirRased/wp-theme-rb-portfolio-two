<!--============================== 
===== Header Area Strat Here =====
===============================-->
<?php
// Header Section Background Image
$rbp_two_header_img = get_post_meta(get_the_ID(), 'rbp_two_header_img', true);

?>

<header class="rbp-two-header-area rbp-two-scroll-menu" id="rbp-two-header-area" <?php if ( isset ($rbp_two_header_img) && !empty ($rbp_two_header_img)) : ?>style="background-image: url(<?php echo esc_url($rbp_two_header_img); ?>);" <?php endif; ?> >
    
    <!--====================================== 
    ===== Header Content Area Strat Here =====
    =======================================-->
    <div class="rbp-two-header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <?php
                    // Header Section Title
                    $rbp_two_header_title = get_post_meta(get_the_ID(), 'rbp_two_header_title', true);

                    if( isset ($rbp_two_header_title) && !empty ($rbp_two_header_title) ) : ?>

                    <div class="rbp-two-header-content-title">
                        <h1>
                            <?php 
                            printf(
                            /* translators: %s: Header Section Title */
                            __('%s','rbp-two'),
                            $rbp_two_header_title
                            );
                            ?>
                        </h1>
                    </div>

                    <?php endif; ?>

                    <?php
                    // Header Section Sub-Title 01
                    $rbp_two_header_subtitle_1 = get_post_meta(get_the_ID(), 'rbp_two_header_subtitle_1', true);

                    // Header Section Sub-Title 02
                    $rbp_two_header_subtitle_2 = get_post_meta(get_the_ID(), 'rbp_two_header_subtitle_2', true);

                    // Header Section Sub-Title 02
                    if( isset ($rbp_two_header_subtitle_2)  && !empty ($rbp_two_header_subtitle_2) ) : ?>
                    <div class="rbp-two-header-content-subtitle">
                        <h3>

                        <?php 
                            printf(
                            /* translators: %s: Header Section Sub-Title 01 */
                            __('%s ','rbp-two'),
                            $rbp_two_header_subtitle_1
                            );
                        ?>
                        
                        <span class="rbp-two-type-effect rbp-two-theme-color" data-period="2000" data-type='[
                            <?php
                            $i = 0;
                            foreach($rbp_two_header_subtitle_2 as $rbp_two_header_subtitle_2_single):
                            
                            $i++;
                            if($i === 1){
                                $rbp_two_header_subtitle_2_count = '';
                            }
                            else {
                                $rbp_two_header_subtitle_2_count = ', '; 
                            }

                            printf(
                            /* translators:
                            %1$s: Count
                            %2$s: Header Section Sub-Title 02 Text */
                            __('%1$s "%2$s"','rbp-two'),
                            $rbp_two_header_subtitle_2_count,
                            $rbp_two_header_subtitle_2_single['rbp_two_header_subtitle_2_txt']
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
    <a href="#rbp-two-about-me" class="rbp-two-header-scroll-down"></a>
    <!--=================================== 
    ===== Header Scroll Down End Here =====
    ====================================-->

</header>
<!--============================ 
===== Header Area End Here =====
=============================-->