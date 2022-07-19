<?php
/**
 * Displays the header site navigation.
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.3
 * @since RB Portfolio Two 1.0.3
 */

?>

<!--===== Header Desktop Menu Strat Here =====-->
<div class="col-lg-6 col-md-12">
    <div class="header-desktop-menu float-end">
        <?php
        if (has_nav_menu('header-menu')) {
            wp_nav_menu(array(
                'theme_location'        => 'header-menu',
                'container'             => 'nav'
            ));
        }
        ?>
    </div>
</div>
<!--===== Header Desktop Menu End Here =====-->

