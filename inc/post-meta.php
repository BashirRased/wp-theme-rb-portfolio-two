<?php
/**
 * Custom template post meta for this theme
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.6
 * @since RB Portfolio Two 1.0.6
 */

/* Post Author Meta */
if (!function_exists('rb_portfolio_two_custom_post_by')) {
	/**
	 * Prints HTML with meta information about theme author.
	 *
	 * @since RB Portfolio Two 1.0.3
	 *
	 * @return void
	 */
	function rb_portfolio_two_custom_post_by() {
		if (! get_the_author_meta('description') && post_type_supports(get_post_type(), 'author')) {
			echo '<span class="posted-by"><i class="fas fa-user"></i>';
			printf(
				/* translators: %s: Author name. */
				esc_html__(' %s', 'rb-portfolio-two'),
				'<a href="'.esc_url(get_author_posts_url( get_the_author_meta('ID'))).'" rel="author">'.esc_html(get_the_author()).'</a>'
			);
			echo '</span>';
		}
	}
}
add_action( 'rb_portfolio_two_post_by', 'rb_portfolio_two_custom_post_by' );

/* Post Date Meta */
if (!function_exists('rb_portfolio_two_custom_post_on')) {
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 *
	 * @since RB Portfolio Two 1.0.3
	 *
	 * @return void
	 */
	function rb_portfolio_two_custom_post_on() {
		$archive_year  = get_the_time('Y');
		$archive_month = get_the_time('m'); 
        $archive_day   = get_the_time('d');


		$time_string = '<a href="%1$s"><time class="entry-date published updated" datetime="%2$s">%3$s</time></a>';

		$time_string = sprintf(
			/* translators:
			%1$s: Publish date all posts URL.
			%2$s: Publish date format.
			%3$s: Publish date text.
			*/
			$time_string,
			esc_url(get_day_link($archive_year, $archive_month, $archive_day)),
			esc_attr(get_the_date(DATE_W3C)),
			esc_html(get_the_date())
		);
		echo '<span class="posted-on"><i class="fas fa-calendar-alt"></i>';
		printf(
			'%s',
			$time_string // phpcs:ignore WordPress.Security.EscapeOutput
		);
		echo '</span>';
	}
}
add_action( 'rb_portfolio_two_post_on', 'rb_portfolio_two_custom_post_on' );

/* Post Categories Meta */
if(!function_exists('rb_portfolio_two_custom_post_category')){
	function rb_portfolio_two_custom_post_category(){
		/* translators: Used between list items, there is a space after the comma. */
		$categories_list = get_the_category_list(__(', ', 'rb-portfolio-two') );
		if ($categories_list) {
			echo '<span class="posted-categories"><i class="fas fa-folder-open"></i>';
			printf(
				/* translators: %s: List of categories. */
				esc_html__('%s', 'rb-portfolio-two'),
				$categories_list // phpcs:ignore WordPress.Security.EscapeOutput
			);
			echo '</span>';
		}
	}
}
add_action( 'rb_portfolio_two_post_category', 'rb_portfolio_two_custom_post_category' );

/* Post Comments Meta */
if (!function_exists('rb_portfolio_two_custom_post_comments')) {

	function rb_portfolio_two_custom_post_comments() {
		echo '<span class="posted-comments"><i class="fas fa-comments"></i>';
		comments_popup_link(
			__('No Comments','rb-portfolio-two'),
			__('1 Comment','rb-portfolio-two'),
			__('% Comments','rb-portfolio-two'),
			'rb-portfolio-two-posted-comments-btn',
			__('Comments Off','rb-portfolio-two')
		);
		echo '</span>';
	}

}
add_action( 'rb_portfolio_two_post_comments', 'rb_portfolio_two_custom_post_comments' );

/* Post Edit Meta */
if(!function_exists('rb_portfolio_two_custom_post_edit')) {
    
    function rb_portfolio_two_custom_post_edit() {
        // Edit post link.
        edit_post_link(
            // $text Parameter
            __('Edit', 'rb-portfolio-two'),

            // $before Parameter
            '<span class="posted-edit">
			<i class="fas fa-edit"></i>',

            // $after Parameter
            '</span>',

            // $id Parameter
            null,

            // $class Parameter (For Edit Text)
            'rb-portfolio-two-post-edit-link'
        );
    }

}
add_action( 'rb_portfolio_two_post_edit', 'rb_portfolio_two_custom_post_edit');

/* Post Tag Meta */
if(!function_exists('rb_portfolio_two_custom_tag')) {
    
    function rb_portfolio_two_custom_tag (){
        
        if (has_tag()) {
			echo '<footer class="content-single-entry-footer">';
            echo get_the_tag_list(
                // $before Parameter
                '<span class="posted-tags"><i class="fas fa-tags"></i> ',
    
                // $sep Parameter
                __(', ', 'rb-portfolio-two'),
    
                // $after Parameter
                '</span>',
    
                // $post_id Parameter
                null
            );
			echo '</footer>';
        } 

    }
}
add_action( 'rb_portfolio_two_tag', 'rb_portfolio_two_custom_tag' );