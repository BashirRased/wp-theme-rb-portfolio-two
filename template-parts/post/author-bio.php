<?php
/**
 * The template for displaying author info below posts.
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.0
 */

?>
<?php if ((bool) get_the_author_meta('description') && post_type_supports(get_post_type(), 'author') ) : ?>
	<div class="rbp-two-author-bio <?php echo get_option( 'show_avatars') ? 'rbp-two-show-avatars' : ''; ?>">
		<?php echo get_avatar( get_the_author_meta( 'ID' ), '85' ); ?>

		<div class="rbp-two-author-bio-content">
			<h2 class="rbp-two-author-title">
			<?php
			printf(
				/* translators: %s: Author name. */
				esc_html__('%s', 'rbp-two'),
				get_the_author()
			);
			?>
			</h2>
			<p class="rbp-two-author-description">
				<?php the_author_meta('description'); ?>
			</p><!-- .author-description -->
			<?php
			printf(
				'<a class="rbp-two-author-link rbp-two-btn" href="%1$s" rel="author">%2$s</a>',
				esc_url( get_author_posts_url( get_the_author_meta('ID') ) ),
				sprintf(
					/* translators: %s: Author name. */
					esc_html__('View all of %s\'s posts.', 'rbp-two'),
					get_the_author()
				)
			);
			?>
		</div><!-- .author-bio-content -->

	</div><!-- .author-bio -->
<?php endif; ?>
