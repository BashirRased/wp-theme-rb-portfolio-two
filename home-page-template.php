<?php
/**
 * The website home page template file
 * 
 * Template Name: Home Page Template
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.2
 */

get_header();
?>

<div id="page-content" class="main-page">

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

</div><!-- #page-content -->

<?php
get_footer();