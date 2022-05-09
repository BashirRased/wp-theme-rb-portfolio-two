<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package WordPress
 * @subpackage RB Free Theme
 * @since Jhon Smith 1.0.0
 */

$jhon_smith_unique_id = wp_unique_id('search-form-');

$jhon_smith_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';

?>

<!-- Search Form -->
<form role="search" <?php echo esc_attr($jhon_smith_aria_label); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> class="jhon-smith-search-form" method="get" action="<?php echo esc_url(home_url('/')); ?>">

    <label for="<?php echo esc_attr($jhon_smith_unique_id); ?>"><?php _e('Search&hellip;', 'jhon-smith'); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?></label>

    <input type="search" id="<?php echo esc_attr($jhon_smith_unique_id); ?>" value="<?php echo get_search_query(); ?>" name="s" placeholder="<?php echo esc_attr('search', 'jhon-smith'); ?>" class="jhon-smith-search-box" />

    <button type="submit" class="jhon-smith-search-btn">
        <i class="fas fa-search"></i>
    </button>

</form><!-- .jhon-smith-search-form -->
