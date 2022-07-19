<?php
/**
 * The template for cmb2 metabox function.
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.2
 */

/*=============================================
***** Table of Metabox Content Start Here *****
===============================================
	01. Homepage Header Section
    02. Homepage About Me Section
        2.1. Homepage About Me Section Header
        2.2. Homepage About Me Section Content
            2.2.1. Homepage About Me Section Content Details Item Group
            2.2.2. Homepage About Me Section Content Buttons Item Group
    03. Homepage My Skills Section
        3.1. Homepage My Skills Section Header
        3.2. Homepage My Skills Section Content
            3.2.1. Homepage My Skills Section Content Design Skills Item Group
            3.2.2. Homepage My Skills Section Content Development Skills Item Group
    04. Homepage Hire Me Section
    05. Homepage My Services Section
        5.1. Homepage My Services Section Header
    06. Homepage CountUp Section
    07. Homepage Testimonials Section
=============================================
***** Table of Metabox Content End Here *****
===========================================*/

if ( !function_exists( 'rb_portfolio_two_metaboxes' ) ) {

    function rb_portfolio_two_metaboxes() {

        /*************************************************
        ===== 01. Homepage Header Section Start Here =====
        *************************************************/
        $rb_portfolio_two_metabox = new_cmb2_box( array(
            'id'            => 'rb_portfolio_two_home_page_header',
            'title'         => __('01. Header Section', 'rb-portfolio-two' ),
            'object_types' => array('page'), // post type
            'show_on'      => array('key'=> 'page-template', 'value' => 'home-page-template.php'),
        ) );
    
        // Homepage Header Image
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'Header Section Image', 'rb-portfolio-two' ),
            'desc'       => __( 'Header Section Image Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_header_img',
            'type'       => 'text_url',
            'sanitize_callback' => 'esc_url_raw',
            'default'    => esc_url(get_template_directory_uri().'/assets/img/header.jpg')
        ) );
        
        // Homepage Header Title
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'Header Section Title', 'rb-portfolio-two' ),
            'desc'       => __( 'Header Section Title Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_header_title',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('Hi! I\'m Jhohn Smith', 'rb-portfolio-two')
        ) );
    
        // Homepage Header Sub-Title 01
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'Header Section Sub-Title 01', 'rb-portfolio-two' ),
            'desc'       => __( 'Header Section Sub-Title 01 Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_header_subtitle_1',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('I\'m a', 'rb-portfolio-two')
        ) );
    
        // Homepage Header Sub-Title 02
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'Header Section Sub-Title 02', 'rb-portfolio-two' ),
            'desc'       => __( 'Header Section Sub-Title 02 Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_header_subtitle_2',
            'type'       => 'group'
        ) );
    
        // Homepage Header Sub-Title 02 Item Text
        $rb_portfolio_two_metabox->add_group_field( 'rb_portfolio_two_header_subtitle_2', array(
            'name'        => __( 'Header Section Sub-Title 02 Text', 'rb-portfolio-two' ),
            'description' => __( 'Write a short description for this entry', 'rb-portfolio-two' ),
            'id'          => 'rb_portfolio_two_header_subtitle_2_txt',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('Freelancer', 'rb-portfolio-two')
        ) );
        /***********************************************
        ===== 01. Homepage Header Section End Here =====
        ***********************************************/
    
        /***************************************************
        ===== 02. Homepage About Me Section Start Here =====
        ***************************************************/
        $rb_portfolio_two_metabox = new_cmb2_box( array(
            'id'            => 'rb_portfolio_two_home_page_about_me',
            'title'         => __('02. About Me Section', 'rb-portfolio-two'),
            'object_types' => array('page'), // post type
            'show_on'      => array('key' => 'page-template', 'value' => 'home-page-template.php'),
        ) );
        
        /* 2.1. Homepage About Me Section Header Start Here */
        // Homepage About Me Header Title Black
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'About Me Header Title Black', 'rb-portfolio-two' ),
            'desc'       => __( 'About Me Header Title Black Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_about_me_title_black',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('About', 'rb-portfolio-two')
        ) );
    
        // Homepage About Me Header Title Theme Color
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'About Me Header Title Theme Color', 'rb-portfolio-two' ),
            'desc'       => __( 'About Me Header Title Theme Color Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_about_me_title_theme_color',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('Me', 'rb-portfolio-two')
        ) );
        /* 2.1. Homepage About Me Section Header End Here */
    
        /* 2.2. Homepage About Me Section Content Start Here */
        // Homepage About Me Content Image
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'About Me Content Image', 'rb-portfolio-two' ),
            'desc'       => __( 'About Me Content Image Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_about_me_content_img',
            'type'       => 'text_url',
            'sanitize_callback' => 'esc_url_raw',
            'default'    => esc_url(get_template_directory_uri().'/assets/img/user.jpg')
        ) );
    
        // Homepage About Me Content Title
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'About Me Content Title', 'rb-portfolio-two' ),
            'desc'       => __( 'About Me Content Title Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_about_me_content_title',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('RB Portfolio Two', 'rb-portfolio-two')
        ) );
    
        // Homepage About Me Content Sub-Title
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'About Me Content Sub-Title', 'rb-portfolio-two' ),
            'desc'       => __( 'About Me Content Sub-Title Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_about_me_content_sub_title',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('I am a Full-Stack Web Developer', 'rb-portfolio-two')
        ) );
    
        // Homepage About Me Content Description
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'About Me Content Description', 'rb-portfolio-two' ),
            'desc'       => __( 'About Me Content Description Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_about_me_content_description',
            'type'       => 'wysiwyg',
            'sanitize_callback' => 'sanitize_text_field'
        ) );
    
        /* 2.2.1. Homepage About Me Section Content Details Item Group Start Here */
        // Homepage About Me Content Details
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'About Me Content Details', 'rb-portfolio-two' ),
            'desc'       => __( 'About Me Content Details Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_about_me_content_details',
            'type'       => 'group'
        ) );
    
        // Homepage About Me Content Details Item Icon
        $rb_portfolio_two_metabox->add_group_field( 'rb_portfolio_two_about_me_content_details', array(
            'name'        => __( 'About Me Content Details Item Icon', 'rb-portfolio-two' ),
            'description' => __( 'About Me Content Details Item Icon Add', 'rb-portfolio-two' ),
            'id'          => 'rb_portfolio_two_about_me_content_details_icon',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => 'fas fa-user'
        ) );
    
        // Homepage About Me Content Details Item Strong Text
        $rb_portfolio_two_metabox->add_group_field( 'rb_portfolio_two_about_me_content_details', array(
            'name'        => __( 'About Me Content Details Item Strong Text', 'rb-portfolio-two' ),
            'description' => __( 'About Me Content Details Item Strong Text Add', 'rb-portfolio-two' ),
            'id'          => 'rb_portfolio_two_about_me_content_details_strong_text',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('Name', 'rb-portfolio-two')
        ) );
    
        // Homepage About Me Content Details Item Normal Text
        $rb_portfolio_two_metabox->add_group_field( 'rb_portfolio_two_about_me_content_details', array(
            'name'        => __( 'About Me Content Details Item Normal Text', 'rb-portfolio-two' ),
            'description' => __('About Me Content Details Item Normal Text Add', 'rb-portfolio-two'),
            'id'          => 'rb_portfolio_two_about_me_content_details_normal_text',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('RB Portfolio Two', 'rb-portfolio-two')
        ) );
        /* 2.2.1. Homepage About Me Section Content Details Item Group End Here */
    
        /* 2.2.2. Homepage About Me Section Content Buttons Item Group Start Here */
        // Homepage About Me Content Buttons
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'About Me Content Buttons', 'rb-portfolio-two' ),
            'desc'       => __( 'About Me Content Buttons Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_about_me_content_buttons',
            'type'       => 'group'
        ) );
    
        // Homepage About Me Content Buttons Item URL
        $rb_portfolio_two_metabox->add_group_field( 'rb_portfolio_two_about_me_content_buttons', array(
            'name'        => __( 'About Me Content Buttons Item URL', 'rb-portfolio-two' ),
            'description' => __('About Me Content Buttons Item URL Add', 'rb-portfolio-two'),
            'id'          => 'rb_portfolio_two_about_me_content_button_url',
            'type'       => 'text_url',
            'sanitize_callback' => 'esc_url_raw',
            'default'    => esc_url('#')
        ) );
    
        // Homepage About Me Content Buttons Item Text
        $rb_portfolio_two_metabox->add_group_field( 'rb_portfolio_two_about_me_content_buttons', array(
            'name'        => __( 'About Me Content Buttons Item Text', 'rb-portfolio-two' ),
            'description' => __('About Me Content Buttons Item Text Add', 'rb-portfolio-two'),
            'id'          => 'rb_portfolio_two_about_me_content_button_text',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('Download CV', 'rb-portfolio-two')
        ) );
        /* 2.2.1. Homepage About Me Section Content Buttons Item Group End Here */
    
        /* 2.2. Homepage About Me Section Content End Here */
    
        /*************************************************
        ===== 02. Homepage About Me Section End Here =====
        *************************************************/
    
        /****************************************************
        ===== 03. Homepage My Skills Section Start Here =====
        ****************************************************/
        $rb_portfolio_two_metabox = new_cmb2_box( array(
            'id'            => 'rb_portfolio_two_home_page_my_skills',
            'title'         => __('03. My Skills Section', 'rb-portfolio-two'),
            'object_types' => array( 'page' ), // post type
            'show_on'      => array( 'key' => 'page-template', 'value' => 'home-page-template.php' )
        ) );
    
        /* 3.1. Homepage My Skills Section Header Start Here */
        // Homepage My Skills Header Title Theme Color
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'My Skills Header Title Theme Color', 'rb-portfolio-two' ),
            'desc'       => __( 'My Skills Header Title Theme Color Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_my_skills_title_theme_color',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('My', 'rb-portfolio-two')
        ) );
        
        // Homepage My Skills Header Title Black
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'My Skills Header Title Black', 'rb-portfolio-two' ),
            'desc'       => __( 'My Skills Header Title Black Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_my_skills_title_black',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('Skills', 'rb-portfolio-two')
        ) );
        /* 3.1. Homepage My Skills Section Header End Here */
        
        /* 3.2. Homepage My Skills Section Content Start Here */
        // Homepage My Skills Design Skills Title
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'My Skills Design Skills Title', 'rb-portfolio-two' ),
            'desc'       => __( 'My Skills Design Skills Title Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_my_design_skills_title',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('Design Skills', 'rb-portfolio-two')
        ) );
    
        /* 3.2.1. Homepage My Skills Section Content Design Skills Item Group Start Here */
        // Homepage My Skills Design Skills Item
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'My Skills Design Skills Item', 'rb-portfolio-two' ),
            'desc'       => __( 'My Skills Design Skills Item Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_my_design_skill_items',
            'type'       => 'group'
        ) );
    
        // Homepage My Skills Design Skill Item Text
        $rb_portfolio_two_metabox->add_group_field( 'rb_portfolio_two_my_design_skill_items', array(
            'name'        => __( 'My Skills Design Skill Item Text', 'rb-portfolio-two' ),
            'description' => __('My Skills Design Skill Item Text Add', 'rb-portfolio-two'),
            'id'          => 'rb_portfolio_two_my_design_skill_item_text',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('Abode Illustrator', 'rb-portfolio-two')
        ) );
    
        // Homepage My Skills Design Skill Item Text
        $rb_portfolio_two_metabox->add_group_field( 'rb_portfolio_two_my_design_skill_items', array(
            'name'        => __( 'My Skills Design Skill Item Percent', 'rb-portfolio-two' ),
            'description' => __('My Skills Design Skill Item Percent Add', 'rb-portfolio-two'),
            'id'          => 'rb_portfolio_two_my_design_skill_item_percent',
            'type'       => 'text',
            'attributes' => array(
                'type' => 'number'
            ),
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('90', 'rb-portfolio-two')
        ) );
        /* 3.2.1. Homepage My Skills Section Content Design Skills Item Group End Here */
        
        // Homepage My Skills Development Skills Title
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'My Skills Development Skills Title', 'rb-portfolio-two' ),
            'desc'       => __( 'My Skills Development Skills Title Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_my_development_skills_title',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('Development Skills', 'rb-portfolio-two')
        ) );
    
        /* 3.2.2. Homepage My Skills Section Content Development Skills Item Group Start Here */
        // Homepage My Skills Development Skills Item
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'My Skills Development Skills Item', 'rb-portfolio-two' ),
            'desc'       => __( 'My Skills Development Skills Item Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_my_development_skill_items',
            'type'       => 'group'
        ) );
    
        // Homepage My Skills Development Skill Item Text
        $rb_portfolio_two_metabox->add_group_field( 'rb_portfolio_two_my_development_skill_items', array(
            'name'        => __( 'My Skills Development Skill Item Text', 'rb-portfolio-two' ),
            'description' => __('My Skills Development Skill Item Text Add', 'rb-portfolio-two'),
            'id'          => 'rb_portfolio_two_my_development_skill_item_text',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('PHP', 'rb-portfolio-two')
        ) );
    
        // Homepage My Skills Development Skill Item Text
        $rb_portfolio_two_metabox->add_group_field( 'rb_portfolio_two_my_development_skill_items', array(
            'name'        => __( 'My Skills Development Skill Item Percent', 'rb-portfolio-two' ),
            'description' => __('My Skills Development Skill Item Percent Add', 'rb-portfolio-two'),
            'id'          => 'rb_portfolio_two_my_development_skill_item_percent',
            'type'       => 'text',
            'attributes' => array(
                'type' => 'number'
            ),
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('80', 'rb-portfolio-two')
        ) );
        /* 3.2.2. Homepage My Skills Section Content Development Skills Item Group End Here */
    
        /* 3.2. Homepage My Skills Section Content End Here */
    
        /**************************************************
        ===== 03. Homepage My Skills Section End Here =====
        **************************************************/
    
        /**************************************************
        ===== 04. Homepage Hire Me Section Start Here =====
        **************************************************/
        $rb_portfolio_two_metabox = new_cmb2_box( array(
            'id'            => 'rb_portfolio_two_home_page_hire_me',
            'title'         => __('04. Hire Me Section', 'rb-portfolio-two'),
            'object_types' => array( 'page' ), // post type
            'show_on'      => array( 'key' => 'page-template', 'value' => 'home-page-template.php' )
        ) );
    
        // Homepage Hire Me Section Image
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'Hire Me Section Image', 'rb-portfolio-two' ),
            'desc'       => __( 'Hire Me Section Image Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_hire_me_image',
            'type'       => 'text_url',
            'sanitize_callback' => 'esc_url_raw',
            'default'    => esc_url(get_template_directory_uri().'/assets/img/hire-me-bg.jpg')
        ) );
    
        // Homepage Hire Me Section Title
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'Hire Me Section Title', 'rb-portfolio-two' ),
            'desc'       => __( 'Hire Me Section Title Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_hire_me_title',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('Let\'s Work Together!', 'rb-portfolio-two')
        ) );
    
        // Homepage Hire Me Section Sub-title
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'Hire Me Section Sub-Title', 'rb-portfolio-two' ),
            'desc'       => __( 'Hire Me Section Sub-Title Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_hire_me_sub_title',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('I am available for freelance projects. Hire me and get your project done.', 'rb-portfolio-two')
        ) );
    
        // Homepage Hire Me Section Button URL
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'Hire Me Section Button URL', 'rb-portfolio-two' ),
            'desc'       => __( 'Hire Me Section Button Text Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_hire_me_btn_url',
            'type'       => 'text_url',
            'sanitize_callback' => 'esc_url_raw',
            'default'    => esc_url('#')
        ) );
    
        // Homepage Hire Me Section Button Text
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'Hire Me Section Button Text', 'rb-portfolio-two' ),
            'desc'       => __( 'Hire Me Section Button Text Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_hire_me_btn_text',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('hire me', 'rb-portfolio-two')
        ) );
    
        /************************************************
        ===== 04. Homepage Hire Me Section End Here =====
        ************************************************/
        
        /******************************************************
        ===== 05. Homepage My Services Section Start Here =====
        ******************************************************/
        $rb_portfolio_two_metabox = new_cmb2_box( array(
            'id'            => 'rb_portfolio_two_home_page_my_services',
            'title'         => __('05. My Services Section', 'rb-portfolio-two'),
            'object_types' => array('page'), // post type
            'show_on'      => array('key' => 'page-template', 'value' => 'home-page-template.php')
        ) );
    
        /* 5.1. Homepage My Services Section Header Start Here */
        // Homepage My Services Header Title Theme Color
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'My Services Header Title Theme Color', 'rb-portfolio-two' ),
            'desc'       => __( 'My Services Header Title Theme Color Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_my_services_title_theme_color',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('My', 'rb-portfolio-two')
        ) );
        
        // Homepage My Services Header Title Black
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'My Services Header Title Black', 'rb-portfolio-two' ),
            'desc'       => __( 'My Services Header Title Black Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_my_services_title_black',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('Services', 'rb-portfolio-two')
        ) );
        /* 5.1. Homepage My Services Section Header End Here */
    
        /* 5.2. Homepage My Services Section Content Item Group Start Here */
        // Homepage My Services Section Item
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'My Services Section Item', 'rb-portfolio-two' ),
            'desc'       => __( 'My Services Section Item Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_my_service_items',
            'type'       => 'group'
        ) );
    
        // Homepage My Services Section Item Icon
        $rb_portfolio_two_metabox->add_group_field( 'rb_portfolio_two_my_service_items', array(
            'name'        => __( 'My Services Section Item Icon', 'rb-portfolio-two' ),
            'description' => __('My Services Section Item Icon Add', 'rb-portfolio-two'),
            'id'          => 'rb_portfolio_two_my_service_item_icon',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('fas fa-palette', 'rb-portfolio-two')
        ) );
    
        // Homepage My Services Section Item Title
        $rb_portfolio_two_metabox->add_group_field( 'rb_portfolio_two_my_service_items', array(
            'name'        => __( 'My Services Section Item Title', 'rb-portfolio-two' ),
            'description' => __('My Services Section Item Title Add', 'rb-portfolio-two'),
            'id'          => 'rb_portfolio_two_my_service_item_title',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('Graphic Design', 'rb-portfolio-two')
        ) );
    
        // Homepage My Services Section Item Description
        $rb_portfolio_two_metabox->add_group_field( 'rb_portfolio_two_my_service_items', array(
            'name'        => __( 'My Services Section Item Description', 'rb-portfolio-two' ),
            'description' => __('My Services Section Item Description Add', 'rb-portfolio-two'),
            'id'          => 'rb_portfolio_two_my_service_item_description',
            'type'       => 'textarea',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.', 'rb-portfolio-two')
        ) );
        /* 5.2. Homepage My Services Section Content Design Skills Item Group End Here */
    
        /****************************************************
        ===== 05. Homepage My Services Section End Here =====
        ****************************************************/
    
        /**************************************************
        ===== 06. Homepage CountUp Section Start Here =====
        **************************************************/
        $rb_portfolio_two_metabox = new_cmb2_box( array(
            'id'            => 'rb_portfolio_two_home_page_countup',
            'title'         => __('06. CountUp Section', 'rb-portfolio-two'),
            'object_types' => array('page'), // post type
            'show_on'      => array('key' => 'page-template', 'value' => 'home-page-template.php')
        ) );
    
        // Homepage CountUp Section Image
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'CountUp Section Image', 'rb-portfolio-two' ),
            'desc'       => __( 'CountUp Section Image Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_countup_image',
            'type'       => 'text_url',
            'sanitize_callback' => 'esc_url_raw',
            'default'    => esc_url(get_template_directory_uri().'/assets/img/countup-bg.jpg')
        ) );
    
        /* 6.1. Homepage CountUp Section Content Item Group Start Here */
        // Homepage CountUp Section Item
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'CountUp Section Item', 'rb-portfolio-two' ),
            'desc'       => __( 'CountUp Section Item Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_countup_items',
            'type'       => 'group'
        ) );
    
        // Homepage CountUp Section Item Icon
        $rb_portfolio_two_metabox->add_group_field( 'rb_portfolio_two_countup_items', array(
            'name'        => __( 'CountUp Section Item Icon', 'rb-portfolio-two' ),
            'description' => __('CountUp Section Item Icon Add', 'rb-portfolio-two'),
            'id'          => 'rb_portfolio_two_countup_item_icon',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('fas fa-coffee', 'rb-portfolio-two')
        ) );
    
        // Homepage CountUp Section Item Number
        $rb_portfolio_two_metabox->add_group_field( 'rb_portfolio_two_countup_items', array(
            'name'        => __( 'CountUp Section Item Number', 'rb-portfolio-two' ),
            'description' => __('CountUp Section Item Number Add', 'rb-portfolio-two'),
            'id'          => 'rb_portfolio_two_countup_item_number',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('781', 'rb-portfolio-two')
        ) );
    
        // Homepage CountUp Section Item Title
        $rb_portfolio_two_metabox->add_group_field( 'rb_portfolio_two_countup_items', array(
            'name'        => __( 'CountUp Section Item Title', 'rb-portfolio-two' ),
            'description' => __('CountUp Section Item Title Add', 'rb-portfolio-two'),
            'id'          => 'rb_portfolio_two_countup_item_title',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('cups of coffee', 'rb-portfolio-two')
        ) );
        /* 6.1. Homepage CountUp Section Content Design Skills Item Group End Here */
    
        /************************************************
        ===== 06. Homepage CountUp Section End Here =====
        ************************************************/    
    
        /*****************************************************
        ==== 07. Homepage Testimonials Section Start Here ====
        *****************************************************/
        $rb_portfolio_two_metabox = new_cmb2_box( array(
            'id'            => 'rb_portfolio_two_home_page_testimonials',
            'title'         => __('07. Testimonials Section', 'rb-portfolio-two'),
            'object_types' => array('page'), // post type
            'show_on'      => array('key' => 'page-template', 'value' => 'home-page-template.php')
        ) );
    
        /* 7.1. Homepage Testimonials Section Content Item Group Start Here */
        // Homepage Testimonials Section Item
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'Testimonials Section Item', 'rb-portfolio-two' ),
            'desc'       => __( 'Testimonials Section Item Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_testimonials_items',
            'type'       => 'group'
        ) );
    
        // Homepage Testimonials Section Item Image
        $rb_portfolio_two_metabox->add_group_field( 'rb_portfolio_two_testimonials_items', array(
            'name'        => __( 'Testimonials Section Item Image', 'rb-portfolio-two' ),
            'description' => __('Testimonials Section Item Image Add', 'rb-portfolio-two'),
            'id'          => 'rb_portfolio_two_testimonials_item_image',
            'type'       => 'text_url',
            'sanitize_callback' => 'esc_url_raw',
            'default'    => esc_url(get_template_directory_uri().'/assets/img/client/client-1.jpg')
        ) );
    
        // Homepage Testimonials Section Item Title
        $rb_portfolio_two_metabox->add_group_field( 'rb_portfolio_two_testimonials_items', array(
            'name'        => __( 'Testimonials Section Item Title', 'rb-portfolio-two' ),
            'description' => __('Testimonials Section Item Title Add', 'rb-portfolio-two'),
            'id'          => 'rb_portfolio_two_testimonials_item_title',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('Danny J. Trujillo', 'rb-portfolio-two')
        ) );
    
        // Homepage Testimonials Section Item Sub-title
        $rb_portfolio_two_metabox->add_group_field( 'rb_portfolio_two_testimonials_items', array(
            'name'        => __( 'Testimonials Section Item Sub-title', 'rb-portfolio-two' ),
            'description' => __('Testimonials Section Item Sub-title Add', 'rb-portfolio-two'),
            'id'          => 'rb_portfolio_two_testimonials_item_sub_title',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('Client', 'rb-portfolio-two')
        ) );
    
        // Homepage Testimonials Section Item Description
        $rb_portfolio_two_metabox->add_group_field( 'rb_portfolio_two_testimonials_items', array(
            'name'        => __( 'Testimonials Section Item Description', 'rb-portfolio-two' ),
            'description' => __('Testimonials Section Item Description Add', 'rb-portfolio-two'),
            'id'          => 'rb_portfolio_two_testimonials_item_description',
            'type'       => 'textarea',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'rb-portfolio-two')
        ) );
        /* 7.1. Homepage CountUp Section Content Design Skills Item Group End Here */
    
        /***************************************************
        ==== 07. Homepage Testimonials Section End Here ====
        ***************************************************/
    
        /*****************************************************
        ===== 08. Homepage Contact Me Section Start Here =====
        *****************************************************/
        $rb_portfolio_two_metabox = new_cmb2_box( array(
            'id'            => 'rb_portfolio_two_home_page_contact_me',
            'title'         => __('08. Contact Me Section', 'rb-portfolio-two'),
            'object_types' => array('page'), // post type
            'show_on'      => array('key' => 'page-template', 'value' => 'home-page-template.php')
        ) );
        
        /* 8.1. Homepage Contact Me Section Header End Here */
        // Homepage Contact Me Header Title Black
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'Contact Me Header Title Black', 'rb-portfolio-two' ),
            'desc'       => __( 'Contact Me Header Title Black Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_contact_me_title_black',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('Contact', 'rb-portfolio-two')
        ) );
    
        // Homepage Contact Me Header Title Theme Color
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'Contact Me Header Title Theme Color', 'rb-portfolio-two' ),
            'desc'       => __( 'Contact Me Header Title Theme Color Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_contact_me_title_theme_color',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('Me', 'rb-portfolio-two')
        ) );
        /* 8.1. Homepage Contact Me Section Header End Here */
    
        /* 8.2. Homepage Contact Me Section Content Item Group Start Here */
        // Homepage Contact Me Section Item
        $rb_portfolio_two_metabox->add_field( array(
            'name'       => __( 'Contact Me Section Item', 'rb-portfolio-two' ),
            'desc'       => __( 'Contact Me Section Item Add', 'rb-portfolio-two' ),
            'id'         => 'rb_portfolio_two_contact_me_items',
            'type'       => 'group'
        ) );
    
        // Homepage Contact Me Section Item Icon
        $rb_portfolio_two_metabox->add_group_field( 'rb_portfolio_two_contact_me_items', array(
            'name'        => __( 'Contact Me Section Item Icon', 'rb-portfolio-two' ),
            'description' => __('Contact Me Section Item Icon Add', 'rb-portfolio-two'),
            'id'          => 'rb_portfolio_two_contact_me_item_icon',
            'type'       => 'text',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('fas fa-phone-alt', 'rb-portfolio-two')
        ) );
    
        // Homepage Contact Me Section Item Description
        $rb_portfolio_two_metabox->add_group_field( 'rb_portfolio_two_contact_me_items', array(
            'name'        => __( 'Contact Me Section Item Description', 'rb-portfolio-two' ),
            'description' => __('Contact Me Section Item Description Add', 'rb-portfolio-two'),
            'id'          => 'rb_portfolio_two_contact_me_item_description',
            'type'       => 'textarea',
            'sanitize_callback' => 'sanitize_text_field',
            'default'    => __('+44 1632 967704,
            +20 0129 147 2249', 'rb-portfolio-two')
        ) );
        /* 8.2. Homepage Contact Me Section Content Design Skills Item Group End Here */
    
        /***************************************************
        ===== 08. Homepage Contact Me Section End Here =====
        ***************************************************/
    
    }

}
add_action('cmb2_admin_init', 'rb_portfolio_two_metaboxes');