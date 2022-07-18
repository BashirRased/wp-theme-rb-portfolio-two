<?php
/**
 * Post format meta for this theme
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.0
 */

if(!function_exists('rbp_two_post_format_meta')) {
    function rbp_two_post_format_meta() { ?>        
        
        <!-- Sticky Post Format -->
        <?php if(is_sticky()): ?>
        <div class="rbp-two-posted-format-meta">
            <i class="fa-solid fa-bookmark"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rbp-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rbp-two'),
                esc_html__('Sticky', 'rbp-two')
            );
            ?>
        </div>
        <?php endif; ?>

        <!-- Password Post Format -->
        <?php if(post_password_required()): ?>
        <div class="rbp-two-posted-format-meta">
            <i class="fa-solid fa-lock"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rbp-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rbp-two'),
                esc_html__('Password', 'rbp-two')
            );
            ?>
        </div>
        <?php endif; ?>

         <!-- Password Post Format -->
         <?php if(post_password_required()): ?>
        <div class="rbp-two-posted-format-meta">
            <i class="fa-solid fa-lock"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rbp-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rbp-two'),
                esc_html__('Password', 'rbp-two')
            );
            ?>
        </div>
        <?php endif; ?>
        
        <?php
        $post_format = get_post_format();

        // Image Post Format
        if('image' === $post_format): ?>
        <div class="rbp-two-posted-format-meta">
            <i class="fa-solid fa-image"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rbp-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rbp-two'),
                esc_html__('Image', 'rbp-two')
            );
            ?>
        </div>
        
        <?php
        // Gallery Post Format
        elseif('gallery' === $post_format):
        ?>
        <div class="rbp-two-posted-format-meta">
            <i class="fa-solid fa-icons"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rbp-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rbp-two'),
                esc_html__('Gallery', 'rbp-two')
            );
            ?>
        </div>
        
        <?php
        // Audio Post Format
        elseif('audio' === $post_format):
        ?>
        <div class="rbp-two-posted-format-meta">
            <i class="fa-solid fa-music"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rbp-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rbp-two'),
                esc_html__('Audio', 'rbp-two')
            );
            ?>
        </div>
        
        <?php
        // Video Post Format
        elseif('video' === $post_format):
        ?>
        <div class="rbp-two-posted-format-meta">
            <i class="fa-solid fa-video"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rbp-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rbp-two'),
                esc_html__('Video', 'rbp-two')
            );
            ?>
        </div>
        
        <?php
        // Link Post Format
        elseif('link' === $post_format):
        ?>
        <div class="rbp-two-posted-format-meta">
            <i class="fa-solid fa-link"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rbp-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rbp-two'),
                esc_html__('Link', 'rbp-two')
            );
            ?>
        </div>
        
        <?php
        // Quote Post Format
        elseif('quote' === $post_format):
        ?>
        <div class="rbp-two-posted-format-meta">
            <i class="fa-brands fa-rocketchat"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rbp-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rbp-two'),
                esc_html__('Quote', 'rbp-two')
            );
            ?>
        </div>
        
        <?php
        // Status Post Format
        elseif('status' === $post_format):
        ?>
        <div class="rbp-two-posted-format-meta">
            <i class="fa-solid fa-clipboard"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rbp-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rbp-two'),
                esc_html__('Status', 'rbp-two')
            );
            ?>
        </div>
        
        <?php
        // Aside Post Format
        elseif('aside' === $post_format):
        ?>
        <div class="rbp-two-posted-format-meta">
            <i class="fa-solid fa-image-portrait"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rbp-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rbp-two'),
                esc_html__('Aside', 'rbp-two')
            );
            ?>
        </div>
        
        <?php
        // Chat Post Format
        elseif('chat' === $post_format):
        ?>
        <div class="rbp-two-posted-format-meta">
            <i class="fa-solid fa-comments"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rbp-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rbp-two'),
                esc_html__('Chat', 'rbp-two')
            );
            ?>
        </div>	
        
        <?php
        // Standard Post Format
        else:
        ?>
        <div class="rbp-two-posted-format-meta">
            <i class="fa-brands fa-blogger-b"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rbp-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rbp-two'),
                esc_html__('Standard', 'rbp-two')
            );
            ?>
        </div>
        
        <?php endif;
    }
}