<?php
    //register menu
    function register_menu() {

    register_nav_menus(
        array(
            'menu_top' => 'Header - Menu'
        ) );
    }
    add_action( 'init', 'register_menu' );