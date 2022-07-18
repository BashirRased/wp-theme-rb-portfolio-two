<?php
/**
 * Custom post thumbnail tags for this theme
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.0
 */

 /**
 * Determines if post thumbnail can be displayed.
 *
 * @since RB Portfolio Two 1.0.0
 *
 * @return bool
 */
function rbp_two_can_show_post_thumbnail() {
	/**
	 * Filters whether post thumbnail can be displayed.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @param bool $show_post_thumbnail Whether to show post thumbnail.
	 */

	return apply_filters(
		'rbp_two_can_show_post_thumbnail', ! post_password_required() && ! is_attachment() && has_post_thumbnail()
	);
}

if (!function_exists('rbp_two_post_thumbnail')) {
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 *
	 * @since RB Portfolio Two 1.0.0
	 *
	 * @return void
	 */
	function rbp_two_post_thumbnail() {
		if (!rbp_two_can_show_post_thumbnail()) {
			return;
		}
		?>

		<?php if (is_singular()) : ?>

			<figure class="rbp-two-post-thumbnail">
				<?php
				// Lazy-loading attributes should be skipped for thumbnails since they are immediately in the viewport.
				the_post_thumbnail('post-thumbnail', array( 'loading' => false));
				?>

				<?php if (wp_get_attachment_caption(get_post_thumbnail_id())) : ?>
					<figcaption class="wp-caption-text">
                        <?php echo wp_kses_post(wp_get_attachment_caption(get_post_thumbnail_id())); ?>
                    </figcaption>
				<?php endif; ?>

			</figure><!-- .post-thumbnail -->

		<?php elseif(! get_post_format() && !is_singular() ) : ?>

			<figure class="rbp-two-post-thumbnail">

				<a class="rbp-two-post-thumbnail-inner alignwide" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('post-thumbnail'); ?>
				</a>
				
                <?php if (wp_get_attachment_caption(get_post_thumbnail_id())) : ?>
					<figcaption class="wp-caption-text">
                        <?php echo wp_kses_post(wp_get_attachment_caption(get_post_thumbnail_id())); ?>
                    </figcaption>
				<?php endif; ?>

			</figure>

		<?php endif; ?>
		<?php
	}
}