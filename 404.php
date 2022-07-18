<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.1
 */

get_header();

?>

<div id="rbp-two-page-content" class="rbp-two-error-404-page">
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

            <main id="rbp-two-primary" class="<?php echo esc_attr($rbp_two_page_content_class); ?>">

                <section class="rbp-two-error-404-page-content">

                    <header class="rbp-two-error-page-header alignwide">
                        <h1 class="rbp-two-error-page-header-title">
                            <?php esc_html_e('404', 'rbp-two'); ?>
                        </h1>
                        <h4 class="rbp-two-error-page-header-subtitle">
                            <?php esc_html_e('Page Not Found', 'rbp-two'); ?>
                        </h4>
                    </header><!-- .rbp-two-error-page-header -->

                    <div class="rbp-two-error-page-body">
                        <p>
                            <?php esc_html_e('The requested URL was not found. Something was wrong, please try again. Search you correct keywords or go to home page.', 'rbp-two'); ?>
                        </p>
                        <?php get_search_form(); ?>
                        <a class="rbp-two-btn" href="<?php echo esc_url(home_url('/')); ?>">
                            <?php esc_html_e('Go To Home Page', 'rbp-two'); ?>
                        </a>
                    </div><!-- .rbp-two-error-page-body -->
                
                </section><!-- .rbp-two-error-404-page-content -->

            </main><!-- #rbp-two-primary -->

            <?php
			if(is_active_sidebar('rbp-two-sidebar-right')){
				get_sidebar();
			}
			?>
        </div><!-- row end -->        
    </div><!-- container end -->
</div>
<?php
get_footer();