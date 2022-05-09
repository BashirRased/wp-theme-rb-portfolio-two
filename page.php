<?php
/**
 * The template for displaying all single pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-page
 *
 * @package WordPress
 * @subpackage RB Free Theme
 * @since Jhon Smith 1.0.0
 */

get_header();
?>

<div id="jhon-smith-page-content" class="jhon-smith-single-page">
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
            
            <main id="jhon-smith-primary" class="<?php echo esc_attr(wp_kses_post($jhon_smith_page_content_class)); ?>" role="page">

                <?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    get_template_part('template-parts/content/content-single');

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