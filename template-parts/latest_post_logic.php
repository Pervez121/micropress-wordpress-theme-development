<?php
// latest_post_logic.php

// Get the latest post
$latest_post = get_posts(array(
    'numberposts' => 1,
    'orderby'     => 'post_date',
    'order'       => 'DESC',
));

// Check if there's at least one post
if ($latest_post) {
    $post = $latest_post[0];
    $thumbnail = get_the_post_thumbnail_url($post->ID);
    $category = get_the_category($post->ID);
    $title = get_the_title($post->ID);
    $author_name = get_the_author_meta('display_name', $post->post_author);
    $published_date = get_the_date('F j, Y', $post->ID);
    $author_image = get_avatar($post->post_author); // Change the size as needed
}
?>