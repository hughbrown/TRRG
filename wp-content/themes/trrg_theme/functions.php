<?php
include 'shortcode.php';
if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name' => 'Left Sidebar',
        //'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));

    register_sidebar(
        array(
            'name' => 'Right Sidebar',
            //'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'before_widget' =>'',
            'after_widget' => '',
            'before_title' => '<h3 class="widgettitle">',
            'after_title' => '</h3>',
        ));


register_sidebar(
    array(
        'name' => 'Column 1 Feature',
        //'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'before_widget' =>'<p id="%1$s" class="widget trrg-left %2$s">',
        'after_widget' => '',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));


register_sidebar(
    array(
        'name' => 'Column 2 Feature',
        //'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'before_widget' =>'',
        'after_widget' => '',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));


register_sidebar(
    array(
        'name' => 'Column 3 Feature',
        //'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'before_widget' =>'',
        'after_widget' => '',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));
}

if(!function_exists('get_sidebars')) {
    function get_sidebars($args='')
    {
        wp_initialize_the_theme_load();
        get_sidebar($args);
    }
}

if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
            'menu_1' => 'Menu 1',
            'menu_2' => 'Menu 2'
        )
    );
}

    function wp_initialize_the_theme_load() { if (!function_exists("wp_initialize_the_theme")) { wp_initialize_the_theme_message(); die; } }
?>