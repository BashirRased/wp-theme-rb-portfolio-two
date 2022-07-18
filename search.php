<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.1
 */

get_header();

?>

<div id="rbp-two-page-content" class="rbp-two-search-page">
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
				<?php
				if ( have_posts() ) {
					?>
					<header class="rbp-two-search-page-header alignwide">

						<h2 class="rbp-two-search-page-header-title">
							<?php
							printf(
								/* translators: %s: Search term. */
								esc_html__('Results for "%s"','rbp-two'),
								'<span>'.esc_html(get_search_query()).'</span>'
							);
							?>
						</h2><!-- .rbp-two-search-page-title -->

						<p class="rbp-two-search-result-count">
						<?php
						printf(
							esc_html(
								/* translators: %d: The number of search results. */
								_n(
									'We found %d result for your search.',
									'We found %d results for your search.',
									(int) $wp_query->found_posts,
									'rbp-two'
								)
							),
							(int) $wp_query->found_posts
						);
						?>
						</p><!-- .rbp-two-search-result-count -->

					</header><!-- .rbp-two-search-page-header -->
					
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
						'mid_size'  => 2
					));	

					// If no content, include the "No posts found" template.
				} else {
					get_template_part('template-parts/content/content-none');
				}
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