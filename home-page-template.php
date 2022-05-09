<?php
/**
 * The website home page template file
 * 
 * Template Name: Home Page Template
 *
 * @package WordPress
 * @subpackage RB Free Theme
 * @since Jhon Smith 1.0.0
 */

get_header(); ?>

<!--================================= 
===== Preloader Area Strat Here =====
==================================-->
<div class="pre-loader">
    <div class="sk-cube-grid">
        <div class="sk-cube sk-cube1"></div>
        <div class="sk-cube sk-cube2"></div>
        <div class="sk-cube sk-cube3"></div>
        <div class="sk-cube sk-cube4"></div>
        <div class="sk-cube sk-cube5"></div>
        <div class="sk-cube sk-cube6"></div>
        <div class="sk-cube sk-cube7"></div>
        <div class="sk-cube sk-cube8"></div>
        <div class="sk-cube sk-cube9"></div>
    </div>
</div>
<!--=============================== 
===== Preloader Area End Here =====
================================-->

<?php
get_template_part('homepage-sections/header-section');
get_template_part('homepage-sections/about-me-section');
get_template_part('homepage-sections/my-skills-section');
get_template_part('homepage-sections/hire-me-section');
get_template_part('homepage-sections/my-services-section');
get_template_part('homepage-sections/countup-section');
get_template_part('homepage-sections/my-testimonial-section');
get_template_part('homepage-sections/contact-me-section');get_footer();
?>