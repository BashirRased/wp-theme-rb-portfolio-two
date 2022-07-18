<?php
/**
 * The template for cmb2 metabox function.
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.0
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

function rbp_two_metaboxes() {

    /*************************************************
    ===== 01. Homepage Header Section Start Here =====
    *************************************************/
    $rbp_two_metabox = new_cmb2_box( array(
        'id'            => 'rbp_two_home_page_header',
        'title'         => __('01. Header Section', 'rbp-two' ),
        'object_types' => array('page'), // post type
        'show_on'      => array('key'=> 'page-template', 'value' => 'home-page-template.php'),
    ) );

    // Homepage Header Image
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'Header Section Image', 'rbp-two' ),
        'desc'       => __( 'Header Section Image Add', 'rbp-two' ),
        'id'         => 'rbp_two_header_img',
        'type'       => 'text_url',
        'sanitize_callback' => 'esc_url_raw',
        'default'    => esc_url(get_template_directory_uri().'/assets/img/header.jpg')
    ) );
    
    // Homepage Header Title
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'Header Section Title', 'rbp-two' ),
        'desc'       => __( 'Header Section Title Add', 'rbp-two' ),
        'id'         => 'rbp_two_header_title',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Hi! I\'m Jhohn Smith', 'rbp-two')
    ) );

    // Homepage Header Sub-Title 01
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'Header Section Sub-Title 01', 'rbp-two' ),
        'desc'       => __( 'Header Section Sub-Title 01 Add', 'rbp-two' ),
        'id'         => 'rbp_two_header_subtitle_1',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('I\'m a', 'rbp-two')
    ) );

    // Homepage Header Sub-Title 02
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'Header Section Sub-Title 02', 'rbp-two' ),
        'desc'       => __( 'Header Section Sub-Title 02 Add', 'rbp-two' ),
        'id'         => 'rbp_two_header_subtitle_2',
        'type'       => 'group'
    ) );

    // Homepage Header Sub-Title 02 Item Text
    $rbp_two_metabox->add_group_field( 'rbp_two_header_subtitle_2', array(
		'name'        => __( 'Header Section Sub-Title 02 Text', 'rbp-two' ),
		'description' => __( 'Write a short description for this entry', 'rbp-two' ),
		'id'          => 'rbp_two_header_subtitle_2_txt',
		'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Freelancer', 'rbp-two')
	) );
    /***********************************************
    ===== 01. Homepage Header Section End Here =====
    ***********************************************/

    /***************************************************
    ===== 02. Homepage About Me Section Start Here =====
    ***************************************************/
    $rbp_two_metabox = new_cmb2_box( array(
        'id'            => 'rbp_two_home_page_about_me',
        'title'         => __('02. About Me Section', 'rbp-two'),
        'object_types' => array('page'), // post type
        'show_on'      => array('key' => 'page-template', 'value' => 'home-page-template.php'),
    ) );
    
    /* 2.1. Homepage About Me Section Header Start Here */
    // Homepage About Me Header Title Black
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'About Me Header Title Black', 'rbp-two' ),
        'desc'       => __( 'About Me Header Title Black Add', 'rbp-two' ),
        'id'         => 'rbp_two_about_me_title_black',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('About', 'rbp-two')
    ) );

    // Homepage About Me Header Title Theme Color
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'About Me Header Title Theme Color', 'rbp-two' ),
        'desc'       => __( 'About Me Header Title Theme Color Add', 'rbp-two' ),
        'id'         => 'rbp_two_about_me_title_theme_color',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Me', 'rbp-two')
    ) );
    /* 2.1. Homepage About Me Section Header End Here */

    /* 2.2. Homepage About Me Section Content Start Here */
    // Homepage About Me Content Image
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'About Me Content Image', 'rbp-two' ),
        'desc'       => __( 'About Me Content Image Add', 'rbp-two' ),
        'id'         => 'rbp_two_about_me_content_img',
        'type'       => 'text_url',
        'sanitize_callback' => 'esc_url_raw',
        'default'    => esc_url(get_template_directory_uri().'/assets/img/user.jpg')
    ) );

    // Homepage About Me Content Title
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'About Me Content Title', 'rbp-two' ),
        'desc'       => __( 'About Me Content Title Add', 'rbp-two' ),
        'id'         => 'rbp_two_about_me_content_title',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('RB Portfolio Two', 'rbp-two')
    ) );

    // Homepage About Me Content Sub-Title
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'About Me Content Sub-Title', 'rbp-two' ),
        'desc'       => __( 'About Me Content Sub-Title Add', 'rbp-two' ),
        'id'         => 'rbp_two_about_me_content_sub_title',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('I am a Full-Stack Web Developer', 'rbp-two')
    ) );

    // Homepage About Me Content Description
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'About Me Content Description', 'rbp-two' ),
        'desc'       => __( 'About Me Content Description Add', 'rbp-two' ),
        'id'         => 'rbp_two_about_me_content_description',
        'type'       => 'wysiwyg',
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    /* 2.2.1. Homepage About Me Section Content Details Item Group Start Here */
    // Homepage About Me Content Details
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'About Me Content Details', 'rbp-two' ),
        'desc'       => __( 'About Me Content Details Add', 'rbp-two' ),
        'id'         => 'rbp_two_about_me_content_details',
        'type'       => 'group'
    ) );

    // Homepage About Me Content Details Item Icon
    $rbp_two_metabox->add_group_field( 'rbp_two_about_me_content_details', array(
		'name'        => __( 'About Me Content Details Item Icon', 'rbp-two' ),
		'description' => __( 'About Me Content Details Item Icon Add', 'rbp-two' ),
		'id'          => 'rbp_two_about_me_content_details_icon',
		'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => 'fas fa-user'
	) );

    // Homepage About Me Content Details Item Strong Text
    $rbp_two_metabox->add_group_field( 'rbp_two_about_me_content_details', array(
		'name'        => __( 'About Me Content Details Item Strong Text', 'rbp-two' ),
		'description' => __( 'About Me Content Details Item Strong Text Add', 'rbp-two' ),
		'id'          => 'rbp_two_about_me_content_details_strong_text',
		'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Name', 'rbp-two')
	) );

    // Homepage About Me Content Details Item Normal Text
    $rbp_two_metabox->add_group_field( 'rbp_two_about_me_content_details', array(
		'name'        => __( 'About Me Content Details Item Normal Text', 'rbp-two' ),
		'description' => __('About Me Content Details Item Normal Text Add', 'rbp-two'),
		'id'          => 'rbp_two_about_me_content_details_normal_text',
		'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('RB Portfolio Two', 'rbp-two')
	) );
    /* 2.2.1. Homepage About Me Section Content Details Item Group End Here */

    /* 2.2.2. Homepage About Me Section Content Buttons Item Group Start Here */
    // Homepage About Me Content Buttons
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'About Me Content Buttons', 'rbp-two' ),
        'desc'       => __( 'About Me Content Buttons Add', 'rbp-two' ),
        'id'         => 'rbp_two_about_me_content_buttons',
        'type'       => 'group'
    ) );

    // Homepage About Me Content Buttons Item URL
    $rbp_two_metabox->add_group_field( 'rbp_two_about_me_content_buttons', array(
		'name'        => __( 'About Me Content Buttons Item URL', 'rbp-two' ),
		'description' => __('About Me Content Buttons Item URL Add', 'rbp-two'),
		'id'          => 'rbp_two_about_me_content_button_url',
        'type'       => 'text_url',
        'sanitize_callback' => 'esc_url_raw',
        'default'    => esc_url('#')
	) );

    // Homepage About Me Content Buttons Item Text
    $rbp_two_metabox->add_group_field( 'rbp_two_about_me_content_buttons', array(
		'name'        => __( 'About Me Content Buttons Item Text', 'rbp-two' ),
		'description' => __('About Me Content Buttons Item Text Add', 'rbp-two'),
		'id'          => 'rbp_two_about_me_content_button_text',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Download CV', 'rbp-two')
	) );
    /* 2.2.1. Homepage About Me Section Content Buttons Item Group End Here */

    /* 2.2. Homepage About Me Section Content End Here */

    /*************************************************
    ===== 02. Homepage About Me Section End Here =====
    *************************************************/

    /****************************************************
    ===== 03. Homepage My Skills Section Start Here =====
    ****************************************************/
    $rbp_two_metabox = new_cmb2_box( array(
        'id'            => 'rbp_two_home_page_my_skills',
        'title'         => __('03. My Skills Section', 'rbp-two'),
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'home-page-template.php' )
    ) );

    /* 3.1. Homepage My Skills Section Header Start Here */
    // Homepage My Skills Header Title Theme Color
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'My Skills Header Title Theme Color', 'rbp-two' ),
        'desc'       => __( 'My Skills Header Title Theme Color Add', 'rbp-two' ),
        'id'         => 'rbp_two_my_skills_title_theme_color',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('My', 'rbp-two')
    ) );
    
    // Homepage My Skills Header Title Black
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'My Skills Header Title Black', 'rbp-two' ),
        'desc'       => __( 'My Skills Header Title Black Add', 'rbp-two' ),
        'id'         => 'rbp_two_my_skills_title_black',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Skills', 'rbp-two')
    ) );
    /* 3.1. Homepage My Skills Section Header End Here */
    
    /* 3.2. Homepage My Skills Section Content Start Here */
    // Homepage My Skills Design Skills Title
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'My Skills Design Skills Title', 'rbp-two' ),
        'desc'       => __( 'My Skills Design Skills Title Add', 'rbp-two' ),
        'id'         => 'rbp_two_my_design_skills_title',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Design Skills', 'rbp-two')
    ) );

    /* 3.2.1. Homepage My Skills Section Content Design Skills Item Group Start Here */
    // Homepage My Skills Design Skills Item
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'My Skills Design Skills Item', 'rbp-two' ),
        'desc'       => __( 'My Skills Design Skills Item Add', 'rbp-two' ),
        'id'         => 'rbp_two_my_design_skill_items',
        'type'       => 'group'
    ) );

    // Homepage My Skills Design Skill Item Text
    $rbp_two_metabox->add_group_field( 'rbp_two_my_design_skill_items', array(
		'name'        => __( 'My Skills Design Skill Item Text', 'rbp-two' ),
		'description' => __('My Skills Design Skill Item Text Add', 'rbp-two'),
		'id'          => 'rbp_two_my_design_skill_item_text',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Abode Illustrator', 'rbp-two')
	) );

    // Homepage My Skills Design Skill Item Text
    $rbp_two_metabox->add_group_field( 'rbp_two_my_design_skill_items', array(
		'name'        => __( 'My Skills Design Skill Item Percent', 'rbp-two' ),
		'description' => __('My Skills Design Skill Item Percent Add', 'rbp-two'),
		'id'          => 'rbp_two_my_design_skill_item_percent',
        'type'       => 'text',
        'attributes' => array(
            'type' => 'number'
        ),
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('90', 'rbp-two')
	) );
    /* 3.2.1. Homepage My Skills Section Content Design Skills Item Group End Here */
    
    // Homepage My Skills Development Skills Title
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'My Skills Development Skills Title', 'rbp-two' ),
        'desc'       => __( 'My Skills Development Skills Title Add', 'rbp-two' ),
        'id'         => 'rbp_two_my_development_skills_title',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Development Skills', 'rbp-two')
    ) );

    /* 3.2.2. Homepage My Skills Section Content Development Skills Item Group Start Here */
    // Homepage My Skills Development Skills Item
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'My Skills Development Skills Item', 'rbp-two' ),
        'desc'       => __( 'My Skills Development Skills Item Add', 'rbp-two' ),
        'id'         => 'rbp_two_my_development_skill_items',
        'type'       => 'group'
    ) );

    // Homepage My Skills Development Skill Item Text
    $rbp_two_metabox->add_group_field( 'rbp_two_my_development_skill_items', array(
		'name'        => __( 'My Skills Development Skill Item Text', 'rbp-two' ),
		'description' => __('My Skills Development Skill Item Text Add', 'rbp-two'),
		'id'          => 'rbp_two_my_development_skill_item_text',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('PHP', 'rbp-two')
	) );

    // Homepage My Skills Development Skill Item Text
    $rbp_two_metabox->add_group_field( 'rbp_two_my_development_skill_items', array(
		'name'        => __( 'My Skills Development Skill Item Percent', 'rbp-two' ),
		'description' => __('My Skills Development Skill Item Percent Add', 'rbp-two'),
		'id'          => 'rbp_two_my_development_skill_item_percent',
        'type'       => 'text',
        'attributes' => array(
            'type' => 'number'
        ),
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('80', 'rbp-two')
	) );
    /* 3.2.2. Homepage My Skills Section Content Development Skills Item Group End Here */

    /* 3.2. Homepage My Skills Section Content End Here */

    /**************************************************
    ===== 03. Homepage My Skills Section End Here =====
    **************************************************/

    /**************************************************
    ===== 04. Homepage Hire Me Section Start Here =====
    **************************************************/
    $rbp_two_metabox = new_cmb2_box( array(
        'id'            => 'rbp_two_home_page_hire_me',
        'title'         => __('04. Hire Me Section', 'rbp-two'),
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'home-page-template.php' )
    ) );

    // Homepage Hire Me Section Image
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'Hire Me Section Image', 'rbp-two' ),
        'desc'       => __( 'Hire Me Section Image Add', 'rbp-two' ),
        'id'         => 'rbp_two_hire_me_image',
        'type'       => 'text_url',
        'sanitize_callback' => 'esc_url_raw',
        'default'    => esc_url(get_template_directory_uri().'/assets/img/hire-me-bg.jpg')
    ) );

    // Homepage Hire Me Section Title
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'Hire Me Section Title', 'rbp-two' ),
        'desc'       => __( 'Hire Me Section Title Add', 'rbp-two' ),
        'id'         => 'rbp_two_hire_me_title',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Let\'s Work Together!', 'rbp-two')
    ) );

    // Homepage Hire Me Section Sub-title
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'Hire Me Section Sub-Title', 'rbp-two' ),
        'desc'       => __( 'Hire Me Section Sub-Title Add', 'rbp-two' ),
        'id'         => 'rbp_two_hire_me_sub_title',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('I am available for freelance projects. Hire me and get your project done.', 'rbp-two')
    ) );

    // Homepage Hire Me Section Button URL
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'Hire Me Section Button URL', 'rbp-two' ),
        'desc'       => __( 'Hire Me Section Button Text Add', 'rbp-two' ),
        'id'         => 'rbp_two_hire_me_btn_url',
        'type'       => 'text_url',
        'sanitize_callback' => 'esc_url_raw',
        'default'    => esc_url('#')
    ) );

    // Homepage Hire Me Section Button Text
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'Hire Me Section Button Text', 'rbp-two' ),
        'desc'       => __( 'Hire Me Section Button Text Add', 'rbp-two' ),
        'id'         => 'rbp_two_hire_me_btn_text',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('hire me', 'rbp-two')
    ) );

    /************************************************
    ===== 04. Homepage Hire Me Section End Here =====
    ************************************************/
    
    /******************************************************
    ===== 05. Homepage My Services Section Start Here =====
    ******************************************************/
    $rbp_two_metabox = new_cmb2_box( array(
        'id'            => 'rbp_two_home_page_my_services',
        'title'         => __('05. My Services Section', 'rbp-two'),
        'object_types' => array('page'), // post type
        'show_on'      => array('key' => 'page-template', 'value' => 'home-page-template.php')
    ) );

    /* 5.1. Homepage My Services Section Header Start Here */
    // Homepage My Services Header Title Theme Color
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'My Services Header Title Theme Color', 'rbp-two' ),
        'desc'       => __( 'My Services Header Title Theme Color Add', 'rbp-two' ),
        'id'         => 'rbp_two_my_services_title_theme_color',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('My', 'rbp-two')
    ) );
    
    // Homepage My Services Header Title Black
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'My Services Header Title Black', 'rbp-two' ),
        'desc'       => __( 'My Services Header Title Black Add', 'rbp-two' ),
        'id'         => 'rbp_two_my_services_title_black',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Services', 'rbp-two')
    ) );
    /* 5.1. Homepage My Services Section Header End Here */

    /* 5.2. Homepage My Services Section Content Item Group Start Here */
    // Homepage My Services Section Item
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'My Services Section Item', 'rbp-two' ),
        'desc'       => __( 'My Services Section Item Add', 'rbp-two' ),
        'id'         => 'rbp_two_my_service_items',
        'type'       => 'group'
    ) );

    // Homepage My Services Section Item Icon
    $rbp_two_metabox->add_group_field( 'rbp_two_my_service_items', array(
		'name'        => __( 'My Services Section Item Icon', 'rbp-two' ),
		'description' => __('My Services Section Item Icon Add', 'rbp-two'),
		'id'          => 'rbp_two_my_service_item_icon',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('fas fa-palette', 'rbp-two')
	) );

    // Homepage My Services Section Item Title
    $rbp_two_metabox->add_group_field( 'rbp_two_my_service_items', array(
		'name'        => __( 'My Services Section Item Title', 'rbp-two' ),
		'description' => __('My Services Section Item Title Add', 'rbp-two'),
		'id'          => 'rbp_two_my_service_item_title',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Graphic Design', 'rbp-two')
	) );

    // Homepage My Services Section Item Description
    $rbp_two_metabox->add_group_field( 'rbp_two_my_service_items', array(
		'name'        => __( 'My Services Section Item Description', 'rbp-two' ),
		'description' => __('My Services Section Item Description Add', 'rbp-two'),
		'id'          => 'rbp_two_my_service_item_description',
        'type'       => 'textarea',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.', 'rbp-two')
	) );
    /* 5.2. Homepage My Services Section Content Design Skills Item Group End Here */

    /****************************************************
    ===== 05. Homepage My Services Section End Here =====
    ****************************************************/

    /**************************************************
    ===== 06. Homepage CountUp Section Start Here =====
    **************************************************/
    $rbp_two_metabox = new_cmb2_box( array(
        'id'            => 'rbp_two_home_page_countup',
        'title'         => __('06. CountUp Section', 'rbp-two'),
        'object_types' => array('page'), // post type
        'show_on'      => array('key' => 'page-template', 'value' => 'home-page-template.php')
    ) );

    // Homepage CountUp Section Image
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'CountUp Section Image', 'rbp-two' ),
        'desc'       => __( 'CountUp Section Image Add', 'rbp-two' ),
        'id'         => 'rbp_two_countup_image',
        'type'       => 'text_url',
        'sanitize_callback' => 'esc_url_raw',
        'default'    => esc_url(get_template_directory_uri().'/assets/img/countup-bg.jpg')
    ) );

    /* 6.1. Homepage CountUp Section Content Item Group Start Here */
    // Homepage CountUp Section Item
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'CountUp Section Item', 'rbp-two' ),
        'desc'       => __( 'CountUp Section Item Add', 'rbp-two' ),
        'id'         => 'rbp_two_countup_items',
        'type'       => 'group'
    ) );

    // Homepage CountUp Section Item Icon
    $rbp_two_metabox->add_group_field( 'rbp_two_countup_items', array(
		'name'        => __( 'CountUp Section Item Icon', 'rbp-two' ),
		'description' => __('CountUp Section Item Icon Add', 'rbp-two'),
		'id'          => 'rbp_two_countup_item_icon',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('fas fa-coffee', 'rbp-two')
	) );

    // Homepage CountUp Section Item Number
    $rbp_two_metabox->add_group_field( 'rbp_two_countup_items', array(
		'name'        => __( 'CountUp Section Item Number', 'rbp-two' ),
		'description' => __('CountUp Section Item Number Add', 'rbp-two'),
		'id'          => 'rbp_two_countup_item_number',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('781', 'rbp-two')
	) );

    // Homepage CountUp Section Item Title
    $rbp_two_metabox->add_group_field( 'rbp_two_countup_items', array(
		'name'        => __( 'CountUp Section Item Title', 'rbp-two' ),
		'description' => __('CountUp Section Item Title Add', 'rbp-two'),
		'id'          => 'rbp_two_countup_item_title',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('cups of coffee', 'rbp-two')
	) );
    /* 6.1. Homepage CountUp Section Content Design Skills Item Group End Here */

    /************************************************
    ===== 06. Homepage CountUp Section End Here =====
    ************************************************/    

    /*****************************************************
    ==== 07. Homepage Testimonials Section Start Here ====
    *****************************************************/
    $rbp_two_metabox = new_cmb2_box( array(
        'id'            => 'rbp_two_home_page_testimonials',
        'title'         => __('07. Testimonials Section', 'rbp-two'),
        'object_types' => array('page'), // post type
        'show_on'      => array('key' => 'page-template', 'value' => 'home-page-template.php')
    ) );

    /* 7.1. Homepage Testimonials Section Content Item Group Start Here */
    // Homepage Testimonials Section Item
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'Testimonials Section Item', 'rbp-two' ),
        'desc'       => __( 'Testimonials Section Item Add', 'rbp-two' ),
        'id'         => 'rbp_two_testimonials_items',
        'type'       => 'group'
    ) );

    // Homepage Testimonials Section Item Image
    $rbp_two_metabox->add_group_field( 'rbp_two_testimonials_items', array(
		'name'        => __( 'Testimonials Section Item Image', 'rbp-two' ),
		'description' => __('Testimonials Section Item Image Add', 'rbp-two'),
		'id'          => 'rbp_two_testimonials_item_image',
        'type'       => 'text_url',
        'sanitize_callback' => 'esc_url_raw',
        'default'    => esc_url(get_template_directory_uri().'/assets/img/client/client-1.jpg')
	) );

    // Homepage Testimonials Section Item Title
    $rbp_two_metabox->add_group_field( 'rbp_two_testimonials_items', array(
		'name'        => __( 'Testimonials Section Item Title', 'rbp-two' ),
		'description' => __('Testimonials Section Item Title Add', 'rbp-two'),
		'id'          => 'rbp_two_testimonials_item_title',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Danny J. Trujillo', 'rbp-two')
	) );

    // Homepage Testimonials Section Item Sub-title
    $rbp_two_metabox->add_group_field( 'rbp_two_testimonials_items', array(
		'name'        => __( 'Testimonials Section Item Sub-title', 'rbp-two' ),
		'description' => __('Testimonials Section Item Sub-title Add', 'rbp-two'),
		'id'          => 'rbp_two_testimonials_item_sub_title',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Client', 'rbp-two')
	) );

    // Homepage Testimonials Section Item Description
    $rbp_two_metabox->add_group_field( 'rbp_two_testimonials_items', array(
		'name'        => __( 'Testimonials Section Item Description', 'rbp-two' ),
		'description' => __('Testimonials Section Item Description Add', 'rbp-two'),
		'id'          => 'rbp_two_testimonials_item_description',
        'type'       => 'textarea',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'rbp-two')
	) );
    /* 7.1. Homepage CountUp Section Content Design Skills Item Group End Here */

    /***************************************************
    ==== 07. Homepage Testimonials Section End Here ====
    ***************************************************/

    /*****************************************************
    ===== 08. Homepage Contact Me Section Start Here =====
    *****************************************************/
    $rbp_two_metabox = new_cmb2_box( array(
        'id'            => 'rbp_two_home_page_contact_me',
        'title'         => __('08. Contact Me Section', 'rbp-two'),
        'object_types' => array('page'), // post type
        'show_on'      => array('key' => 'page-template', 'value' => 'home-page-template.php')
    ) );
    
    /* 8.1. Homepage Contact Me Section Header End Here */
    // Homepage Contact Me Header Title Black
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'Contact Me Header Title Black', 'rbp-two' ),
        'desc'       => __( 'Contact Me Header Title Black Add', 'rbp-two' ),
        'id'         => 'rbp_two_contact_me_title_black',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Contact', 'rbp-two')
    ) );

    // Homepage Contact Me Header Title Theme Color
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'Contact Me Header Title Theme Color', 'rbp-two' ),
        'desc'       => __( 'Contact Me Header Title Theme Color Add', 'rbp-two' ),
        'id'         => 'rbp_two_contact_me_title_theme_color',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Me', 'rbp-two')
    ) );
    /* 8.1. Homepage Contact Me Section Header End Here */

    /* 8.2. Homepage Contact Me Section Content Item Group Start Here */
    // Homepage Contact Me Section Item
    $rbp_two_metabox->add_field( array(
        'name'       => __( 'Contact Me Section Item', 'rbp-two' ),
        'desc'       => __( 'Contact Me Section Item Add', 'rbp-two' ),
        'id'         => 'rbp_two_contact_me_items',
        'type'       => 'group'
    ) );

    // Homepage Contact Me Section Item Icon
    $rbp_two_metabox->add_group_field( 'rbp_two_contact_me_items', array(
		'name'        => __( 'Contact Me Section Item Icon', 'rbp-two' ),
		'description' => __('Contact Me Section Item Icon Add', 'rbp-two'),
		'id'          => 'rbp_two_contact_me_item_icon',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('fas fa-phone-alt', 'rbp-two')
	) );

    // Homepage Contact Me Section Item Description
    $rbp_two_metabox->add_group_field( 'rbp_two_contact_me_items', array(
		'name'        => __( 'Contact Me Section Item Description', 'rbp-two' ),
		'description' => __('Contact Me Section Item Description Add', 'rbp-two'),
		'id'          => 'rbp_two_contact_me_item_description',
        'type'       => 'textarea',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('+44 1632 967704,
        +20 0129 147 2249', 'rbp-two')
	) );
    /* 8.2. Homepage Contact Me Section Content Design Skills Item Group End Here */

    /***************************************************
    ===== 08. Homepage Contact Me Section End Here =====
    ***************************************************/

}
add_action('cmb2_admin_init', 'rbp_two_metaboxes');