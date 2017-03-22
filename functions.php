<?php
    // Register Nav Walker class Alias
    require_once('wp_bootstrap_navwalker.php');


    // Theme Support

    function wpb_theme_setup(){
        
        register_nav_menus(array(
            'primary' => __('Primary Menu')
        ));
    }

    add_action('after_setup_theme','wpb_theme_setup');