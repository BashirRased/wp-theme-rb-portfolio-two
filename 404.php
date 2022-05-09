<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage RB Free Theme
 * @since Jhon Smith 1.0.0
 */

get_header();

?>

<div id="jhon-smith-page-content" class="jhon-smith-error-404-page">
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

            <main id="jhon-smith-primary" class="<?php echo esc_attr(wp_kses_post($jhon_smith_page_content_class)); ?>" role="error">

                <section class="jhon-smith-error-404-page-content">

                    <header class="jhon-smith-error-page-header alignwide">
                        <h1 class="jhon-smith-error-page-header-title">
                            <?php esc_html_e('404', 'jhon-smith'); ?>
                        </h1>
                        <h4 class="jhon-smith-error-page-header-subtitle">
                            <?php esc_html_e('Page Not Found', 'jhon-smith'); ?>
                        </h4>
                    </header><!-- .jhon-smith-error-page-header -->

                    <div class="jhon-smith-error-page-body">
                        <p>
                            <?php esc_html_e('The requested URL was not found. Something was wrong, please try again. Search you correct keywords or go to home page.', 'jhon-smith'); ?>
                        </p>
                        <?php get_search_form(); ?>
                        <a class="jhon-smith-btn" href="<?php echo esc_url(home_url('/')); ?>">
                            <?php esc_html_e('Go To Home Page', 'jhon-smith'); ?>
                        </a>
                    </div><!-- .jhon-smith-error-page-body -->
                
                </section><!-- .jhon-smith-error-404-page-content -->

            </main><!-- #jhon-smith-primary -->

            <?php
			if(is_active_sidebar('jhon-smith-sidebar-right')){
				get_sidebar();
			}
			?>
        </div><!-- row end -->        
    </div><!-- container end -->
</div>
<?php
get_footer();