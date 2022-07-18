<?php
/**
 * Displays header site branding
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.0
 */

$site_title    = get_bloginfo('name');
$site_tagline  = get_bloginfo('description', 'display');

?>
                  
<!--===== Header Logo Area Strat Here =====-->
<div class="rb-portfolio-two-header-site-branding-area">
    
    <?php if (has_custom_logo()) : ?>
        <div class="rb-portfolio-two-header-logo">
            <?php the_custom_logo(); ?>
        </div>
    <?php endif; ?>
    
    <?php if ($site_title): ?>
    <div class="rb-portfolio-two-header-site-title-and-tagline">

        <h1 class="rb-portfolio-two-header-site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php
                printf(
                    /* translators: Site Title. */
                    '%s',
                    esc_html($site_title, 'rb-portfolio-two')
                );
                ?>
            </a>
        </h1>

        <?php if ($site_tagline && true === get_theme_mod( 'display_title_and_tagline', true)) : ?>
            <p class="rb-portfolio-two-header-site-tagline">
                <?php
                printf(
                    /* translators: Site Tagline. */
                    '%s',
                    esc_html($site_tagline, 'rb-portfolio-two')
                );
                ?>
            </p>
	    <?php endif; ?>

    </div>
    <?php endif; ?>

</div>
<!--===== Header Logo Area End Here =====-->