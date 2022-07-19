<?php
/**
 * Post format meta for this theme
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.0
 */

if(!function_exists('rb_portfolio_two_post_format_meta')) {
    function rb_portfolio_two_post_format_meta() { ?>        
        
        <!-- Sticky Post Format -->
        <?php if(is_sticky()): ?>
        <div class="rb-portfolio-two-posted-format-meta">
            <i class="fa-solid fa-bookmark"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rb-portfolio-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rb-portfolio-two'),
                esc_html__('Sticky', 'rb-portfolio-two')
            );
            ?>
        </div>
        <?php endif; ?>

        <!-- Password Post Format -->
        <?php if(post_password_required()): ?>
        <div class="rb-portfolio-two-posted-format-meta">
            <i class="fa-solid fa-lock"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rb-portfolio-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rb-portfolio-two'),
                esc_html__('Password', 'rb-portfolio-two')
            );
            ?>
        </div>
        <?php endif; ?>

         <!-- Password Post Format -->
         <?php if(post_password_required()): ?>
        <div class="rb-portfolio-two-posted-format-meta">
            <i class="fa-solid fa-lock"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rb-portfolio-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rb-portfolio-two'),
                esc_html__('Password', 'rb-portfolio-two')
            );
            ?>
        </div>
        <?php endif; ?>
        
        <?php
        $post_format = get_post_format();

        // Image Post Format
        if('image' === $post_format): ?>
        <div class="rb-portfolio-two-posted-format-meta">
            <i class="fa-solid fa-image"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rb-portfolio-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rb-portfolio-two'),
                esc_html__('Image', 'rb-portfolio-two')
            );
            ?>
        </div>
        
        <?php
        // Gallery Post Format
        elseif('gallery' === $post_format):
        ?>
        <div class="rb-portfolio-two-posted-format-meta">
            <i class="fa-solid fa-icons"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rb-portfolio-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rb-portfolio-two'),
                esc_html__('Gallery', 'rb-portfolio-two')
            );
            ?>
        </div>
        
        <?php
        // Audio Post Format
        elseif('audio' === $post_format):
        ?>
        <div class="rb-portfolio-two-posted-format-meta">
            <i class="fa-solid fa-music"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rb-portfolio-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rb-portfolio-two'),
                esc_html__('Audio', 'rb-portfolio-two')
            );
            ?>
        </div>
        
        <?php
        // Video Post Format
        elseif('video' === $post_format):
        ?>
        <div class="rb-portfolio-two-posted-format-meta">
            <i class="fa-solid fa-video"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rb-portfolio-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rb-portfolio-two'),
                esc_html__('Video', 'rb-portfolio-two')
            );
            ?>
        </div>
        
        <?php
        // Link Post Format
        elseif('link' === $post_format):
        ?>
        <div class="rb-portfolio-two-posted-format-meta">
            <i class="fa-solid fa-link"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rb-portfolio-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rb-portfolio-two'),
                esc_html__('Link', 'rb-portfolio-two')
            );
            ?>
        </div>
        
        <?php
        // Quote Post Format
        elseif('quote' === $post_format):
        ?>
        <div class="rb-portfolio-two-posted-format-meta">
            <i class="fa-brands fa-rocketchat"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rb-portfolio-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rb-portfolio-two'),
                esc_html__('Quote', 'rb-portfolio-two')
            );
            ?>
        </div>
        
        <?php
        // Status Post Format
        elseif('status' === $post_format):
        ?>
        <div class="rb-portfolio-two-posted-format-meta">
            <i class="fa-solid fa-clipboard"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rb-portfolio-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rb-portfolio-two'),
                esc_html__('Status', 'rb-portfolio-two')
            );
            ?>
        </div>
        
        <?php
        // Aside Post Format
        elseif('aside' === $post_format):
        ?>
        <div class="rb-portfolio-two-posted-format-meta">
            <i class="fa-solid fa-image-portrait"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rb-portfolio-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rb-portfolio-two'),
                esc_html__('Aside', 'rb-portfolio-two')
            );
            ?>
        </div>
        
        <?php
        // Chat Post Format
        elseif('chat' === $post_format):
        ?>
        <div class="rb-portfolio-two-posted-format-meta">
            <i class="fa-solid fa-comments"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rb-portfolio-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rb-portfolio-two'),
                esc_html__('Chat', 'rb-portfolio-two')
            );
            ?>
        </div>	
        
        <?php
        // Standard Post Format
        else:
        ?>
        <div class="rb-portfolio-two-posted-format-meta">
            <i class="fa-brands fa-blogger-b"></i>
            <?php
            printf(
                /* translators:
                %1$s: Post Type: Common Text.
                %2$s: Post Type: Change Text.
                */
                '%1$s <strong class="rb-portfolio-two-posted-format-meta-text">%2$s</strong>',
                esc_html__('Post Type:', 'rb-portfolio-two'),
                esc_html__('Standard', 'rb-portfolio-two')
            );
            ?>
        </div>
        
        <?php endif;
    }
}