<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
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

// Register Custom Post Type For Testmonials
function getclientmem_home_testimonial_custom_post_type()
{

    $labels = array(
        'name'                  => _x('Testimonial', 'Post Type General Name', 'getclientmem'),
        'singular_name'         => _x('Testimonial', 'Post Type Singular Name', 'getclientmem'),
        'menu_name'             => __('Testimonials', 'getclientmem'),
        'name_admin_bar'        => __('Testimonial', 'getclientmem'),
        'all_items'             => __('All Testimonials', 'getclientmem'),
        'add_new_item'          => __('Add Testimonial', 'getclientmem'),
        'add_new'               => __('Add Testimonial', 'getclientmem'),
        'new_item'              => __('New Testimonial', 'getclientmem'),
        'edit_item'             => __('Edit Testimonial', 'getclientmem'),
        'update_item'           => __('Update Testimonial', 'getclientmem'),
        'view_item'             => __('View Testimonial', 'getclientmem'),
        'view_items'            => __('View Testimonial', 'getclientmem'),
        'search_items'          => __('Search Testimonial', 'getclientmem'),
        'not_found'             => __('Testimonial Not found', 'getclientmem'),
        'not_found_in_trash'    => __('Testimonial Not found in Trash', 'getclientmem'),
        'featured_image'        => __('Testimonial Featured Image', 'getclientmem'),
        'set_featured_image'    => __('Set Testimonial image', 'getclientmem'),
        'remove_featured_image' => __('Remove Testimonial image', 'getclientmem'),

    );
    $args = array(
        'label'                 => __('Testimonial', 'getclientmem'),
        'description'           => __('Testimonial Description', 'getclientmem'),
        'labels'                => $labels,
        'supports'              => array('title', 'thumbnail', 'editor'),
        'taxonomies'            => array('category'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'capability_type'       => 'page',
        'menu_icon'             => 'dashicons-testimonial
        ',
    );

    register_post_type('testimonial', $args);
}
add_action('init', 'getclientmem_home_testimonial_custom_post_type', 0);



// Register Custom Post Type For Home Tab Content
function getclientmem_tab_content_custom_post_type()
{

    $labels = array(
        'name'                  => _x('Tab Content', 'Post Type General Name', 'getclientmem'),
        'singular_name'         => _x('Tab Content', 'Post Type Singular Name', 'getclientmem'),
        'menu_name'             => __('Tab Contents', 'getclientmem'),
        'name_admin_bar'        => __('Tab Content', 'getclientmem'),
        'all_items'             => __('All Tab Content', 'getclientmem'),
        'add_new_item'          => __('Add Tab Content', 'getclientmem'),
        'add_new'               => __('Add Tab Content', 'getclientmem'),
        'new_item'              => __('New Tab Content', 'getclientmem'),
        'edit_item'             => __('Edit Tab Content', 'getclientmem'),
        'update_item'           => __('Update Tab Content', 'getclientmem'),
        'view_item'             => __('View Tab Content', 'getclientmem'),
        'view_items'            => __('View Tab Content', 'getclientmem'),
        'search_items'          => __('Search Tab Content', 'getclientmem'),
        'not_found'             => __('Tab Content Not found', 'getclientmem'),
        'not_found_in_trash'    => __('Tab Content Not found in Trash', 'getclientmem'),
        'featured_image'        => __('Tab Content Featured Image', 'getclientmem'),
        'set_featured_image'    => __('Set Tab Content image', 'getclientmem'),
        'remove_featured_image' => __('Remove Tab Content image', 'getclientmem'),

    );
    $args = array(
        'label'                 => __('Tab Content', 'getclientmem'),
        'description'           => __('Tab Content Description', 'getclientmem'),
        'labels'                => $labels,
        'supports'              => array('title', 'thumbnail', 'editor', 'custom-fields'),
        'taxonomies'            => array('category', 'post_tag'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'capability_type'       => 'page',
        'menu_icon'             => 'dashicons-list-view
        ',
    );

    register_post_type('tabcontent', $args);
}
add_action('init', 'getclientmem_tab_content_custom_post_type', 0);



// Register Custom Post Type For Home Tab Content
function getclientmem_team_custom_post_type()
{

    $labels = array(
        'name'                  => _x('Team Members', 'Post Type General Name', 'getclientmem'),
        'singular_name'         => _x('Team Member', 'Post Type Singular Name', 'getclientmem'),
        'menu_name'             => __('Team Members', 'getclientmem'),
        'name_admin_bar'        => __('Our Team', 'getclientmem'),
        'all_items'             => __('All Team Members', 'getclientmem'),
        'add_new_item'          => __('Add New Team Member', 'getclientmem'),
        'add_new'               => __('Add New Team Member', 'getclientmem'),
        'new_item'              => __('New Team Member', 'getclientmem'),
        'edit_item'             => __('Edit Team Member', 'getclientmem'),
        'update_item'           => __('Update Team Member', 'getclientmem'),
        'view_item'             => __('View Team Member', 'getclientmem'),
        'view_items'            => __('View Team Member', 'getclientmem'),
        'search_items'          => __('Search Team Member', 'getclientmem'),
        'not_found'             => __('Team Member Not found', 'getclientmem'),
        'not_found_in_trash'    => __('Team Member Not found in Trash', 'getclientmem'),
        'featured_image'        => __('Team Member Featured Image', 'getclientmem'),
        'set_featured_image'    => __('Set Team Member Image', 'getclientmem'),
        'remove_featured_image' => __('Remove Team Member Image', 'getclientmem'),

    );
    $args = array(
        'label'                 => __('Our Team', 'getclientmem'),
        'description'           => __('Our Team Description', 'getclientmem'),
        'labels'                => $labels,
        'supports'              => array('title', 'thumbnail', 'editor', 'custom-fields'),
        'taxonomies'            => array('category', 'post_tag'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'capability_type'       => 'page',
        'menu_icon'             => 'dashicons-groups
        ',
    );

    register_post_type('team', $args);
}
add_action('init', 'getclientmem_team_custom_post_type', 0);
