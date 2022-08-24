<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.5
 * @since RB Portfolio Two 1.0.3
 */

get_header();
?>

<div id="page-content" class="single-post-page">
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

                // If comments are open or there is at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }

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