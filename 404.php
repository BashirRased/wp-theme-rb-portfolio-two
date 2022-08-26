<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.6
 * @since RB Portfolio Two 1.0.3
 */

get_header();

?>

<div id="page-content" class="error-404-page">
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

                <section class="error-404-page-content">

                    <header class="error-page-header alignwide">
                        <h1 class="error-page-header-title">
                            <?php esc_html_e('404', 'rb-portfolio-two'); ?>
                        </h1>
                        <h4 class="error-page-header-subtitle">
                            <?php esc_html_e('Page Not Found', 'rb-portfolio-two'); ?>
                        </h4>
                    </header><!-- .error-page-header -->

                    <div class="error-page-body">
                        <p>
                            <?php esc_html_e('The requested URL was not found. Something was wrong, please try again. Search you correct keywords or go to home page.', 'rb-portfolio-two'); ?>
                        </p>
                        <?php get_search_form(); ?>
                        <a class="btn" href="<?php echo esc_url(home_url('/')); ?>">
                            <?php esc_html_e('Go To Home Page', 'rb-portfolio-two'); ?>
                        </a>
                    </div><!-- .error-page-body -->
                
                </section><!-- .error-404-page-content -->

            </main><!-- #primary -->

            <?php
			if(is_active_sidebar('rb-portfolio-two-sidebar-right')){
				get_sidebar();
			}
			?>
        </div><!-- row end -->        
    </div><!-- container end -->
</div>
<?php
get_footer();