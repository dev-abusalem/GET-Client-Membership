<?php



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











function getclientmem_customize_register_for_footer_customize($wp_customize)
{

    $wp_customize->add_section('getclientmem_footer_customize', array(
        'title'      => __('Footer Logo', 'getclimem'),
        'priority'   => 30,
    ));

    $wp_customize->add_setting('footer_customize_logo', array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'ic_sanitize_image',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'footer_customize_logo',
        array(
            'label'    => __('Footer Logo', 'getclimem-domain'),
            'section'  => 'getclientmem_footer_customize',
        )
    ));

    // // Copy Right Text


    // $wp_customize->add_setting('footer_customize_copy_right_text', array(

    //     'default'           => '2022 © Get Client Membership',
    //     'sanitize_callback' => 'ic_sanitize_image',
    // ));
    // $wp_customize->add_control(
    //     'footer_customize_copy_right_text',
    //     array(
    //         'label'     => __('Copyright Text', 'getclimem-domain'),
    //         'section'   => 'getclientmem_footer_customize',
    //         'type'      => 'text'

    // ));
}

add_action('customize_register', 'getclientmem_customize_register_for_footer_customize');
