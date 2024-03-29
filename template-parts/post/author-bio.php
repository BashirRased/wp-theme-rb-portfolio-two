<?php
/**
 * The template for displaying author info below posts.
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.6
 * @since RB Portfolio Two 1.0.3
 */

?>
<?php if ((bool) get_the_author_meta('description') && post_type_supports(get_post_type(), 'author') ) : ?>
	<div class="author-bio <?php echo get_option( 'show_avatars') ? 'rb-portfolio-two-show-avatars' : ''; ?>">
		<?php echo get_avatar( get_the_author_meta( 'ID' ), '85' ); ?>

		<div class="author-bio-content">
			<h2 class="author-title">
			<?php
			printf(
				/* translators: %s: Author name. */
				esc_html__('%s', 'rb-portfolio-two'),
				get_the_author()
			);
			?>
			</h2>
			<p class="author-description">
				<?php the_author_meta('description'); ?>
			</p><!-- .author-description -->
			<?php
			printf(
				'<a class="author-link rb-portfolio-two-btn" href="%1$s" rel="author">%2$s</a>',
				esc_url( get_author_posts_url( get_the_author_meta('ID') ) ),
				sprintf(
					/* translators: %s: Author name. */
					esc_html__('View all of %s\'s posts.', 'rb-portfolio-two'),
					get_the_author()
				)
			);
			?>
		</div><!-- .author-bio-content -->

	</div><!-- .author-bio -->
<?php endif; ?>
