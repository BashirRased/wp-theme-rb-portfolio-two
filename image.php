<?php
/**
 * The template for displaying image attachments
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.4
 * @since RB Portfolio Two 1.0.4
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
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('post-single-item'); ?>>

                <header class="content-single-entry-header alignwide">
                    <?php
                    the_title('<h1 class="content-single-entry-header-title">', '</h1>');
                    ?>
                </header><!-- .content-single-entry-header -->

                <div class="content-single-entry-meta">
                    <?php
                        do_action ( 'rb_portfolio_two_post_on' );
                        do_action ( 'rb_portfolio_two_post_comments' );
                        do_action ( 'rb_portfolio_two_post_edit' );
                    ?>
                </div>

                <figure class="attachment-image">
                    <?php
                    /**
                     * Filter the default image attachment size.
                     *
                     * @since RB Portfolio Two 1.0.3
                     *
                     */
                    echo wp_get_attachment_image(get_the_ID(), 'full');
                    ?>

                    <?php if (wp_get_attachment_caption()) : ?>
                        <figcaption class="attachment-image-caption-text">
                            <?php wp_get_attachment_caption(); ?>
                        </figcaption>
                    <?php endif; ?>

                </figure><!-- .attachment-image -->

            </article><!-- #post-<?php the_ID(); ?> -->

            <?php
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