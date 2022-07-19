<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.3
 * @since RB Portfolio Two 1.0.3
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>

	<?php
		do_action ( 'rb_portfolio_two_post_format' );
		do_action ( 'rb_portfolio_two_post_thumbnail' );
	?>

	<header class="content-entry-header">
		<?php				
		the_title(
			sprintf(
			'<h2 class="content-header-entry-title">
				<a href="%s">',esc_url(get_permalink())), '</a>
			</h2>'
		);
		?>	
	</header><!-- .content-entry-header -->

	<div class="content-entry-meta">
		<?php
			do_action ( 'rb_portfolio_two_post_by' );
			do_action ( 'rb_portfolio_two_post_on' );
			do_action ( 'rb_portfolio_two_post_category' );
			do_action ( 'rb_portfolio_two_post_comments' );
			do_action ( 'rb_portfolio_two_post_edit' );
		?>
	</div>

	<div class="content-entry-body">
		<?php
		get_template_part('template-parts/excerpt/excerpt', get_post_format());
		?>
	</div><!-- .content-entry-body -->

</article><!-- #post-<?php the_ID(); ?> -->