<?php
/**
 * Custom template post meta for this theme
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.0
 */

/* Post Author Meta */
if (!function_exists('rbp_two_posted_by')) {
	/**
	 * Prints HTML with meta information about theme author.
	 *
	 * @since RB Portfolio Two 1.0.0
	 *
	 * @return void
	 */
	function rbp_two_posted_by() {
		if (! get_the_author_meta('description') && post_type_supports(get_post_type(), 'author')) {
			echo '<span class="rbp-two-posted-by"><i class="fas fa-user"></i>';
			printf(
				/* translators: %s: Author name. */
				esc_html__(' %s', 'rbp-two'),
				'<a href="'.esc_url(get_author_posts_url( get_the_author_meta('ID'))).'" rel="author">'.esc_html(get_the_author()).'</a>'
			);
			echo '</span>';
		}
	}
}

/* Post Date Meta */
if (!function_exists('rbp_two_posted_on')) {
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 *
	 * @since RB Portfolio Two 1.0.0
	 *
	 * @return void
	 */
	function rbp_two_posted_on() {
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
		echo '<span class="rbp-two-posted-on"><i class="fas fa-calendar-alt"></i>';
		printf(
			'%s',
			$time_string // phpcs:ignore WordPress.Security.EscapeOutput
		);
		echo '</span>';
	}
}

/* Post Categories Meta */
if(!function_exists('rbp_two_posted_category')){
	function rbp_two_posted_category(){
		/* translators: Used between list items, there is a space after the comma. */
		$categories_list = get_the_category_list(__(', ', 'rbp-two') );
		if ($categories_list) {
			echo '<span class="rbp-two-posted-categories"><i class="fas fa-folder-open"></i>';
			printf(
				/* translators: %s: List of categories. */
				esc_html__('%s', 'rbp-two'),
				$categories_list // phpcs:ignore WordPress.Security.EscapeOutput
			);
			echo '</span>';
		}
	}
}

/* Post Comments Meta */
if (!function_exists('rbp_two_posted_comments')) {
	function rbp_two_posted_comments() {
		echo '<span class="rbp-two-posted-comments"><i class="fas fa-comments"></i>';
		comments_popup_link(
			__('No Comments','rbp-two'),
			__('1 Comment','rbp-two'),
			__('% Comments','rbp-two'),
			'rbp-two-posted-comments-btn',
			__('Comments Off','rbp-two')
		);
		echo '</span>';
	}
}

/* Post Edit Meta */
if(!function_exists('rbp_two_edit_post_link')) {
    
    function rbp_two_edit_post_link() {
        // Edit post link.
        edit_post_link(
            // $text Parameter
            __('Edit', 'rbp-two'),

            // $before Parameter
            '<span class="rbp-two-posted-edit">
			<i class="fas fa-edit"></i>',

            // $after Parameter
            '</span>',

            // $id Parameter
            null,

            // $class Parameter (For Edit Text)
            'rbp-two-post-edit-link'
        );
    }

}

/* Post Tag Meta */
if(!function_exists('rbp_two_tag_list')) {
    
    function rbp_two_tag_list (){
        
        if (has_tag()) {
			echo '<footer class="rbp-two-content-single-entry-footer">';
            echo get_the_tag_list(
                // $before Parameter
                '<span class="rbp-two-posted-tags"><i class="fas fa-tags"></i> ',
    
                // $sep Parameter
                __(', ', 'rbp-two'),
    
                // $after Parameter
                '</span>',
    
                // $post_id Parameter
                null
            );
			echo '</footer>';
        } 

    }
}