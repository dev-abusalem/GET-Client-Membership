<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Register Customizer For Create Option Header


function getclientmem_customize_register_for_header_customize($wp_customize)
{
    // For Phone No Customize
    $wp_customize->add_section('getclientmem_topbar_customize', array(
        'title'      => __('Topbar Customize', 'getclimem'),
        'priority'   => 30,
    ));

    $wp_customize->add_setting('topbar_customize_phone', array(
        'default'   => '+1 (232) 349–8447',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('topbar_customize_phone', array(
        'label'      => __('Change Phone No.', 'getclimem'),
        'section'    => 'getclientmem_topbar_customize',
        'type'       => 'text',
    ));

    // For Email

    $wp_customize->add_setting('topbar_customize_email', array(
        'default'   => ' info@demolink.org',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('topbar_customize_email', array(
        'label'      => __('Change Email', 'getclimem'),
        'section'    => 'getclientmem_topbar_customize',
        'type'       => 'text',
    ));

    // For Email

    $wp_customize->add_setting('footer_customize_location', array(
        'default'   => '6036 Richmond hwy,Alexandria, VA USA 22303',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('footer_customize_location', array(
        'label'      => __('Change Location', 'getclimem'),
        'section'    => 'getclientmem_topbar_customize',
        'type'       => 'text',
    ));

    // For Facebook

    $wp_customize->add_setting('topbar_customize_fb', array(
        'default'   => 'https://www.facebook.com',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('topbar_customize_fb', array(
        'label'      => __('Change Facebook URL', 'getclimem'),
        'section'    => 'getclientmem_topbar_customize',
        'type'       => 'url',
    ));

    // For Twitter

    $wp_customize->add_setting('topbar_customize_twitter', array(
        'default'   => 'https://www.twitter.com',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('topbar_customize_twitter', array(
        'label'      => __('Change Twitter URL', 'getclimem'),
        'section'    => 'getclientmem_topbar_customize',
        'type'       => 'url',
    ));

    // For Instagram

    $wp_customize->add_setting('topbar_customize_insta', array(
        'default'   => 'https://www.instagram.com',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('topbar_customize_insta', array(
        'label'      => __('Change Instagram URL', 'getclimem'),
        'section'    => 'getclientmem_topbar_customize',
        'type'       => 'url',
    ));

    // Change Appionment Button Link

    $wp_customize->add_setting('topbar_customize_appion_btn', array(
        'default'   => '/',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('topbar_customize_appion_btn', array(
        'label'      => __('Appointment Button URL', 'getclimem'),
        'section'    => 'getclientmem_topbar_customize',
        'type'       => 'url',
    ));
}

add_action('customize_register', 'getclientmem_customize_register_for_header_customize');






function getclientmem_home_about_section_customize($wp_customize)
{

    $wp_customize->add_section('getclientmem_home_about_sec', array(
        'title'      => __('Home About Section', 'getclientmem'),
        'priority'   => 60,
        'description'   => 'Please always use https or http for URL field',
    ));


    // Add About Overlay Image URL

    $wp_customize->add_setting('home_about_overlay_image_url_update', array(
        'default'   => 'https://wallpapercave.com/wp/wp6369875.jpg',
        'transport' => 'refresh',

    ));

    $wp_customize->add_control('home_about_overlay_image_url_update', array(
        'label'      => __('Overlay Image URL', 'getclientmem'),

        'section'    => 'getclientmem_home_about_sec',
        'type'       => 'url',
    ));
    // Add About Video URL

    $wp_customize->add_setting('home_about_video_url_update', array(
        'default'   => 'https://youtu.be/668nUCeBHyY',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('home_about_video_url_update', array(
        'label'      => __('Video URL', 'getclientmem'),
        'section'    => 'getclientmem_home_about_sec',
        'type'       => 'url',
    ));

    // Add About Video URL

    $wp_customize->add_setting('home_about_video_url_update', array(
        'default'   => 'https://youtu.be/668nUCeBHyY',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('home_about_video_url_update', array(
        'label'      => __('Video URL', 'getclientmem'),
        'section'    => 'getclientmem_home_about_sec',
        'type'       => 'url',
    ));
    // Add Title Texts

    $wp_customize->add_setting('home_about_title_section_update', array(
        'default'   => 'About Us',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('home_about_title_section_update', array(
        'label'      => __('Title', 'getclientmem'),
        'section'    => 'getclientmem_home_about_sec',
        'type'       => 'text',
    ));



    // Add Descriptions Texts

    $wp_customize->add_setting('home_about_description_section_update', array(
        'default'   => 'The professionals at Shelter Insurance Company are experts in their fields and will help you design solutions that fit your needs. We look forward to working with you!',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('home_about_description_section_update', array(
        'label'      => __('Sort Description', 'getclientmem'),
        'section'    => 'getclientmem_home_about_sec',
        'type'       => 'textarea',
    ));


    // Add Button Text

    $wp_customize->add_setting('home_about_button_section_update', array(
        'default'   => 'Get a Quote',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('home_about_button_section_update', array(
        'label'      => __('Button Text', 'getclientmem'),
        'section'    => 'getclientmem_home_about_sec',
        'type'       => 'text',
    ));

    // Add Button URL

    $wp_customize->add_setting('home_about_button_URL_update', array(
        'default'   => 'https://google.com',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('home_about_button_URL_update', array(
        'label'      => __('Button URL', 'getclientmem'),
        'section'    => 'getclientmem_home_about_sec',
        'type'       => 'url',
    ));
}

add_action('customize_register', 'getclientmem_home_about_section_customize');
