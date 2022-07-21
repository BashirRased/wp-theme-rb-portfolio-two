<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.4
 * @since RB Portfolio Two 1.0.3
 */

?>

<section class="no-result">
	<header class="content-none-header alignwide">
		<?php if (is_search()) : ?>

			<h2 class="content-none-header-title">
				<?php
				printf(
					/* translators: %s: Search term. */
					esc_html__('Results for "%s"', 'rb-portfolio-two'),
					'<span class="content-none-search-keyword">'.esc_html(get_search_query()).'</span>'
				);
				?>
			</h2>

		<?php else : ?>

			<h2 class="content-none-header-title">
                <?php esc_html_e('Nothing here', 'rb-portfolio-two'); ?>
            </h2>

		<?php endif; ?>
	</header><!-- .content-none-header -->

	<div class="content-none-body">

		<?php if (is_home() && current_user_can('publish_posts') ) : ?>

			<?php
			printf(
				'<p>'.wp_kses(
					/* translators: %s: Link to WP admin new post page. */
					__('Ready to publish your first post? <a href="%s">Get started here</a>.', 'rb-portfolio-two'),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				).'</p>',
				esc_url(admin_url('post-new.php'))
			);
			?>

		<?php elseif (is_search()) : ?>

			<p>
				<?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'rb-portfolio-two'); ?>
			</p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p>
				<?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'rb-portfolio-two'); ?>
			</p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .content-none-body -->

</section><!-- .no-result -->