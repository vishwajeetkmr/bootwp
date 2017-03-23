<?php
    // Register Nav Walker class Alias
    require_once('wp_bootstrap_navwalker.php');


    // Theme Support

    function wpb_theme_setup(){
        
        add_theme_support('post-thumbnails');
        
        register_nav_menus(array(
            'primary' => __('Primary Menu')
        ));
    }

    add_action('after_setup_theme','wpb_theme_setup');

// Excerpt length

function set_excerpt_length(){
    return 45;
}

add_filter('excerpt_length','set_excerpt_length');


// Widget Locations
function wpb_init_widgets($id){
  register_sidebar(array(
    'name'  => 'Sidebar',
    'id'    => 'sidebar',
    'before_widget' => '<div class="sidebar-module">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));
}


add_action('widgets_init', 'wpb_init_widgets');