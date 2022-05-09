<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage RB Free Theme
 * @since Jhon Smith 1.0.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<?php
wp_body_open();
?>
<div id="jhon-smith-page" class="jhon-smith-page-content">
	<a class="skip-link screen-reader-text" href="#jhon-smith-page-content">
        <?php esc_html_e('Skip to content', 'jhon-smith'); ?>
    </a>
    
<!--======================================================
===== Header Menu with Site Branding Area Strat Here =====
=======================================================-->
<div class="jhon-smith-header-menu-area">
    <div class="container">
        <div class="row">
            
            <!--===== Header Menu with Site Branding Left Area Strat Here =====-->
            <div class="col-lg-6 col-md-12">

                <?php
                get_template_part('template-parts/header/site-branding');
                ?>
                
                <!--===== Mobile Menu Strat Here =====-->
                <div class="jhon-smith-header-mobile-menu-area">
                    <button class="jhon-smith-header-mobile-menu-btn">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <!--===== Mobile Menu End Here =====-->						
            </div>
            <!--===== Header Menu with Site Branding Left Area End Here =====-->
        
            <?php
            get_template_part('template-parts/header/menu');
            ?>
    
        </div><!-- row end -->
    </div><!-- container end -->
</div><!-- .jhon-smith-header-menu-area -->
<!--==================================================== 
===== Header Menu with Site Branding Area End Here =====
======================================================-->

<?php
if(!is_page_template('home-page-template.php')){
    get_template_part('template-parts/header/breadcrumbs');
}
?>