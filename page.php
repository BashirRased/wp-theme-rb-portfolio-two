<?php
/**
 * The template for displaying all single pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-page
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.1
 */

get_header();
?>

<div id="rbp-two-page-content" class="rbp-two-single-page">
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
            
            <main id="rbp-two-primary" class="<?php echo esc_attr($rbp_two_page_content_class); ?>" role="page">

                <?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    get_template_part('template-parts/content/content-single');

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