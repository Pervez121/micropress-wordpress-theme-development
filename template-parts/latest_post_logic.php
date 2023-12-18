<?php
// Template Name: latest post logic


?>

<?php
// latest_post_logic.php
// if post is selected from customomizer
require_once 'C:\xampp\htdocs\generatepress\wp-content\themes\micropress\Micropress_customizer_template.php';
$selected_post_id = get_theme_mod('micropress_landing_page_post');


// Get the latest post
$latest_post = get_posts(array(
    'numberposts' => 1,
    'orderby'     => 'post_date',
    'order'       => 'DESC',
));


if ($selected_post_id) {
    // Get the selected post
    $selected_post = get_post($selected_post_id);

    // Proceed with your logic using $selected_post
    $thumbnail = get_the_post_thumbnail_url($selected_post->ID);
    $category = get_the_category($selected_post->ID);
    $title = get_the_title($selected_post->ID);
    $author_name = get_the_author_meta('display_name', $selected_post->post_author);
    $published_date = get_the_date('F j, Y', $selected_post->ID);
    $author_image = get_avatar($selected_post->post_author); // Change the size as needed
}
// Check if there's at least one post
else if ($latest_post) {

    $post = $latest_post[0];
    $thumbnail = get_the_post_thumbnail_url($post->ID);
    $category = get_the_category($post->ID);
    $title = get_the_title($post->ID);
    $author_name = get_the_author_meta('display_name', $post->post_author);
    $published_date = get_the_date('F j, Y', $post->ID);
    $author_image = get_avatar($post->post_author); // Change the size as needed
}
else {
    // Handle the case when no post is selected
    echo "No post selected.";
}

?>