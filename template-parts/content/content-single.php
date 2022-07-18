<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.1
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('rbp-two-post-single-item'); ?>>

	<?php rbp_two_post_format_meta(); ?>

	<?php rbp_two_post_thumbnail(); ?>

	<header class="rbp-two-content-single-entry-header alignwide">
		<?php
		the_title('<h1 class="rbp-two-content-single-entry-header-title">', '</h1>');
		?>
	</header><!-- .rbp-two-content-single-entry-header -->

	<div class="rbp-two-content-single-entry-meta">
		<?php
		rbp_two_posted_by();
		rbp_two_posted_on();
		rbp_two_posted_category();
		rbp_two_posted_comments();
		rbp_two_edit_post_link();
		?>
	</div>

	<?php if (!empty(get_the_content()) ): ?>
	<div class="rbp-two-content-single-entry-body">
		<?php		
		the_content();
		wp_link_pages(
			array(
				// Start WP Link Pages Area
                'before'        => '<div class="rbp-two-wp-pages-link-area">',
                'after'         => '</div>'
			)
		);
		?>
	</div><!-- .rbp-two-content-single-entry-body -->
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->

<?php rbp_two_tag_list(); ?>

<?php if (!is_singular('attachment')): ?>
	<?php get_template_part('template-parts/post/author-bio' ); ?>
<?php endif; ?>

<?php
the_post_navigation(
	array(
		'prev_text' => '<i class="fa-solid fa-angle-left"></i> %title',
		'next_text' => '%title <i class="fa-solid fa-angle-right"></i>',
		'class' => 'rbp-two-post-navigation'
	)
);
?>