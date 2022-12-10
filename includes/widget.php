<?php

function getclientmem_register_all_sidebar()
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
add_action('widgets_init', 'getclientmem_register_all_sidebar');
