<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}




function getclientmem_register_category_sidebar()
{
    register_sidebar(array(
        'name'          => __('Category Sidebar', 'getclientmem'),
        'id'            => 'sidebar-cat',
        'description'   => __('Widgets in this area will be shown on all categories.', 'getclientmem'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'getclientmem_register_category_sidebar');

function getclientmem_register_recent_post_sidebar()
{
    register_sidebar(array(
        'name'          => __('Recent Post Sidebar', 'getclientmem'),
        'id'            => 'recent-post-sidebar',
        'description'   => __('Widgets in this area will be shown on all popular post', 'getclientmem'),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'getclientmem_register_recent_post_sidebar');


function getclientmem_footer_one_widget()
{
    register_sidebar(array(
        'name'          => __('Footer 1', 'getclientmem'),
        'id'            => 'footer-1',
        'description'   => __('Widgets in this area will be shown on left footer section', 'getclientmem'),
        'before_widget' => '<div class="inset-xl-right-20" style="max-width: 510px;">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ));
}
add_action('widgets_init', 'getclientmem_footer_one_widget');
