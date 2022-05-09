<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage RB Free Theme
 * @since Jhon Smith 1.0.0
 */

get_header();

?>

<div id="jhon-smith-page-content" class="jhon-smith-search-page">
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

			<main id="jhon-smith-primary" class="<?php echo esc_attr(wp_kses_post($jhon_smith_page_content_class)); ?>">
				<?php
				if ( have_posts() ) {
					?>
					<header class="jhon-smith-search-page-header alignwide">

						<h2 class="jhon-smith-search-page-header-title">
							<?php
							printf(
								/* translators: %s: Search term. */
								esc_html__('Results for "%s"','jhon-smith'),
								'<span>'.esc_html(get_search_query()).'</span>'
							);
							?>
						</h2><!-- .jhon-smith-search-page-title -->

						<p class="jhon-smith-search-result-count">
						<?php
						printf(
							esc_html(
								/* translators: %d: The number of search results. */
								_n(
									'We found %d result for your search.',
									'We found %d results for your search.',
									(int) $wp_query->found_posts,
									'jhon-smith'
								)
							),
							(int) $wp_query->found_posts
						);
						?>
						</p><!-- .jhon-smith-search-result-count -->

					</header><!-- .jhon-smith-search-page-header -->
					
					<?php
					// Start the Loop.
					while (have_posts()) {
						the_post();

						/*
						* Include the Post-Format-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Format name) and that will be used instead.
						*/
						get_template_part('template-parts/content/content');
					} // End the loop.
					
					// Post Pagination.
					the_posts_pagination(array(
						'mid_size'  => 2,
						'prev_text' => ('<i class="fas fa-chevron-left"></i>'),
						'next_text' => ('<i class="fas fa-chevron-right"></i>')
					));	

					// If no content, include the "No posts found" template.
				} else {
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