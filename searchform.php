<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.0
 */

$rbp_two_unique_id = wp_unique_id('search-form-');

$rbp_two_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';

?>

<!-- Search Form -->
<form role="search" <?php echo esc_attr($rbp_two_aria_label); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> class="rbp-two-search-form" method="get" action="<?php echo esc_url(home_url('/')); ?>">

    <label for="<?php echo esc_attr($rbp_two_unique_id); ?>"><?php _e('Search&hellip;', 'rbp-two'); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?></label>

    <input type="search" id="<?php echo esc_attr($rbp_two_unique_id); ?>" value="<?php echo get_search_query(); ?>" name="s" placeholder="<?php echo esc_attr('search', 'rbp-two'); ?>" class="rbp-two-search-box" />

    <button type="submit" class="rbp-two-search-btn">
        <i class="fas fa-search"></i>
    </button>

</form><!-- .rbp-two-search-form -->
