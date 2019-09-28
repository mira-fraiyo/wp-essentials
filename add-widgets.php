<?php

/* ADD WIDGETS */
function add_widgets() {
    register_sidebar ( array(
		'name'          => __( 'Header Widgets' ),
        'id'            => 'header_widgets',
        'before_widget' => '<div class="header-widget %2$s" id="%1$s">',
		'after_widget'  => '</div>'
	) );
    
    register_sidebar ( array(
		'name'          => __( 'Sidebar Widgets (Top)' ),
        'id'            => 'sidebar_widgets_top',
        'before_widget' => '<div class="sidebar-widget %2$s" id="%1$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
    
    register_sidebar ( array(
		'name'          => __( 'Sidebar Widgets (Bottom)' ),
        'id'            => 'sidebar_widgets_bottom',
        'before_widget' => '<div class="sidebar-widget %2$s" id="%1$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
} 

add_action( 'widgets_init', 'add_widgets' );

?>