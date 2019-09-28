<?php

/* ADD STYLESHEETS */
function add_stylesheets(){
    wp_enqueue_style( 'STYLESHEET_NAME', get_template_directory_uri() . '/STYLESHEET_NAME.css' );
}

add_action( 'wp_enqueue_scripts', 'add_stylesheets' );

?>