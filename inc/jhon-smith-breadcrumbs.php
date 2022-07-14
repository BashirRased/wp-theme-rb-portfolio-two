<?php
/**
 * Custom template breadcrumbs for this theme
 *
 * @package RB Free Theme
 * @subpackage Jhon Smith
 * @version Jhon Smith 1.0.1
 * @since Jhon Smith 1.0.0
 */

/* Post Author Meta */
if (!function_exists('jhon_smith_breadcrumbs')) {

	function jhon_smith_breadcrumbs() {
        
        // Front Page
        if(is_front_page() && is_home()): ?>

            <h2 class="jhon-smith-header-breadcrumbs-title">
                <?php echo esc_html('Home Page','jhon-smith'); ?>
            </h2>

            <nav class="jhon-smith-header-breadcrumbs-nav">

                <ul>

                    <li class="jhon-smith-header-breadcrumbs-icon">
                        <i class="fa-solid fa-house"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <?php echo esc_html('Home','jhon-smith'); ?>
                    </li>
                    
                </ul>
                
            </nav>

        <!-- Single Post -->
        <?php elseif(is_singular('post')): ?>

            <h2 class="jhon-smith-header-breadcrumbs-title">
                <?php echo esc_html('signle blog post','jhon-smith'); ?>
            </h2>

            <nav class="jhon-smith-header-breadcrumbs-nav">

                <ul>

                    <li class="jhon-smith-header-breadcrumbs-icon">
                        <i class="fa-solid fa-house"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Home','jhon-smith'); ?></a>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <?php
                    if(!empty(get_permalink(get_option('page_for_posts')))) :
                    ?>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"><?php echo esc_html('Blog','jhon-smith'); ?></a>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <?php endif; ?>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <?php echo esc_html(get_the_title(),'jhon-smith'); ?>
                    </li>
                    
                </ul>
                
            </nav>

        <!-- Single Page -->
        <?php elseif(is_singular('page')): ?>

            <h2 class="jhon-smith-header-breadcrumbs-title">
                <?php
                if(get_option( 'page_on_front')){
                    echo esc_html('Home page','jhon-smith');
                }
                else{
                    echo esc_html('signle page','jhon-smith');
                }
                ?>
            </h2>

            <nav class="jhon-smith-header-breadcrumbs-nav">

                <ul>

                    <li class="jhon-smith-header-breadcrumbs-icon">
                        <i class="fa-solid fa-house"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php echo esc_html('Home','jhon-smith'); ?>
                        </a>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <?php echo esc_html(get_the_title(),'jhon-smith'); ?>
                    </li>
                    
                </ul>
                
            </nav>

        <!-- Attachment Page -->
        <?php elseif(is_singular('attachment')): ?>

            <h2 class="jhon-smith-header-breadcrumbs-title">
                <?php echo esc_html('attachment page','jhon-smith'); ?>
            </h2>

            <nav class="jhon-smith-header-breadcrumbs-nav">

                <ul>

                    <li class="jhon-smith-header-breadcrumbs-icon">
                        <i class="fa-solid fa-house"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Home','jhon-smith'); ?></a>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <?php echo esc_html(get_the_title(),'jhon-smith'); ?>
                    </li>
                    
                </ul>
                
            </nav>

        <!-- Search Page -->
        <?php elseif(is_search()): ?>

            <h2 class="jhon-smith-header-breadcrumbs-title">
                <?php echo esc_html('search page','jhon-smith'); ?>
            </h2>

            <nav class="jhon-smith-header-breadcrumbs-nav">

                <ul>

                    <li class="jhon-smith-header-breadcrumbs-icon">
                        <i class="fa-solid fa-house"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Home','jhon-smith'); ?></a>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <?php
                        printf(
                            '%1$s<strong>%2$s</strong>',
                            /* translators:
                            %1$s: Normal Text.
                            %2$s: Color Text.
                            */
                            esc_html__('Search Keyword: ', 'jhon-smith'),
                            get_search_query()
                        );
                        ?>
                    </li>
                    
                </ul>
                
            </nav>

        <!-- 404 Error Page -->
        <?php elseif(is_404()): ?>

            <h2 class="jhon-smith-header-breadcrumbs-title">
                <?php echo esc_html('404 page','jhon-smith'); ?>
            </h2>

            <nav class="jhon-smith-header-breadcrumbs-nav">

                <ul>

                    <li class="jhon-smith-header-breadcrumbs-icon">
                        <i class="fa-solid fa-house"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Home','jhon-smith'); ?></a>
                    </li>
                    
                </ul>
                
            </nav>

        <!-- Author Page -->
        <?php elseif(is_author()): ?>

            <h2 class="jhon-smith-header-breadcrumbs-title">
                <?php echo esc_html('Author page','jhon-smith'); ?>
            </h2>

            <nav class="jhon-smith-header-breadcrumbs-nav">

                <ul>

                    <li class="jhon-smith-header-breadcrumbs-icon">
                        <i class="fa-solid fa-house"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Home','jhon-smith'); ?></a>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <?php echo esc_html(get_the_author(),'jhon-smith'); ?>
                    </li>
                    
                </ul>
                
            </nav>

        <!-- Year Archive -->
        <?php elseif(is_year()): ?>

        <h2 class="jhon-smith-header-breadcrumbs-title">
            <?php echo esc_html('Year Archive','jhon-smith'); ?>
        </h2>

        <nav class="jhon-smith-header-breadcrumbs-nav">

            <ul>

                <li class="jhon-smith-header-breadcrumbs-icon">
                    <i class="fa-solid fa-house"></i>
                </li>

                <li class="jhon-smith-header-breadcrumbs-text">
                    <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Home','jhon-smith'); ?></a>
                </li>

                <li class="jhon-smith-header-breadcrumbs-separator">
                    <i class="fa-solid fa-right-long"></i>
                </li>

                <li class="jhon-smith-header-breadcrumbs-text">
                    <?php echo esc_html(get_the_date("Y"),'jhon-smith'); ?>
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

            <h2 class="jhon-smith-header-breadcrumbs-title">
                <?php echo esc_html('Month Archive','jhon-smith'); ?>
            </h2>

            <nav class="jhon-smith-header-breadcrumbs-nav">

                <ul>

                    <li class="jhon-smith-header-breadcrumbs-icon">
                        <i class="fa-solid fa-house"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Home','jhon-smith'); ?></a>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <a href="<?php echo esc_url(get_year_link($archive_year)); ?>">
                            <?php echo esc_html(get_the_date("Y"),'jhon-smith'); ?>
                        </a>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <?php echo esc_html(get_the_date("F, Y"),'jhon-smith'); ?>
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

            <h2 class="jhon-smith-header-breadcrumbs-title">
                <?php echo esc_html('Day Archive','jhon-smith'); ?>
            </h2>

            <nav class="jhon-smith-header-breadcrumbs-nav">

                <ul>

                    <li class="jhon-smith-header-breadcrumbs-icon">
                        <i class="fa-solid fa-house"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Home','jhon-smith'); ?></a>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <a href="<?php echo esc_url(get_year_link($archive_year)); ?>">
                            <?php echo esc_html(get_the_date("Y"),'jhon-smith'); ?>
                        </a>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <a href="<?php echo esc_url(get_month_link($archive_year, $archive_month)); ?>">
                            <?php echo esc_html(get_the_date("F"),'jhon-smith'); ?>
                        </a>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <?php echo esc_html(get_the_date("l, jS F, Y"),'jhon-smith'); ?>
                    </li>
                    
                </ul>
                
            </nav>

        <!-- Tag Page -->
        <?php elseif(is_tag()): ?>

            <h2 class="jhon-smith-header-breadcrumbs-title">
                <?php echo esc_html('Tag page','jhon-smith'); ?>
            </h2>

            <p class="jhon-smith-header-breadcrumbs-description">
                <?php
                printf(
                    /* translators: %s: Archive Description. */
                    esc_html__('%s', 'jhon-smith'),
                    get_the_archive_description()
                );
                ?>
            </p>

            <nav class="jhon-smith-header-breadcrumbs-nav">

                <ul>

                    <li class="jhon-smith-header-breadcrumbs-icon">
                        <i class="fa-solid fa-house"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Home','jhon-smith'); ?></a>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
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

            <h2 class="jhon-smith-header-breadcrumbs-title">
                <?php echo esc_html('Category page','jhon-smith'); ?>
            </h2>

            <p class="jhon-smith-header-breadcrumbs-description">
                <?php
                printf(
                    /* translators: %s: Archive Description. */
                    esc_html__('%s', 'jhon-smith'),
                    get_the_archive_description()
                );
                ?>
            </p>

            <nav class="jhon-smith-header-breadcrumbs-nav">

                <ul>

                    <li class="jhon-smith-header-breadcrumbs-icon">
                        <i class="fa-solid fa-house"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Home','jhon-smith'); ?></a>
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

                    <li class="jhon-smith-header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <a href="<?php echo esc_url(wp_kses_post($parent_term_link)); ?>">
                        <?php echo esc_html($parent_term_name,'jhon-smith'); ?>
                        </a>
                    </li>

                    <?php endforeach; ?>

                    <li class="jhon-smith-header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <?php echo esc_html($term_name,'jhon-smith'); ?>
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

            <h2 class="jhon-smith-header-breadcrumbs-title">
                <?php echo esc_html('Custom Taxonomy page','jhon-smith'); ?>
            </h2>

            <p class="jhon-smith-header-breadcrumbs-description">
                <?php
                printf(
                    /* translators: %s: Archive Description. */
                    esc_html__('%s', 'jhon-smith'),
                    get_the_archive_description()
                );
                ?>
            </p>

            <nav class="jhon-smith-header-breadcrumbs-nav">

                <ul>

                    <li class="jhon-smith-header-breadcrumbs-icon">
                        <i class="fa-solid fa-house"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php echo esc_html('Home','jhon-smith'); ?>
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

                    <li class="jhon-smith-header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <a href="<?php echo esc_url(wp_kses_post($parent_term_link)); ?>">
                        <?php
                        printf(
                            /* translators: Parent Term Name. */
                            '%s',
                            esc_html($parent_term_name, 'jhon-smith')
                        );
                        ?>
                        </a>
                    </li>

                    <?php endforeach; ?>

                    <li class="jhon-smith-header-breadcrumbs-separator">
                        <i class="fa-solid fa-right-long"></i>
                    </li>

                    <li class="jhon-smith-header-breadcrumbs-text">
                        <?php
                        printf(
                            /* translators: Term Name. */
                            '%s',
                            esc_html($term_name, 'jhon-smith')
                        );
                        ?>
                    </li>
                    
                </ul>
                
            </nav>

        <?php endif;

	}

}