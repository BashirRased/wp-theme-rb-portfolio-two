<?php
/**
 * Custom template breadcrumbs for this theme
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.7
 * @since RB Portfolio Two 1.0.3
 */

/* Post Author Meta */
if ( !function_exists( 'custom_breadcrumbs' ) ) {

	function custom_breadcrumbs() {
        
        // Front Page
        if(is_front_page() && is_home()): ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html('Home Page','rb-portfolio-two'); ?>
            </h2>

            <nav class="header-breadcrumbs-nav">

                <ul>

                    <li class="header-breadcrumbs-icon">
                        <i class="fa-solid fa-house"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <?php echo esc_html('Home','rb-portfolio-two'); ?>
                    </li>
                    
                </ul>
                
            </nav>

        <!-- Single Post -->
        <?php elseif(is_singular('post')): ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html('signle blog post','rb-portfolio-two'); ?>
            </h2>

            <nav class="header-breadcrumbs-nav">

                <ul>

                    <li class="header-breadcrumbs-icon">
                        <i class="fa-solid fa-house"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Home','rb-portfolio-two'); ?></a>
                    </li>

                    <li class="header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <?php echo esc_html(get_the_title(),'rb-portfolio-two'); ?>
                    </li>
                    
                </ul>
                
            </nav>

        <!-- Single Page -->
        <?php elseif(is_singular('page')): ?>

            <h2 class="header-breadcrumbs-title">
                <?php
                if(get_option( 'page_on_front')){
                    echo esc_html('Home page','rb-portfolio-two');
                }
                else{
                    echo esc_html('signle page','rb-portfolio-two');
                }
                ?>
            </h2>

            <nav class="header-breadcrumbs-nav">

                <ul>

                    <li class="header-breadcrumbs-icon">
                        <i class="fa-solid fa-house"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php echo esc_html('Home','rb-portfolio-two'); ?>
                        </a>
                    </li>

                    <li class="header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <?php echo esc_html(get_the_title(),'rb-portfolio-two'); ?>
                    </li>
                    
                </ul>
                
            </nav>

        <!-- Attachment Page -->
        <?php elseif(is_singular('attachment')): ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html('attachment page','rb-portfolio-two'); ?>
            </h2>

            <nav class="header-breadcrumbs-nav">

                <ul>

                    <li class="header-breadcrumbs-icon">
                        <i class="fa-solid fa-house"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Home','rb-portfolio-two'); ?></a>
                    </li>

                    <li class="header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <?php echo esc_html(get_the_title(),'rb-portfolio-two'); ?>
                    </li>
                    
                </ul>
                
            </nav>

        <!-- Search Page -->
        <?php elseif(is_search()): ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html('search page','rb-portfolio-two'); ?>
            </h2>

            <nav class="header-breadcrumbs-nav">

                <ul>

                    <li class="header-breadcrumbs-icon">
                        <i class="fa-solid fa-house"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Home','rb-portfolio-two'); ?></a>
                    </li>

                    <li class="header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <?php
                        printf(
                            '%1$s<strong>%2$s</strong>',
                            /* translators:
                            %1$s: Normal Text.
                            %2$s: Color Text.
                            */
                            esc_html__('Search Keyword: ', 'rb-portfolio-two'),
                            get_search_query()
                        );
                        ?>
                    </li>
                    
                </ul>
                
            </nav>

        <!-- 404 Error Page -->
        <?php elseif(is_404()): ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html('404 page','rb-portfolio-two'); ?>
            </h2>

            <nav class="header-breadcrumbs-nav">

                <ul>

                    <li class="header-breadcrumbs-icon">
                        <i class="fa-solid fa-house"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Home','rb-portfolio-two'); ?></a>
                    </li>
                    
                </ul>
                
            </nav>

        <!-- Author Page -->
        <?php elseif(is_author()): ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html('Author page','rb-portfolio-two'); ?>
            </h2>

            <nav class="header-breadcrumbs-nav">

                <ul>

                    <li class="header-breadcrumbs-icon">
                        <i class="fa-solid fa-house"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Home','rb-portfolio-two'); ?></a>
                    </li>

                    <li class="header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <?php echo esc_html(get_the_author(),'rb-portfolio-two'); ?>
                    </li>
                    
                </ul>
                
            </nav>

        <!-- Year Archive -->
        <?php elseif(is_year()): ?>

        <h2 class="header-breadcrumbs-title">
            <?php echo esc_html('Year Archive','rb-portfolio-two'); ?>
        </h2>

        <nav class="header-breadcrumbs-nav">

            <ul>

                <li class="header-breadcrumbs-icon">
                    <i class="fa-solid fa-house"></i>
                </li>

                <li class="header-breadcrumbs-text">
                    <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Home','rb-portfolio-two'); ?></a>
                </li>

                <li class="header-breadcrumbs-separator">
                    <i class="fa-solid fa-right-long"></i>
                </li>

                <li class="header-breadcrumbs-text">
                    <?php echo esc_html(get_the_date("Y"),'rb-portfolio-two'); ?>
                </li>
                
            </ul>
            
        </nav>

        <!-- Month Archive -->
        <?php
        elseif(is_month()):
        $archive_year  = get_the_time('Y');
		$archive_month = get_the_time('m'); 
        $archive_day   = get_the_time('d');
        ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html('Month Archive','rb-portfolio-two'); ?>
            </h2>

            <nav class="header-breadcrumbs-nav">

                <ul>

                    <li class="header-breadcrumbs-icon">
                        <i class="fa-solid fa-house"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Home','rb-portfolio-two'); ?></a>
                    </li>

                    <li class="header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <a href="<?php echo esc_url(get_year_link($archive_year)); ?>">
                            <?php echo esc_html(get_the_date("Y"),'rb-portfolio-two'); ?>
                        </a>
                    </li>

                    <li class="header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <?php echo esc_html(get_the_date("F, Y"),'rb-portfolio-two'); ?>
                    </li>
                    
                </ul>
                
            </nav>

        <!-- Day Archive -->
        <?php
        elseif(is_day()):
        $archive_year  = get_the_time('Y');
		$archive_month = get_the_time('m'); 
        $archive_day   = get_the_time('d');
        ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html('Day Archive','rb-portfolio-two'); ?>
            </h2>

            <nav class="header-breadcrumbs-nav">

                <ul>

                    <li class="header-breadcrumbs-icon">
                        <i class="fa-solid fa-house"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Home','rb-portfolio-two'); ?></a>
                    </li>

                    <li class="header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <a href="<?php echo esc_url(get_year_link($archive_year)); ?>">
                            <?php echo esc_html(get_the_date("Y"),'rb-portfolio-two'); ?>
                        </a>
                    </li>

                    <li class="header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <a href="<?php echo esc_url(get_month_link($archive_year, $archive_month)); ?>">
                            <?php echo esc_html(get_the_date("F"),'rb-portfolio-two'); ?>
                        </a>
                    </li>

                    <li class="header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <?php echo esc_html(get_the_date("l, jS F, Y"),'rb-portfolio-two'); ?>
                    </li>
                    
                </ul>
                
            </nav>

        <!-- Tag Page -->
        <?php elseif(is_tag()): ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html('Tag page','rb-portfolio-two'); ?>
            </h2>

            <p class="header-breadcrumbs-description">
                <?php
                printf(
                    /* translators: %s: Archive Description. */
                    esc_html__('%s', 'rb-portfolio-two'),
                    get_the_archive_description()
                );
                ?>
            </p>

            <nav class="header-breadcrumbs-nav">

                <ul>

                    <li class="header-breadcrumbs-icon">
                        <i class="fa-solid fa-house"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Home','rb-portfolio-two'); ?></a>
                    </li>

                    <li class="header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <?php single_tag_title(); ?>
                    </li>
                    
                </ul>
                
            </nav>

        <!-- Category Page -->
        <?php
        elseif(is_category()):

            // Category Taxonomy
            $current_cat_id = get_query_var('cat');
            $queried_object = get_queried_object();
            $taxonomy = $queried_object->taxonomy;

            // Single Category ID
            $term_id = $queried_object->term_id;
            $term_name = $queried_object->name;
            $term_link = get_term_link($term_id, $taxonomy);

            // Parent Category ID
            $parents_id  = get_ancestors( $term_id, $taxonomy);
            $parents_id = array_reverse($parents_id);
        ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html('Category page','rb-portfolio-two'); ?>
            </h2>

            <p class="header-breadcrumbs-description">
                <?php
                printf(
                    /* translators: %s: Archive Description. */
                    esc_html__('%s', 'rb-portfolio-two'),
                    get_the_archive_description()
                );
                ?>
            </p>

            <nav class="header-breadcrumbs-nav">

                <ul>

                    <li class="header-breadcrumbs-icon">
                        <i class="fa-solid fa-house"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Home','rb-portfolio-two'); ?></a>
                    </li>

                    <?php
                    foreach($parents_id as $id):
                    $parent_term_link = get_term_link($id,$taxonomy);
                    $parent_term_name = get_term_by('id',$id,$taxonomy);
                    $array_list[] = array(
                        'link'=> $parent_term_link,
                        'title' => $parent_term_name->name,
                    );
                    $parent_term_name = $parent_term_name->name;
                    ?>

                    <li class="header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <a href="<?php echo esc_url(wp_kses_post($parent_term_link)); ?>">
                        <?php echo esc_html($parent_term_name,'rb-portfolio-two'); ?>
                        </a>
                    </li>

                    <?php endforeach; ?>

                    <li class="header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <?php echo esc_html($term_name,'rb-portfolio-two'); ?>
                    </li>
                    
                </ul>
                
            </nav>

        <!-- Custom Taxonomy Page -->
        <?php
        elseif(is_tax()):

            // Custom Taxonomy
            $queried_object = get_queried_object();
            $term_name = $queried_object->name;

            // Single Custom ID
            $term_id = $queried_object->term_id;
            $taxonomy = $queried_object->taxonomy;
            $term_link = get_term_link($term_id, $taxonomy);

            // Parent Custom ID
            $parents_id  = get_ancestors( $term_id, $taxonomy);
            $parents_id = array_reverse($parents_id);
        ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html('Custom Taxonomy page','rb-portfolio-two'); ?>
            </h2>

            <p class="header-breadcrumbs-description">
                <?php
                printf(
                    /* translators: %s: Archive Description. */
                    esc_html__('%s', 'rb-portfolio-two'),
                    get_the_archive_description()
                );
                ?>
            </p>

            <nav class="header-breadcrumbs-nav">

                <ul>

                    <li class="header-breadcrumbs-icon">
                        <i class="fa-solid fa-house"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php echo esc_html('Home','rb-portfolio-two'); ?>
                    </a>
                    </li>

                    <?php
                    foreach($parents_id as $id):
                        $parent_term_link = get_term_link( $id , $taxonomy);
                        $parent_term_name = get_term_by('id', $id, $taxonomy);
                        $array_list[] = array(
                            'link'=> $parent_term_link,
                            'title' => $parent_term_name->name,
                        );
                        $parent_term_name = $parent_term_name->name;
                    ?>

                    <li class="header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <a href="<?php echo esc_url(wp_kses_post($parent_term_link)); ?>">
                        <?php
                        printf(
                            /* translators: Parent Term Name. */
                            '%s',
                            esc_html($parent_term_name, 'rb-portfolio-two')
                        );
                        ?>
                        </a>
                    </li>

                    <?php endforeach; ?>

                    <li class="header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="header-breadcrumbs-text">
                        <?php
                        printf(
                            /* translators: Term Name. */
                            '%s',
                            esc_html($term_name, 'rb-portfolio-two')
                        );
                        ?>
                    </li>
                    
                </ul>
                
            </nav>

        <?php endif;

	}

}
add_action ( 'rb_portfolio_two_breadcrumbs', 'custom_breadcrumbs');