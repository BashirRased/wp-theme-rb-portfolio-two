<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.0
 */

get_header();
?>

<div id="rbp-two-page-content" class="rbp-two-single-post-page">
    <div class="container">
        <div class="row">

            <?php
                if(is_active_sidebar('rbp-two-sidebar-right')){
                    $rbp_two_page_content_class = 'col-lg-8';
                }
                else {
                    $rbp_two_page_content_class = 'col-lg-12';
                }
            ?>

            <main id="rbp-two-primary" class="<?php echo esc_attr(wp_kses_post($rbp_two_page_content_class)); ?>" role="post">

            <?php
            /* Start the Loop */
            while ( have_posts() ) :
                the_post();

                get_template_part('template-parts/content/content-single');

                // If comments are open or there is at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }

            endwhile; // End of the loop.
            ?>

            </main><!-- #rbp-two-primary -->

            <?php
			if(is_active_sidebar('rbp-two-sidebar-right')){
				get_sidebar();
			}
			?>

        </div><!-- row end -->        
    </div><!-- container end -->
</div><!-- #rbp-two-page-content -->

<?php
get_footer();