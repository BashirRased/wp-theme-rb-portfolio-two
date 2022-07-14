<?php
/**
 * Displays header site branding
 *
 * @package RB Free Theme
 * @subpackage Jhon Smith
 * @version Jhon Smith 1.0.1
 * @since Jhon Smith 1.0.0
 */

$site_title    = get_bloginfo('name');
$site_tagline  = get_bloginfo('description', 'display');

?>
                  
<!--===== Header Logo Area Strat Here =====-->
<div class="jhon-smith-header-site-branding-area">
    
    <?php if (has_custom_logo()) : ?>
        <div class="jhon-smith-header-logo">
            <?php the_custom_logo(); ?>
        </div>
    <?php endif; ?>
    
    <?php if ($site_title): ?>
    <div class="jhon-smith-header-site-title-and-tagline">

        <h1 class="jhon-smith-header-site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php
                printf(
                    /* translators: Site Title. */
                    '%s',
                    esc_html($site_title, 'jhon-smith')
                );
                ?>
            </a>
        </h1>

        <?php if ($site_tagline && true === get_theme_mod( 'display_title_and_tagline', true)) : ?>
            <p class="jhon-smith-header-site-tagline">
                <?php
                printf(
                    /* translators: Site Tagline. */
                    '%s',
                    esc_html($site_tagline, 'jhon-smith')
                );
                ?>
            </p>
	    <?php endif; ?>

    </div>
    <?php endif; ?>

</div>
<!--===== Header Logo Area End Here =====-->