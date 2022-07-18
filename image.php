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

            <main id="rbp-two-primary" class="<?php echo esc_attr($rbp_two_page_content_class); ?>" role="post">

            <?php
            /* Start the Loop */
            while ( have_posts() ) :
                the_post();
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('rbp-two-post-single-item'); ?>>

                <header class="rbp-two-content-single-entry-header alignwide">
                    <?php
                    the_title('<h1 class="rbp-two-content-single-entry-header-title">', '</h1>');
                    ?>
                </header><!-- .rbp-two-content-single-entry-header -->

                <div class="rbp-two-content-single-entry-meta">
                    <?php
                    rbp_two_posted_on();
                    rbp_two_posted_comments();
                    rbp_two_edit_post_link();
                    ?>
                </div>

                <figure class="rbp-two-attachment-image">
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
                        <figcaption class="rbp-two-attachment-image-caption-text">
                            <?php esc_html_e(wp_get_attachment_caption()); ?>
                        </figcaption>
                    <?php endif; ?>

                </figure><!-- .rbp-two-attachment-image -->

            </article><!-- #post-<?php the_ID(); ?> -->

            <?php
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