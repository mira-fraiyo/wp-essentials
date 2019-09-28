<?php

/* CUSTOMIZE "READ MORE" */
function custom_read_more($more) {
    global $post;
	return '... <a class="more" href="' . get_permalink($post->ID) . '">read more <i class="fas fa-caret-right"></i></a>';
}

add_filter('excerpt_more', 'custom_read_more');

?>