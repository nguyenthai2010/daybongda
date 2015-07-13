<?php

    //add theme support
    add_theme_support('post-thumbnails',array('post', 'page'));

    //register menu
    function register_menu() {

    register_nav_menus(
        array(
            'menu_top' => 'Header - Menu',
            'menu_left' => 'Left - Menu'
        ) );
    }
    add_action( 'init', 'register_menu' );