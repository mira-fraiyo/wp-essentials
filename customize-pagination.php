<?php

/* CUSTOMIZE PAGINATION */

function custom_pagination() {
    global $wp_query;
    $total_pages = $wp_query->max_num_pages;
    
    echo '<nav class="page-nav">';
    
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
 
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format'    => 'page/%#%',
            'total'     => $total_pages,
            'current'   => $current_page,
            'prev_text' => __( '<i class="fas fa-caret-left"></i> Previous' ),
            'next_text' => __( 'Next <i class="fas fa-caret-right"></i>' ),
            'type'      => 'list'
        ));
    }
    
    echo '</nav>';
}

?>