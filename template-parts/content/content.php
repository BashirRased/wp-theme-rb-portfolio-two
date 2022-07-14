<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage Jhon Smith
 * @version Jhon Smith 1.0.1
 * @since Jhon Smith 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('jhon-smith-post-item'); ?>>

	<?php jhon_smith_post_format_meta(); ?>

	<?php jhon_smith_post_thumbnail(); ?>

	<header class="jhon-smith-content-entry-header">
		<?php				
		the_title(
			sprintf(
			'<h2 class="jhon-smith-content-header-entry-title">
				<a href="%s">',esc_url(get_permalink())), '</a>
			</h2>'
		);
		?>	
	</header><!-- .jhon-smith-content-entry-header -->

	<div class="jhon-smith-content-entry-meta">
		<?php
		jhon_smith_posted_by();
		jhon_smith_posted_on();
		jhon_smith_posted_category();
		jhon_smith_posted_comments();
		jhon_smith_edit_post_link();
		?>
	</div>

	<div class="jhon-smith-content-entry-body">
		<?php
		get_template_part('template-parts/excerpt/excerpt', get_post_format());
		?>
	</div><!-- .jhon-smith-content-entry-body -->

</article><!-- #post-<?php the_ID(); ?> -->