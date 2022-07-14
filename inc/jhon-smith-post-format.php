<?php
/**
 * Post format meta for this theme
 *
 * @package RB Free Theme
 * @subpackage Jhon Smith
 * @version Jhon Smith 1.0.1
 * @since Jhon Smith 1.0.0
 */

if(!function_exists('jhon_smith_post_format_meta')) {
    function jhon_smith_post_format_meta() { ?>        
        
        <!-- Sticky Post Format -->
        <?php if(is_sticky()): ?>
        <div class="jhon-smith-posted-format-meta">
            <i class="fa-solid fa-bookmark"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="jhon-smith-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'jhon-smith'),
                esc_html__('Sticky', 'jhon-smith')
            );
            ?>
        </div>
        <?php endif; ?>

        <!-- Password Post Format -->
        <?php if(post_password_required()): ?>
        <div class="jhon-smith-posted-format-meta">
            <i class="fa-solid fa-lock"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="jhon-smith-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'jhon-smith'),
                esc_html__('Password', 'jhon-smith')
            );
            ?>
        </div>
        <?php endif; ?>

         <!-- Password Post Format -->
         <?php if(post_password_required()): ?>
        <div class="jhon-smith-posted-format-meta">
            <i class="fa-solid fa-lock"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="jhon-smith-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'jhon-smith'),
                esc_html__('Password', 'jhon-smith')
            );
            ?>
        </div>
        <?php endif; ?>
        
        <?php
        $post_format = get_post_format();

        // Image Post Format
        if('image' === $post_format): ?>
        <div class="jhon-smith-posted-format-meta">
            <i class="fa-solid fa-image"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="jhon-smith-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'jhon-smith'),
                esc_html__('Image', 'jhon-smith')
            );
            ?>
        </div>
        
        <?php
        // Gallery Post Format
        elseif('gallery' === $post_format):
        ?>
        <div class="jhon-smith-posted-format-meta">
            <i class="fa-solid fa-icons"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="jhon-smith-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'jhon-smith'),
                esc_html__('Gallery', 'jhon-smith')
            );
            ?>
        </div>
        
        <?php
        // Audio Post Format
        elseif('audio' === $post_format):
        ?>
        <div class="jhon-smith-posted-format-meta">
            <i class="fa-solid fa-music"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="jhon-smith-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'jhon-smith'),
                esc_html__('Audio', 'jhon-smith')
            );
            ?>
        </div>
        
        <?php
        // Video Post Format
        elseif('video' === $post_format):
        ?>
        <div class="jhon-smith-posted-format-meta">
            <i class="fa-solid fa-video"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="jhon-smith-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'jhon-smith'),
                esc_html__('Video', 'jhon-smith')
            );
            ?>
        </div>
        
        <?php
        // Link Post Format
        elseif('link' === $post_format):
        ?>
        <div class="jhon-smith-posted-format-meta">
            <i class="fa-solid fa-link"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="jhon-smith-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'jhon-smith'),
                esc_html__('Link', 'jhon-smith')
            );
            ?>
        </div>
        
        <?php
        // Quote Post Format
        elseif('quote' === $post_format):
        ?>
        <div class="jhon-smith-posted-format-meta">
            <i class="fa-brands fa-rocketchat"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="jhon-smith-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'jhon-smith'),
                esc_html__('Quote', 'jhon-smith')
            );
            ?>
        </div>
        
        <?php
        // Status Post Format
        elseif('status' === $post_format):
        ?>
        <div class="jhon-smith-posted-format-meta">
            <i class="fa-solid fa-clipboard"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="jhon-smith-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'jhon-smith'),
                esc_html__('Status', 'jhon-smith')
            );
            ?>
        </div>
        
        <?php
        // Aside Post Format
        elseif('aside' === $post_format):
        ?>
        <div class="jhon-smith-posted-format-meta">
            <i class="fa-solid fa-image-portrait"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="jhon-smith-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'jhon-smith'),
                esc_html__('Aside', 'jhon-smith')
            );
            ?>
        </div>
        
        <?php
        // Chat Post Format
        elseif('chat' === $post_format):
        ?>
        <div class="jhon-smith-posted-format-meta">
            <i class="fa-solid fa-comments"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="jhon-smith-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'jhon-smith'),
                esc_html__('Chat', 'jhon-smith')
            );
            ?>
        </div>	
        
        <?php
        // Standard Post Format
        else:
        ?>
        <div class="jhon-smith-posted-format-meta">
            <i class="fa-brands fa-blogger-b"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="jhon-smith-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'jhon-smith'),
                esc_html__('Standard', 'jhon-smith')
            );
            ?>
        </div>
        
        <?php endif;
    }
}