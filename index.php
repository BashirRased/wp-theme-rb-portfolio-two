<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.1
 */

get_header(); ?>

<div id="rb-portfolio-two-page-content" class="rb-portfolio-two-main-page">
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
			<main id="rb-portfolio-two-primary" class="<?php echo esc_attr($rb_portfolio_two_page_content_class); ?>" role="main">

				<?php
				if (have_posts()) {

					// Load posts loop.
					while (have_posts()) {
						the_post();

						get_template_part('template-parts/content/content');
					}

					// Post Pagination.
					the_posts_pagination(array(
						// Previous & Next Button Set
						'prev_text' => '<i class="fas fa-chevron-left"></i>',
						'next_text' => '<i class="fas fa-chevron-right"></i>'
					));	

				} else {

					// If no content, include the "No posts found" template.
					get_template_part('template-parts/content/content-none');

				}
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