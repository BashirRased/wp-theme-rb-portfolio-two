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
 * @subpackage Jhon Smith
 * @version Jhon Smith 1.0.1
 * @since Jhon Smith 1.0.1
 */

get_header(); ?>

<div id="jhon-smith-page-content" class="jhon-smith-main-page">
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
			<main id="jhon-smith-primary" class="<?php echo esc_attr($jhon_smith_page_content_class); ?>" role="main">

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