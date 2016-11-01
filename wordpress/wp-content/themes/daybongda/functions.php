<?php

    //add theme support
    add_theme_support('post-thumbnails',array('post', 'page', 'slider'));

    //register menu
    function register_menu() {

    register_nav_menus(
        array(
            'menu_top' => 'Header - Menu',
            'menu_left' => 'Left - Menu'
        ) );
    }
    add_action( 'init', 'register_menu' );


function get_page_id_by_slug($slug){
    global $wpdb;
    $id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$slug."'AND post_type = 'page'");
    return $id;
}

function get_post_id_by_slug($slug){
    global $wpdb;
    $id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$slug."'AND post_type = 'post'");
    return $id;
}

function get_post_id( $slug, $post_type ) {
    if(!empty($slug)){
        $query = new WP_Query(
            array(
                'name' => $slug,
                'post_type' => $post_type
            )
        );

        $query->the_post();

        return get_the_ID();
    }
}
