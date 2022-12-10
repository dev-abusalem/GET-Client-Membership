<?php

// Text Domain: getclientmem;

// Register Custom Post Type For Slider
function getclientmem_home_slider_custom_post_type()
{

    $labels = array(
        'name'                  => _x('Slider', 'Post Type General Name', 'getclientmem'),
        'singular_name'         => _x('Slider', 'Post Type Singular Name', 'getclientmem'),
        'menu_name'             => __('Sliders', 'getclientmem'),
        'name_admin_bar'        => __('Slider', 'getclientmem'),
        'all_items'             => __('All Sliders', 'getclientmem'),
        'add_new_item'          => __('Add Slider', 'getclientmem'),
        'add_new'               => __('Add Slider', 'getclientmem'),
        'new_item'              => __('New Item', 'getclientmem'),
        'edit_item'             => __('Edit Slider', 'getclientmem'),
        'update_item'           => __('Update Slider', 'getclientmem'),
        'view_item'             => __('View Slider', 'getclientmem'),
        'view_items'            => __('View Sliders', 'getclientmem'),
        'search_items'          => __('Search Item', 'getclientmem'),
        'not_found'             => __('Slider Not found', 'getclientmem'),
        'not_found_in_trash'    => __('Slider Not found in Trash', 'getclientmem'),
        'featured_image'        => __('Slider Featured Image', 'getclientmem'),
        'set_featured_image'    => __('Set slider image', 'getclientmem'),
        'remove_featured_image' => __('Remove slider image', 'getclientmem'),

    );
    $args = array(
        'label'                 => __('Slider', 'getclientmem'),
        'description'           => __('Slider Description', 'getclientmem'),
        'labels'                => $labels,
        'supports'              => array('title', 'thumbnail', 'editor', 'custom-fields'),
        'taxonomies'            => array('category', 'post_tag'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'capability_type'       => 'page',
        'menu_icon'             => 'dashicons-slides',
    );

    register_post_type('slider', $args);
}
add_action('init', 'getclientmem_home_slider_custom_post_type', 0);
