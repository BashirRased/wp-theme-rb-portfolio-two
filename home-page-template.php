<?php
/**
 * The website home page template file
 * 
 * Template Name: Home Page Template
 *
 * @package RB Free Theme
 * @subpackage Jhon Smith
 * @version Jhon Smith 1.0.1
 * @since Jhon Smith 1.0.1
 */

get_header();
?>

<div id="jhon-smith-page-content" class="jhon-smith-main-page">

<?php
get_template_part('homepage-sections/header-section');
get_template_part('homepage-sections/about-me-section');
get_template_part('homepage-sections/my-skills-section');
get_template_part('homepage-sections/hire-me-section');
get_template_part('homepage-sections/my-services-section');
get_template_part('homepage-sections/countup-section');
get_template_part('homepage-sections/my-testimonial-section');
get_template_part('homepage-sections/contact-me-section');
?>

</div><!-- #jhon-smith-page-content -->

<?php
get_footer();