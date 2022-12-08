<?php

// Add Theme Support
add_theme_support('title-tag');
add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
// add_theme_support('custom-logo');

// Add Custom Logo And Title
function abs_custom_logo_setup()
{
    $defaults = array(
        'height'               => 120,
        'width'                => 200,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'abs_custom_logo_setup');

// Add Menu Location
function add_nav_menus()
{
    register_nav_menus(array(
        'main menu'             => 'Main Menu',
        'tobbar menu'           => 'Topbar Menu',
        'footer menu'           => 'Footer Menu'
    ));
}
add_action('init', 'add_nav_menus');


// Add All CSS Files

function abs_add_all_css()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('absstyle1', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('absstyle2', get_template_directory_uri() . '/css/fonts.css');
    wp_enqueue_style('absstyle3', get_template_directory_uri() . '/css/style.css');
}

add_action('wp_enqueue_scripts', 'abs_add_all_css');


// Add All JavaScript Files
function abs_add_all_js()
{
    wp_enqueue_script('absscript1', get_template_directory_uri() . '/js/core.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('absscript2', get_template_directory_uri() . '/js/script.js', array('jquery'), 1.1, true);
}

add_action('wp_enqueue_scripts', 'abs_add_all_js');
