<?php
/**
 * The template for displaying image attachments
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.1
 */

get_header();
?>

<div id="rb-portfolio-two-page-content" class="rb-portfolio-two-single-post-page">
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

            <main id="rb-portfolio-two-primary" class="<?php echo esc_attr($rb_portfolio_two_page_content_class); ?>" role="post">

            <?php
            /* Start the Loop */
            while ( have_posts() ) :
                the_post();
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('rb-portfolio-two-post-single-item'); ?>>

                <header class="rb-portfolio-two-content-single-entry-header alignwide">
                    <?php
                    the_title('<h1 class="rb-portfolio-two-content-single-entry-header-title">', '</h1>');
                    ?>
                </header><!-- .rb-portfolio-two-content-single-entry-header -->

                <div class="rb-portfolio-two-content-single-entry-meta">
                    <?php
                    rb_portfolio_two_posted_on();
                    rb_portfolio_two_posted_comments();
                    rb_portfolio_two_edit_post_link();
                    ?>
                </div>

                <figure class="rb-portfolio-two-attachment-image">
                    <?php
                    /**
                     * Filter the default image attachment size.
                     *
                     * @since RB Portfolio Two 1.0.0
                     *
                     */
                    echo wp_get_attachment_image(get_the_ID(), 'full');
                    ?>

                    <?php if (wp_get_attachment_caption()) : ?>
                        <figcaption class="rb-portfolio-two-attachment-image-caption-text">
                            <?php esc_html_e(wp_get_attachment_caption()); ?>
                        </figcaption>
                    <?php endif; ?>

                </figure><!-- .rb-portfolio-two-attachment-image -->

            </article><!-- #post-<?php the_ID(); ?> -->

            <?php
                // If comments are open or there is at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }

            endwhile; // End of the loop.
            ?>

            </main><!-- #rb-portfolio-two-primary -->

            <?php
			if(is_active_sidebar('rb-portfolio-two-sidebar-right')){
				get_sidebar();
			}
			?>

        </div><!-- row end -->        
    </div><!-- container end -->
</div><!-- #rb-portfolio-two-page-content -->

<?php
get_footer();