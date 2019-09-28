<?php

/* ADD NAVIGATION */
function add_navigation() {
    register_nav_menus(
        array(
            'header_nav' => __( 'Header Navigation' ),
            'sidebar_nav' => __( 'Sidebar Navigation' )
        )
    );
}

add_action( 'init', 'add_navigation' );

?>