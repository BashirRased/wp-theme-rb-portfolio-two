<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('rbp-two-post-item'); ?>>

	<?php rbp_two_post_format_meta(); ?>

	<?php rbp_two_post_thumbnail(); ?>

	<header class="rbp-two-content-entry-header">
		<?php				
		the_title(
			sprintf(
			'<h2 class="rbp-two-content-header-entry-title">
				<a href="%s">',esc_url(get_permalink())), '</a>
			</h2>'
		);
		?>	
	</header><!-- .rbp-two-content-entry-header -->

	<div class="rbp-two-content-entry-meta">
		<?php
		rbp_two_posted_by();
		rbp_two_posted_on();
		rbp_two_posted_category();
		rbp_two_posted_comments();
		rbp_two_edit_post_link();
		?>
	</div>

	<div class="rbp-two-content-entry-body">
		<?php
		get_template_part('template-parts/excerpt/excerpt', get_post_format());
		?>
	</div><!-- .rbp-two-content-entry-body -->

</article><!-- #post-<?php the_ID(); ?> -->