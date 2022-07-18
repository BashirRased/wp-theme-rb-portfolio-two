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

<div id="rb-portfolio-two-page-content" class="rb-portfolio-two-error-404-page">
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

            <main id="rb-portfolio-two-primary" class="<?php echo esc_attr($rb_portfolio_two_page_content_class); ?>">

                <section class="rb-portfolio-two-error-404-page-content">

                    <header class="rb-portfolio-two-error-page-header alignwide">
                        <h1 class="rb-portfolio-two-error-page-header-title">
                            <?php esc_html_e('404', 'rb-portfolio-two'); ?>
                        </h1>
                        <h4 class="rb-portfolio-two-error-page-header-subtitle">
                            <?php esc_html_e('Page Not Found', 'rb-portfolio-two'); ?>
                        </h4>
                    </header><!-- .rb-portfolio-two-error-page-header -->

                    <div class="rb-portfolio-two-error-page-body">
                        <p>
                            <?php esc_html_e('The requested URL was not found. Something was wrong, please try again. Search you correct keywords or go to home page.', 'rb-portfolio-two'); ?>
                        </p>
                        <?php get_search_form(); ?>
                        <a class="rb-portfolio-two-btn" href="<?php echo esc_url(home_url('/')); ?>">
                            <?php esc_html_e('Go To Home Page', 'rb-portfolio-two'); ?>
                        </a>
                    </div><!-- .rb-portfolio-two-error-page-body -->
                
                </section><!-- .rb-portfolio-two-error-404-page-content -->

            </main><!-- #rb-portfolio-two-primary -->

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