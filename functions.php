<?php



// Add Menu Location
function add_nav_menus()
{
    register_nav_menus(array(
        'main menu'             => 'Main Menu',
        'tobbar menu'           => 'Topbar Menu',
        'footer menu'           => 'Footer Menu',
        'quick links menu'           => 'Quick Links Menu'
    ));
}
add_action('init', 'add_nav_menus');


// Add Extra Class In Wordpress Submenu

function getclientmem_custom_dropdown_class($classes)
{
    $classes[] = 'rd-navbar-dropdown';

    return $classes;
}

add_filter('nav_menu_submenu_css_class', 'getclientmem_custom_dropdown_class');








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






// Links Extranal PHP Files From Includes

include get_template_directory() . "./includes/customizer-control.php";
include get_template_directory() . "./includes/all-them-support.php";
include get_template_directory() . "./includes/widget.php";
include get_template_directory() . "./includes/custom-all-post-type.php";
