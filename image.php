<?php
/**
 * The template for displaying image attachments
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package RB Free Theme
 * @subpackage Jhon Smith
 * @version Jhon Smith 1.0.1
 * @since Jhon Smith 1.0.1
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

            <main id="jhon-smith-primary" class="<?php echo esc_attr($jhon_smith_page_content_class); ?>" role="post">

            <?php
            /* Start the Loop */
            while ( have_posts() ) :
                the_post();
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('jhon-smith-post-single-item'); ?>>

                <header class="jhon-smith-content-single-entry-header alignwide">
                    <?php
                    the_title('<h1 class="jhon-smith-content-single-entry-header-title">', '</h1>');
                    ?>
                </header><!-- .jhon-smith-content-single-entry-header -->

                <div class="jhon-smith-content-single-entry-meta">
                    <?php
                    jhon_smith_posted_on();
                    jhon_smith_posted_comments();
                    jhon_smith_edit_post_link();
                    ?>
                </div>

                <figure class="jhon-smith-attachment-image">
                    <?php
                    /**
                     * Filter the default image attachment size.
                     *
                     * @since Jhon Smith 1.0.0
                     *
                     */
                    echo wp_get_attachment_image(get_the_ID(), 'full');
                    ?>

                    <?php if (wp_get_attachment_caption()) : ?>
                        <figcaption class="jhon-smith-attachment-image-caption-text">
                            <?php esc_html_e(wp_get_attachment_caption()); ?>
                        </figcaption>
                    <?php endif; ?>

                </figure><!-- .jhon-smith-attachment-image -->

            </article><!-- #post-<?php the_ID(); ?> -->

            <?php
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