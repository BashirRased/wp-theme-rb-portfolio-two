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

<article id="post-<?php the_ID(); ?>" <?php post_class('post-single-item'); ?>>

	<?php
		do_action ( 'rb_portfolio_two_post_format' );
		do_action ( 'rb_portfolio_two_post_thumbnail' );
	?>

	<header class="content-single-entry-header alignwide">
		<?php
		the_title('<h1 class="content-single-entry-header-title">', '</h1>');
		?>
	</header><!-- .content-single-entry-header -->

	<div class="content-single-entry-meta">
		<?php
			do_action ( 'rb_portfolio_two_post_by' );
			do_action ( 'rb_portfolio_two_post_on' );
			do_action ( 'rb_portfolio_two_post_category' );
			do_action ( 'rb_portfolio_two_post_comments' );
			do_action ( 'rb_portfolio_two_post_edit' );
		?>
	</div>

	<?php if (!empty(get_the_content()) ): ?>
	<div class="content-single-entry-body">
		<?php		
		the_content();
		wp_link_pages(
			array(
				// Start WP Link Pages Area
                'before'        => '<div class="wp-pages-link-area">',
                'after'         => '</div>'
			)
		);
		?>
	</div><!-- .content-single-entry-body -->
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->

<?php do_action ( 'rb_portfolio_two_tag' ); ?>

<?php if (!is_singular('attachment')): ?>
	<?php get_template_part('template-parts/post/author-bio' ); ?>
<?php endif; ?>

<?php
the_post_navigation(
	array(
		'prev_text' => '<i class="fa-solid fa-angle-left"></i> %title',
		'next_text' => '%title <i class="fa-solid fa-angle-right"></i>',
		'class' => 'rb-portfolio-two-post-navigation'
	)
);
?>