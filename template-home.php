<?php
/*
Template Name: Home Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Micropress
 */

get_header();
?>

<main id="primary" class="site-main">

    <section class="landing-screen">
        <div class="featured-post-box">
            <!-- <div class="featured-post-box" style="background-image: url(".{$GLOBALS[th]}.");" > -->

            <?php
// Assuming this code is within a WordPress theme file

// Get the latest post
$latest_post = get_posts(array(
    'numberposts' => 1, // Retrieve only one post
    'orderby'     => 'post_date', // Order by post date
    'order'       => 'DESC', // Order in descending order (latest first)
));

// Check if there's at least one post
if ($latest_post) {
    // Get the first (and only) post
    $post = $latest_post[0];

    // Get post-related data
    $category = get_the_category($post->ID);
    $title = get_the_title($post->ID);
    $author_name = get_the_author_meta('display_name', $post->post_author);
    $published_date = get_the_date('F j, Y', $post->ID);
    $author_image = get_avatar($post->post_author); // Change the size as needed

    // Output the data
    
    
    
   
?>

            <?php ?>
            <div class="landing-post-box">
                <div class="latest-post">
                    <div class="category-box"><span
                            class="category"><?php echo "Category: " . $category[0]->name ; ?>y</span></div>
                </div>
                <div class="post-title-box">
                    <h2 class="title-of-post"><?php echo "Title: " . $title; ?></h2>
                </div>
                <div class="data-of-post">
                    <span class="post-data author-of-post"><img
                            src="<?php echo esc_url(get_avatar_url($post->post_author, array('size' => 32))); ?>" alt=""
                            class="author-image"></span><span
                        class="post-data name-of-author"><?php echo "Author Name: " . $author_name ; ?></span><span
                        class="post-data post-bublised-date"><?php  echo "Published Date: " . $published_date ; ?></span>
                </div>
            </div>
            <?php

} else {
    echo "No posts found.";
}
?>


        </div>

    </section>

    <section class="advertisement-box m-4 pb-4 d-flex align-items-center justify-content-center">
        <div class="advertisement">
            <img src="<?php echo get_template_directory_uri()?>./assets/images/o-ads-space.png" alt=""
                class="advertise">
        </div>
    </section>
    <section class="latest-post-grid ">
        <div class="section-title">
            <h3 class="post-grid-title">Latest Post</h3>
        </div>
        <post class="container ">
            <div class="card-group row ">

                <div class="card col-sm-0 col-md-6 col-lg-4 single-post-box">
                    <img class="card-img-top post-image" src="./assets/images/post-images/post-image (1).png"
                        alt="Card image cap">
                    <div class="card-body">
                        <div class="latest-post">
                            <div class="category-box"><span class="category" id="post-category">Technology</span></div>
                        </div>
                        <div class="post-title-box " id="post title">
                            <h2 class="title-of-post" id="post-content">The Impact of Technology on the Workplace: How
                                Technology is Changing</h2>
                        </div>
                        <div class="data-of-post">
                            <span class="post-data author-of-post"><img src="./assets/images/micropress favicon.png"
                                    alt="" id="post-author-image" class="author-image"></span><span
                                class="post-data name-of-author" id="post-author-name">Jason Francisco</span><span
                                class="post-data post-bublised-date" id="post-published-date">August 20, 2022</span>
                        </div>
                    </div>
                </div>

            </div>
        </post>
    </section>

    <section class="advertisement-box m-4 pb-4 d-flex align-items-center justify-content-center">
        <div class="advertisement">
            <img src="<?php echo get_template_directory_uri()?>./assets/images/o-ads-space.png" alt=""
                class="advertise">
        </div>
    </section>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();