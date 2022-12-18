<?php

// Add Theme Support
add_theme_support('title-tag');
add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('custom-background');
add_theme_support('woocommerce');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'script',
    'style',
));

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
