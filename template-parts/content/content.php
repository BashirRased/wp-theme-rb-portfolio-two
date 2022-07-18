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

<article id="post-<?php the_ID(); ?>" <?php post_class('rb-portfolio-two-post-item'); ?>>

	<?php rb_portfolio_two_post_format_meta(); ?>

	<?php rb_portfolio_two_post_thumbnail(); ?>

	<header class="rb-portfolio-two-content-entry-header">
		<?php				
		the_title(
			sprintf(
			'<h2 class="rb-portfolio-two-content-header-entry-title">
				<a href="%s">',esc_url(get_permalink())), '</a>
			</h2>'
		);
		?>	
	</header><!-- .rb-portfolio-two-content-entry-header -->

	<div class="rb-portfolio-two-content-entry-meta">
		<?php
		rb_portfolio_two_posted_by();
		rb_portfolio_two_posted_on();
		rb_portfolio_two_posted_category();
		rb_portfolio_two_posted_comments();
		rb_portfolio_two_edit_post_link();
		?>
	</div>

	<div class="rb-portfolio-two-content-entry-body">
		<?php
		get_template_part('template-parts/excerpt/excerpt', get_post_format());
		?>
	</div><!-- .rb-portfolio-two-content-entry-body -->

</article><!-- #post-<?php the_ID(); ?> -->