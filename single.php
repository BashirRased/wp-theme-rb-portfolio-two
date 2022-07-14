<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package RB Free Theme
 * @subpackage Jhon Smith
 * @version Jhon Smith 1.0.1
 * @since Jhon Smith 1.0.0
 */

get_header();
?>

<div id="jhon-smith-page-content" class="jhon-smith-single-post-page">
    <div class="container">
        <div class="row">

            <?php
                if(is_active_sidebar('jhon-smith-sidebar-right')){
                    $jhon_smith_page_content_class = 'col-lg-8';
                }
                else {
                    $jhon_smith_page_content_class = 'col-lg-12';
                }
            ?>

            <main id="jhon-smith-primary" class="<?php echo esc_attr(wp_kses_post($jhon_smith_page_content_class)); ?>" role="post">

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

            </main><!-- #jhon-smith-primary -->

            <?php
			if(is_active_sidebar('jhon-smith-sidebar-right')){
				get_sidebar();
			}
			?>

        </div><!-- row end -->        
    </div><!-- container end -->
</div><!-- #jhon-smith-page-content -->

<?php
get_footer();