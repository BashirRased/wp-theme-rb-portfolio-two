<!--============================== 
===== Header Area Strat Here =====
===============================-->
<?php
// Header Section Background Image
$jhon_smith_header_img = get_post_meta(get_the_ID(), 'jhon_smith_header_img', true);

?>

<header class="jhon-smith-header-area jhon-smith-scroll-menu" id="jhon-smith-header-area" <?php if ( isset ($jhon_smith_header_img) && !empty ($jhon_smith_header_img)) : ?>style="background-image: url(<?php echo esc_url($jhon_smith_header_img); ?>);" <?php endif; ?> >
    
    <!--====================================== 
    ===== Header Content Area Strat Here =====
    =======================================-->
    <div class="jhon-smith-header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <?php
                    // Header Section Title
                    $jhon_smith_header_title = get_post_meta(get_the_ID(), 'jhon_smith_header_title', true);

                    if( isset ($jhon_smith_header_title) && !empty ($jhon_smith_header_title) ) : ?>

                    <div class="jhon-smith-header-content-title">
                        <h1>
                            <?php 
                            printf(
                            /* translators: %s: Header Section Title */
                            __('%s','jhon-smith'),
                            $jhon_smith_header_title
                            );
                            ?>
                        </h1>
                    </div>

                    <?php endif; ?>

                    <?php
                    // Header Section Sub-Title 01
                    $jhon_smith_header_subtitle_1 = get_post_meta(get_the_ID(), 'jhon_smith_header_subtitle_1', true);

                    // Header Section Sub-Title 02
                    $jhon_smith_header_subtitle_2 = get_post_meta(get_the_ID(), 'jhon_smith_header_subtitle_2', true);

                    // Header Section Sub-Title 02
                    if( isset ($jhon_smith_header_subtitle_2)  && !empty ($jhon_smith_header_subtitle_2) ) : ?>
                    <div class="jhon-smith-header-content-subtitle">
                        <h3>

                        <?php 
                            printf(
                            /* translators: %s: Header Section Sub-Title 01 */
                            __('%s ','jhon-smith'),
                            $jhon_smith_header_subtitle_1
                            );
                        ?>
                        
                        <span class="jhon-smith-type-effect jhon-smith-theme-color" data-period="2000" data-type='[
                            <?php
                            $i = 0;
                            foreach($jhon_smith_header_subtitle_2 as $jhon_smith_header_subtitle_2_single):
                            
                            $i++;
                            if($i === 1){
                                $jhon_smith_header_subtitle_2_count = '';
                            }
                            else {
                                $jhon_smith_header_subtitle_2_count = ', '; 
                            }

                            printf(
                            /* translators:
                            %1$s: Count
                            %2$s: Header Section Sub-Title 02 Text */
                            __('%1$s "%2$s"','jhon-smith'),
                            $jhon_smith_header_subtitle_2_count,
                            $jhon_smith_header_subtitle_2_single['jhon_smith_header_subtitle_2_txt']
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
    <a href="#jhon-smith-about-me" class="jhon-smith-header-scroll-down"></a>
    <!--=================================== 
    ===== Header Scroll Down End Here =====
    ====================================-->

</header>
<!--============================ 
===== Header Area End Here =====
=============================-->