<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage Jhon Smith
 * @version Jhon Smith 1.0.1
 * @since Jhon Smith 1.0.1
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('jhon-smith-post-single-item'); ?>>

	<?php jhon_smith_post_format_meta(); ?>

	<?php jhon_smith_post_thumbnail(); ?>

	<header class="jhon-smith-content-single-entry-header alignwide">
		<?php
		the_title('<h1 class="jhon-smith-content-single-entry-header-title">', '</h1>');
		?>
	</header><!-- .jhon-smith-content-single-entry-header -->

	<div class="jhon-smith-content-single-entry-meta">
		<?php
		jhon_smith_posted_by();
		jhon_smith_posted_on();
		jhon_smith_posted_category();
		jhon_smith_posted_comments();
		jhon_smith_edit_post_link();
		?>
	</div>

	<?php if (!empty(get_the_content()) ): ?>
	<div class="jhon-smith-content-single-entry-body">
		<?php		
		the_content();
		wp_link_pages(
			array(
				// Start WP Link Pages Area
                'before'        => '<div class="jhon-smith-wp-pages-link-area">',
                'after'         => '</div>'
			)
		);
		?>
	</div><!-- .jhon-smith-content-single-entry-body -->
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->

<?php jhon_smith_tag_list(); ?>

<?php if (!is_singular('attachment')): ?>
	<?php get_template_part('template-parts/post/author-bio' ); ?>
<?php endif; ?>

<?php
the_post_navigation(
	array(
		'prev_text' => '<i class="fa-solid fa-angle-left"></i> %title',
		'next_text' => '%title <i class="fa-solid fa-angle-right"></i>',
		'class' => 'jhon-smith-post-navigation'
	)
);
?>