<?php

function getclientmem_register_all_sidebar()
{

    if (function_exists('register_sidebar')) {
        $sidebar1 = array(
            'before_widget' => '<div class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widgettitle">',
            'after_title' => '</h2>',
            'name' => __('Categories Sidebar', 'getclientmem'),
            'description'   => __('This widget only for add category in sidebar', 'getclientmem'),

        );
        $sidebar2 = array(
            'before_widget' => '<div class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widgettitle">',
            'after_title' => '</h2>',
            'name' => __('Popular Post Sidebar', 'getclientmem'),
            'description'   => __('This widget only for add popular post in sidebar', 'getclientmem'),

        );
        $sidebar3 = array(
            'before_widget' => '<div class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widgettitle">',
            'after_title' => '</h2>',
            'name' => __('Social Feed Sidebar', 'getclientmem'),
            'description'   => __('This widget only for add social feed in sidebar', 'getclientmem'),

        );
        $sidebar4 = array(
            'before_widget' => '<div class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widgettitle">',
            'after_title' => '</h2>',
            'name' => __('Tags Sidebar', 'getclientmem'),
            'description'   => __('This widget only for add tags in sidebar', 'getclientmem'),

        );

        register_sidebar($sidebar1);
        register_sidebar($sidebar2);
        register_sidebar($sidebar3);
        register_sidebar($sidebar4);
    }
}
add_action('widgets_init', 'getclientmem_register_all_sidebar');
