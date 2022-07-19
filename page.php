<?php
/**
 * The template for displaying all single pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-page
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.2
 */

get_header();
?>

<div id="page-content" class="single-page">
    <div class="container">
        <div class="row">

            <?php
                if(is_active_sidebar('rb-portfolio-two-sidebar-right')){
                    $rb_portfolio_two_page_content_class = 'col-lg-8';
                }
                else {
                    $rb_portfolio_two_page_content_class = 'col-lg-12';
                }
            ?>
            
            <main id="primary" class="<?php echo esc_attr($rb_portfolio_two_page_content_class); ?>">

                <?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    get_template_part('template-parts/content/content-single');

                endwhile; // End of the loop.
                ?>

            </main><!-- #primary -->

            <?php
			if(is_active_sidebar('rb-portfolio-two-sidebar-right')){
				get_sidebar();
			}
			?>

        </div><!-- row end -->        
    </div><!-- container end -->
</div><!-- #page-content -->

<?php
get_footer();