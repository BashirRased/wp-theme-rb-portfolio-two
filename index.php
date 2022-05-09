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
 * @package WordPress
 * @subpackage RB Free Theme
 * @since Jhon Smith 1.0.0
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
			<main id="jhon-smith-primary" class="<?php echo esc_attr(wp_kses_post($jhon_smith_page_content_class)); ?>"role="main" role="main">

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
						'next_text' => '<i class="fas fa-chevron-right"></i>',
						
						// Previous & Next Button Show/Hide (Values: true|false)
						// 'prev_next' => true,
						
						// You can set show total pages
						// 'total' => 7,
						// You can set currect class & aria-current your choice page number 
						// 'current' => 2,
						// You can set currect page aria-current value 
						// 'aria_current' => 'string',
						
						// Show/Hide All Pages (Values: false|true)
						// 'show_all' => false,
						// Show ... before last pages.
						// 'end_size' => 3,
						// Show ... currect page after & before pages.
						// 'mid_size' => 2,

						// <a> tag inside text
						// 'before_page_number' => '<span>',
						// 'after_page_number' => '</span>',

						// Set Page Number Link Without Home Url
						// 'base' => 'http://localhost/jhon-smith/%_%',
						// Set Page Number Link After Home Url Format
						// 'format' => '?paged=%#%',
						// Set Page Number Link After Format Value		
						// 'add_fragment' => '/string',
						// Page Number Show HTML Format (Values: plain(for <a> tag)|array|list(for <li> tag))
						// 'type' => 'list',
						// Values: false|true
						// 'add_args' => false,
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