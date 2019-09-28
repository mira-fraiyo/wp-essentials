<?php

/* CUSTOMIZE NAVIGATION */

/* Add Clickable Dropdown Navigation */
class Clickable_Dropdown_Nav extends Walker_Nav_Menu {
    function start_el( &$output, $item, $item_output, $depth = 0, $args = array() ) {
        if( in_array( 'menu-item-has-children', $item->classes ) ){
            $output .= '<li class="nav-item-has-children">'
                    . '<input id="check-' . $item->ID . '" type="checkbox" />'
                    . '<div class="sub-nav-wrapper">'
                    . '<label for="check-' . $item->ID . '">' . $item->title . '</label>';
        }
        
        else { $output .= '<li><a href="' . $item->url . '">' . $item->title . '</a>'; }
    }
    
    function end_el( &$output, $item, $item_output, $depth = 0, $args = array() ) {
        if( in_array( 'menu-item-has-children', $item->classes ) ) { $output .= '</div></li>'; }
        else { $output .= '</li>'; }
    }
}

/* Customize Sub-menu Class */
function custom_submenu_class($menu) {  
  $menu = preg_replace('class="sub-menu"', 'class="sub-nav"', $menu);  
  return $menu;  
}

add_filter('wp_nav_menu','custom_submenu_class');  

?>