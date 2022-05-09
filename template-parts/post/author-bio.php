<?php
/**
 * The template for displaying author info below posts.
 *
 * @package WordPress
 * @subpackage RB Free Theme
 * @since Jhon Smith 1.0.0
 */

?>
<?php if ((bool) get_the_author_meta('description') && post_type_supports(get_post_type(), 'author') ) : ?>
	<div class="jhon-smith-author-bio <?php echo get_option( 'show_avatars') ? 'jhon-smith-show-avatars' : ''; ?>">
		<?php echo get_avatar( get_the_author_meta( 'ID' ), '85' ); ?>

		<div class="jhon-smith-author-bio-content">
			<h2 class="jhon-smith-author-title">
			<?php
			printf(
				/* translators: %s: Author name. */
				esc_html__('%s', 'jhon-smith'),
				get_the_author()
			);
			?>
			</h2>
			<p class="jhon-smith-author-description">
				<?php the_author_meta('description'); ?>
			</p><!-- .author-description -->
			<?php
			printf(
				'<a class="jhon-smith-author-link jhon-smith-btn" href="%1$s" rel="author">%2$s</a>',
				esc_url( get_author_posts_url( get_the_author_meta('ID') ) ),
				sprintf(
					/* translators: %s: Author name. */
					esc_html__('View all of %s\'s posts.', 'jhon-smith'),
					get_the_author()
				)
			);
			?>
		</div><!-- .author-bio-content -->

	</div><!-- .author-bio -->
<?php endif; ?>
