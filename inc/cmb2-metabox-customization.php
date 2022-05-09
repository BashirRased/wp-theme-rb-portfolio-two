<?php
/**
 * The template for cmb2 metabox function.
 *
 * @package WordPress
 * @subpackage theme_name
 * @since Theme Name 1.0.0
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

function jhon_smith_metaboxes() {

    /*************************************************
    ===== 01. Homepage Header Section Start Here =====
    *************************************************/
    $jhon_smith_metabox = new_cmb2_box( array(
        'id'            => 'jhon_smith_home_page_header',
        'title'         => __('01. Header Section', 'jhon-smith' ),
        'object_types' => array('page'), // post type
        'show_on'      => array('key'=> 'page-template', 'value' => 'home-page-template.php'),
    ) );

    // Homepage Header Image
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'Header Section Image', 'jhon-smith' ),
        'desc'       => __( 'Header Section Image Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_header_img',
        'type'       => 'text_url',
        'sanitize_callback' => 'esc_url_raw',
        'default'    => esc_url(get_template_directory_uri().'/assets/img/header.jpg')
    ) );
    
    // Homepage Header Title
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'Header Section Title', 'jhon-smith' ),
        'desc'       => __( 'Header Section Title Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_header_title',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Hi! I\'m Jhohn Smith', 'jhon-smith')
    ) );

    // Homepage Header Sub-Title 01
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'Header Section Sub-Title 01', 'jhon-smith' ),
        'desc'       => __( 'Header Section Sub-Title 01 Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_header_subtitle_1',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('I\'m a', 'jhon-smith')
    ) );

    // Homepage Header Sub-Title 02
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'Header Section Sub-Title 02', 'jhon-smith' ),
        'desc'       => __( 'Header Section Sub-Title 02 Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_header_subtitle_2',
        'type'       => 'group'
    ) );

    // Homepage Header Sub-Title 02 Item Text
    $jhon_smith_metabox->add_group_field( 'jhon_smith_header_subtitle_2', array(
		'name'        => __( 'Header Section Sub-Title 02 Text', 'jhon-smith' ),
		'description' => __( 'Write a short description for this entry', 'jhon-smith' ),
		'id'          => 'jhon_smith_header_subtitle_2_txt',
		'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Freelancer', 'jhon-smith')
	) );
    /***********************************************
    ===== 01. Homepage Header Section End Here =====
    ***********************************************/

    /***************************************************
    ===== 02. Homepage About Me Section Start Here =====
    ***************************************************/
    $jhon_smith_metabox = new_cmb2_box( array(
        'id'            => 'jhon_smith_home_page_about_me',
        'title'         => __('02. About Me Section', 'jhon-smith'),
        'object_types' => array('page'), // post type
        'show_on'      => array('key' => 'page-template', 'value' => 'home-page-template.php'),
    ) );
    
    /* 2.1. Homepage About Me Section Header Start Here */
    // Homepage About Me Header Title Black
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'About Me Header Title Black', 'jhon-smith' ),
        'desc'       => __( 'About Me Header Title Black Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_about_me_title_black',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('About', 'jhon-smith')
    ) );

    // Homepage About Me Header Title Theme Color
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'About Me Header Title Theme Color', 'jhon-smith' ),
        'desc'       => __( 'About Me Header Title Theme Color Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_about_me_title_theme_color',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Me', 'jhon-smith')
    ) );
    /* 2.1. Homepage About Me Section Header End Here */

    /* 2.2. Homepage About Me Section Content Start Here */
    // Homepage About Me Content Image
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'About Me Content Image', 'jhon-smith' ),
        'desc'       => __( 'About Me Content Image Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_about_me_content_img',
        'type'       => 'text_url',
        'sanitize_callback' => 'esc_url_raw',
        'default'    => esc_url(get_template_directory_uri().'/assets/img/user.jpg')
    ) );

    // Homepage About Me Content Title
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'About Me Content Title', 'jhon-smith' ),
        'desc'       => __( 'About Me Content Title Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_about_me_content_title',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Jhon Smith', 'jhon-smith')
    ) );

    // Homepage About Me Content Sub-Title
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'About Me Content Sub-Title', 'jhon-smith' ),
        'desc'       => __( 'About Me Content Sub-Title Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_about_me_content_sub_title',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('I am a Full-Stack Web Developer', 'jhon-smith')
    ) );

    // Homepage About Me Content Description
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'About Me Content Description', 'jhon-smith' ),
        'desc'       => __( 'About Me Content Description Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_about_me_content_description',
        'type'       => 'wysiwyg',
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    /* 2.2.1. Homepage About Me Section Content Details Item Group Start Here */
    // Homepage About Me Content Details
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'About Me Content Details', 'jhon-smith' ),
        'desc'       => __( 'About Me Content Details Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_about_me_content_details',
        'type'       => 'group'
    ) );

    // Homepage About Me Content Details Item Icon
    $jhon_smith_metabox->add_group_field( 'jhon_smith_about_me_content_details', array(
		'name'        => __( 'About Me Content Details Item Icon', 'jhon-smith' ),
		'description' => __( 'About Me Content Details Item Icon Add', 'jhon-smith' ),
		'id'          => 'jhon_smith_about_me_content_details_icon',
		'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => 'fas fa-user'
	) );

    // Homepage About Me Content Details Item Strong Text
    $jhon_smith_metabox->add_group_field( 'jhon_smith_about_me_content_details', array(
		'name'        => __( 'About Me Content Details Item Strong Text', 'jhon-smith' ),
		'description' => __( 'About Me Content Details Item Strong Text Add', 'jhon-smith' ),
		'id'          => 'jhon_smith_about_me_content_details_strong_text',
		'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Name', 'jhon-smith')
	) );

    // Homepage About Me Content Details Item Normal Text
    $jhon_smith_metabox->add_group_field( 'jhon_smith_about_me_content_details', array(
		'name'        => __( 'About Me Content Details Item Normal Text', 'jhon-smith' ),
		'description' => __('About Me Content Details Item Normal Text Add', 'jhon-smith'),
		'id'          => 'jhon_smith_about_me_content_details_normal_text',
		'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Jhon Smith', 'jhon-smith')
	) );
    /* 2.2.1. Homepage About Me Section Content Details Item Group End Here */

    /* 2.2.2. Homepage About Me Section Content Buttons Item Group Start Here */
    // Homepage About Me Content Buttons
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'About Me Content Buttons', 'jhon-smith' ),
        'desc'       => __( 'About Me Content Buttons Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_about_me_content_buttons',
        'type'       => 'group'
    ) );

    // Homepage About Me Content Buttons Item URL
    $jhon_smith_metabox->add_group_field( 'jhon_smith_about_me_content_buttons', array(
		'name'        => __( 'About Me Content Buttons Item URL', 'jhon-smith' ),
		'description' => __('About Me Content Buttons Item URL Add', 'jhon-smith'),
		'id'          => 'jhon_smith_about_me_content_button_url',
        'type'       => 'text_url',
        'sanitize_callback' => 'esc_url_raw',
        'default'    => esc_url('#')
	) );

    // Homepage About Me Content Buttons Item Text
    $jhon_smith_metabox->add_group_field( 'jhon_smith_about_me_content_buttons', array(
		'name'        => __( 'About Me Content Buttons Item Text', 'jhon-smith' ),
		'description' => __('About Me Content Buttons Item Text Add', 'jhon-smith'),
		'id'          => 'jhon_smith_about_me_content_button_text',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Download CV', 'jhon-smith')
	) );
    /* 2.2.1. Homepage About Me Section Content Buttons Item Group End Here */

    /* 2.2. Homepage About Me Section Content End Here */

    /*************************************************
    ===== 02. Homepage About Me Section End Here =====
    *************************************************/

    /****************************************************
    ===== 03. Homepage My Skills Section Start Here =====
    ****************************************************/
    $jhon_smith_metabox = new_cmb2_box( array(
        'id'            => 'jhon_smith_home_page_my_skills',
        'title'         => __('03. My Skills Section', 'jhon-smith'),
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'home-page-template.php' )
    ) );

    /* 3.1. Homepage My Skills Section Header Start Here */
    // Homepage My Skills Header Title Theme Color
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'My Skills Header Title Theme Color', 'jhon-smith' ),
        'desc'       => __( 'My Skills Header Title Theme Color Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_my_skills_title_theme_color',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('My', 'jhon-smith')
    ) );
    
    // Homepage My Skills Header Title Black
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'My Skills Header Title Black', 'jhon-smith' ),
        'desc'       => __( 'My Skills Header Title Black Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_my_skills_title_black',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Skills', 'jhon-smith')
    ) );
    /* 3.1. Homepage My Skills Section Header End Here */
    
    /* 3.2. Homepage My Skills Section Content Start Here */
    // Homepage My Skills Design Skills Title
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'My Skills Design Skills Title', 'jhon-smith' ),
        'desc'       => __( 'My Skills Design Skills Title Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_my_design_skills_title',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Design Skills', 'jhon-smith')
    ) );

    /* 3.2.1. Homepage My Skills Section Content Design Skills Item Group Start Here */
    // Homepage My Skills Design Skills Item
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'My Skills Design Skills Item', 'jhon-smith' ),
        'desc'       => __( 'My Skills Design Skills Item Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_my_design_skill_items',
        'type'       => 'group'
    ) );

    // Homepage My Skills Design Skill Item Text
    $jhon_smith_metabox->add_group_field( 'jhon_smith_my_design_skill_items', array(
		'name'        => __( 'My Skills Design Skill Item Text', 'jhon-smith' ),
		'description' => __('My Skills Design Skill Item Text Add', 'jhon-smith'),
		'id'          => 'jhon_smith_my_design_skill_item_text',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Abode Illustrator', 'jhon-smith')
	) );

    // Homepage My Skills Design Skill Item Text
    $jhon_smith_metabox->add_group_field( 'jhon_smith_my_design_skill_items', array(
		'name'        => __( 'My Skills Design Skill Item Percent', 'jhon-smith' ),
		'description' => __('My Skills Design Skill Item Percent Add', 'jhon-smith'),
		'id'          => 'jhon_smith_my_design_skill_item_percent',
        'type'       => 'text',
        'attributes' => array(
            'type' => 'number'
        ),
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('90', 'jhon-smith')
	) );
    /* 3.2.1. Homepage My Skills Section Content Design Skills Item Group End Here */
    
    // Homepage My Skills Development Skills Title
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'My Skills Development Skills Title', 'jhon-smith' ),
        'desc'       => __( 'My Skills Development Skills Title Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_my_development_skills_title',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Development Skills', 'jhon-smith')
    ) );

    /* 3.2.2. Homepage My Skills Section Content Development Skills Item Group Start Here */
    // Homepage My Skills Development Skills Item
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'My Skills Development Skills Item', 'jhon-smith' ),
        'desc'       => __( 'My Skills Development Skills Item Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_my_development_skill_items',
        'type'       => 'group'
    ) );

    // Homepage My Skills Development Skill Item Text
    $jhon_smith_metabox->add_group_field( 'jhon_smith_my_development_skill_items', array(
		'name'        => __( 'My Skills Development Skill Item Text', 'jhon-smith' ),
		'description' => __('My Skills Development Skill Item Text Add', 'jhon-smith'),
		'id'          => 'jhon_smith_my_development_skill_item_text',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('PHP', 'jhon-smith')
	) );

    // Homepage My Skills Development Skill Item Text
    $jhon_smith_metabox->add_group_field( 'jhon_smith_my_development_skill_items', array(
		'name'        => __( 'My Skills Development Skill Item Percent', 'jhon-smith' ),
		'description' => __('My Skills Development Skill Item Percent Add', 'jhon-smith'),
		'id'          => 'jhon_smith_my_development_skill_item_percent',
        'type'       => 'text',
        'attributes' => array(
            'type' => 'number'
        ),
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('80', 'jhon-smith')
	) );
    /* 3.2.2. Homepage My Skills Section Content Development Skills Item Group End Here */

    /* 3.2. Homepage My Skills Section Content End Here */

    /**************************************************
    ===== 03. Homepage My Skills Section End Here =====
    **************************************************/

    /**************************************************
    ===== 04. Homepage Hire Me Section Start Here =====
    **************************************************/
    $jhon_smith_metabox = new_cmb2_box( array(
        'id'            => 'jhon_smith_home_page_hire_me',
        'title'         => __('04. Hire Me Section', 'jhon-smith'),
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'home-page-template.php' )
    ) );

    // Homepage Hire Me Section Image
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'Hire Me Section Image', 'jhon-smith' ),
        'desc'       => __( 'Hire Me Section Image Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_hire_me_image',
        'type'       => 'text_url',
        'sanitize_callback' => 'esc_url_raw',
        'default'    => esc_url(get_template_directory_uri().'/assets/img/hire-me-bg.jpg')
    ) );

    // Homepage Hire Me Section Title
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'Hire Me Section Title', 'jhon-smith' ),
        'desc'       => __( 'Hire Me Section Title Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_hire_me_title',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Let\'s Work Together!', 'jhon-smith')
    ) );

    // Homepage Hire Me Section Sub-title
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'Hire Me Section Sub-Title', 'jhon-smith' ),
        'desc'       => __( 'Hire Me Section Sub-Title Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_hire_me_sub_title',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('I am available for freelance projects. Hire me and get your project done.', 'jhon-smith')
    ) );

    // Homepage Hire Me Section Button URL
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'Hire Me Section Button URL', 'jhon-smith' ),
        'desc'       => __( 'Hire Me Section Button Text Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_hire_me_btn_url',
        'type'       => 'text_url',
        'sanitize_callback' => 'esc_url_raw',
        'default'    => esc_url('#')
    ) );

    // Homepage Hire Me Section Button Text
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'Hire Me Section Button Text', 'jhon-smith' ),
        'desc'       => __( 'Hire Me Section Button Text Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_hire_me_btn_text',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('hire me', 'jhon-smith')
    ) );

    /************************************************
    ===== 04. Homepage Hire Me Section End Here =====
    ************************************************/
    
    /******************************************************
    ===== 05. Homepage My Services Section Start Here =====
    ******************************************************/
    $jhon_smith_metabox = new_cmb2_box( array(
        'id'            => 'jhon_smith_home_page_my_services',
        'title'         => __('05. My Services Section', 'jhon-smith'),
        'object_types' => array('page'), // post type
        'show_on'      => array('key' => 'page-template', 'value' => 'home-page-template.php')
    ) );

    /* 5.1. Homepage My Services Section Header Start Here */
    // Homepage My Services Header Title Theme Color
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'My Services Header Title Theme Color', 'jhon-smith' ),
        'desc'       => __( 'My Services Header Title Theme Color Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_my_services_title_theme_color',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('My', 'jhon-smith')
    ) );
    
    // Homepage My Services Header Title Black
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'My Services Header Title Black', 'jhon-smith' ),
        'desc'       => __( 'My Services Header Title Black Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_my_services_title_black',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Services', 'jhon-smith')
    ) );
    /* 5.1. Homepage My Services Section Header End Here */

    /* 5.2. Homepage My Services Section Content Item Group Start Here */
    // Homepage My Services Section Item
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'My Services Section Item', 'jhon-smith' ),
        'desc'       => __( 'My Services Section Item Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_my_service_items',
        'type'       => 'group'
    ) );

    // Homepage My Services Section Item Icon
    $jhon_smith_metabox->add_group_field( 'jhon_smith_my_service_items', array(
		'name'        => __( 'My Services Section Item Icon', 'jhon-smith' ),
		'description' => __('My Services Section Item Icon Add', 'jhon-smith'),
		'id'          => 'jhon_smith_my_service_item_icon',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('fas fa-palette', 'jhon-smith')
	) );

    // Homepage My Services Section Item Title
    $jhon_smith_metabox->add_group_field( 'jhon_smith_my_service_items', array(
		'name'        => __( 'My Services Section Item Title', 'jhon-smith' ),
		'description' => __('My Services Section Item Title Add', 'jhon-smith'),
		'id'          => 'jhon_smith_my_service_item_title',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Graphic Design', 'jhon-smith')
	) );

    // Homepage My Services Section Item Description
    $jhon_smith_metabox->add_group_field( 'jhon_smith_my_service_items', array(
		'name'        => __( 'My Services Section Item Description', 'jhon-smith' ),
		'description' => __('My Services Section Item Description Add', 'jhon-smith'),
		'id'          => 'jhon_smith_my_service_item_description',
        'type'       => 'textarea',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.', 'jhon-smith')
	) );
    /* 5.2. Homepage My Services Section Content Design Skills Item Group End Here */

    /****************************************************
    ===== 05. Homepage My Services Section End Here =====
    ****************************************************/

    /**************************************************
    ===== 06. Homepage CountUp Section Start Here =====
    **************************************************/
    $jhon_smith_metabox = new_cmb2_box( array(
        'id'            => 'jhon_smith_home_page_countup',
        'title'         => __('06. CountUp Section', 'jhon-smith'),
        'object_types' => array('page'), // post type
        'show_on'      => array('key' => 'page-template', 'value' => 'home-page-template.php')
    ) );

    // Homepage CountUp Section Image
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'CountUp Section Image', 'jhon-smith' ),
        'desc'       => __( 'CountUp Section Image Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_countup_image',
        'type'       => 'text_url',
        'sanitize_callback' => 'esc_url_raw',
        'default'    => esc_url(get_template_directory_uri().'/assets/img/countup-bg.jpg')
    ) );

    /* 6.1. Homepage CountUp Section Content Item Group Start Here */
    // Homepage CountUp Section Item
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'CountUp Section Item', 'jhon-smith' ),
        'desc'       => __( 'CountUp Section Item Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_countup_items',
        'type'       => 'group'
    ) );

    // Homepage CountUp Section Item Icon
    $jhon_smith_metabox->add_group_field( 'jhon_smith_countup_items', array(
		'name'        => __( 'CountUp Section Item Icon', 'jhon-smith' ),
		'description' => __('CountUp Section Item Icon Add', 'jhon-smith'),
		'id'          => 'jhon_smith_countup_item_icon',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('fas fa-coffee', 'jhon-smith')
	) );

    // Homepage CountUp Section Item Number
    $jhon_smith_metabox->add_group_field( 'jhon_smith_countup_items', array(
		'name'        => __( 'CountUp Section Item Number', 'jhon-smith' ),
		'description' => __('CountUp Section Item Number Add', 'jhon-smith'),
		'id'          => 'jhon_smith_countup_item_number',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('781', 'jhon-smith')
	) );

    // Homepage CountUp Section Item Title
    $jhon_smith_metabox->add_group_field( 'jhon_smith_countup_items', array(
		'name'        => __( 'CountUp Section Item Title', 'jhon-smith' ),
		'description' => __('CountUp Section Item Title Add', 'jhon-smith'),
		'id'          => 'jhon_smith_countup_item_title',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('cups of coffee', 'jhon-smith')
	) );
    /* 6.1. Homepage CountUp Section Content Design Skills Item Group End Here */

    /************************************************
    ===== 06. Homepage CountUp Section End Here =====
    ************************************************/    

    /*****************************************************
    ==== 07. Homepage Testimonials Section Start Here ====
    *****************************************************/
    $jhon_smith_metabox = new_cmb2_box( array(
        'id'            => 'jhon_smith_home_page_testimonials',
        'title'         => __('07. Testimonials Section', 'jhon-smith'),
        'object_types' => array('page'), // post type
        'show_on'      => array('key' => 'page-template', 'value' => 'home-page-template.php')
    ) );

    /* 7.1. Homepage Testimonials Section Content Item Group Start Here */
    // Homepage Testimonials Section Item
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'Testimonials Section Item', 'jhon-smith' ),
        'desc'       => __( 'Testimonials Section Item Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_testimonials_items',
        'type'       => 'group'
    ) );

    // Homepage Testimonials Section Item Image
    $jhon_smith_metabox->add_group_field( 'jhon_smith_testimonials_items', array(
		'name'        => __( 'Testimonials Section Item Image', 'jhon-smith' ),
		'description' => __('Testimonials Section Item Image Add', 'jhon-smith'),
		'id'          => 'jhon_smith_testimonials_item_image',
        'type'       => 'text_url',
        'sanitize_callback' => 'esc_url_raw',
        'default'    => esc_url(get_template_directory_uri().'/assets/img/client/client-1.jpg')
	) );

    // Homepage Testimonials Section Item Title
    $jhon_smith_metabox->add_group_field( 'jhon_smith_testimonials_items', array(
		'name'        => __( 'Testimonials Section Item Title', 'jhon-smith' ),
		'description' => __('Testimonials Section Item Title Add', 'jhon-smith'),
		'id'          => 'jhon_smith_testimonials_item_title',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Danny J. Trujillo', 'jhon-smith')
	) );

    // Homepage Testimonials Section Item Sub-title
    $jhon_smith_metabox->add_group_field( 'jhon_smith_testimonials_items', array(
		'name'        => __( 'Testimonials Section Item Sub-title', 'jhon-smith' ),
		'description' => __('Testimonials Section Item Sub-title Add', 'jhon-smith'),
		'id'          => 'jhon_smith_testimonials_item_sub_title',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Client', 'jhon-smith')
	) );

    // Homepage Testimonials Section Item Description
    $jhon_smith_metabox->add_group_field( 'jhon_smith_testimonials_items', array(
		'name'        => __( 'Testimonials Section Item Description', 'jhon-smith' ),
		'description' => __('Testimonials Section Item Description Add', 'jhon-smith'),
		'id'          => 'jhon_smith_testimonials_item_description',
        'type'       => 'textarea',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'jhon-smith')
	) );
    /* 7.1. Homepage CountUp Section Content Design Skills Item Group End Here */

    /***************************************************
    ==== 07. Homepage Testimonials Section End Here ====
    ***************************************************/

    /*****************************************************
    ===== 08. Homepage Contact Me Section Start Here =====
    *****************************************************/
    $jhon_smith_metabox = new_cmb2_box( array(
        'id'            => 'jhon_smith_home_page_contact_me',
        'title'         => __('08. Contact Me Section', 'jhon-smith'),
        'object_types' => array('page'), // post type
        'show_on'      => array('key' => 'page-template', 'value' => 'home-page-template.php')
    ) );
    
    /* 8.1. Homepage Contact Me Section Header End Here */
    // Homepage Contact Me Header Title Black
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'Contact Me Header Title Black', 'jhon-smith' ),
        'desc'       => __( 'Contact Me Header Title Black Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_contact_me_title_black',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Contact', 'jhon-smith')
    ) );

    // Homepage Contact Me Header Title Theme Color
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'Contact Me Header Title Theme Color', 'jhon-smith' ),
        'desc'       => __( 'Contact Me Header Title Theme Color Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_contact_me_title_theme_color',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('Me', 'jhon-smith')
    ) );
    /* 8.1. Homepage Contact Me Section Header End Here */

    /* 8.2. Homepage Contact Me Section Content Item Group Start Here */
    // Homepage Contact Me Section Item
    $jhon_smith_metabox->add_field( array(
        'name'       => __( 'Contact Me Section Item', 'jhon-smith' ),
        'desc'       => __( 'Contact Me Section Item Add', 'jhon-smith' ),
        'id'         => 'jhon_smith_contact_me_items',
        'type'       => 'group'
    ) );

    // Homepage Contact Me Section Item Icon
    $jhon_smith_metabox->add_group_field( 'jhon_smith_contact_me_items', array(
		'name'        => __( 'Contact Me Section Item Icon', 'jhon-smith' ),
		'description' => __('Contact Me Section Item Icon Add', 'jhon-smith'),
		'id'          => 'jhon_smith_contact_me_item_icon',
        'type'       => 'text',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('fas fa-phone-alt', 'jhon-smith')
	) );

    // Homepage Contact Me Section Item Description
    $jhon_smith_metabox->add_group_field( 'jhon_smith_contact_me_items', array(
		'name'        => __( 'Contact Me Section Item Description', 'jhon-smith' ),
		'description' => __('Contact Me Section Item Description Add', 'jhon-smith'),
		'id'          => 'jhon_smith_contact_me_item_description',
        'type'       => 'textarea',
        'sanitize_callback' => 'sanitize_text_field',
        'default'    => __('+44 1632 967704,
        +20 0129 147 2249', 'jhon-smith')
	) );
    /* 8.2. Homepage Contact Me Section Content Design Skills Item Group End Here */

    /***************************************************
    ===== 08. Homepage Contact Me Section End Here =====
    ***************************************************/

}
add_action('cmb2_admin_init', 'jhon_smith_metaboxes');