<?php
/*
Template Name: Home Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Micropress
 */

get_header();
include get_template_directory() . '/template-parts/latest_post_logic.php';   // gets the latest post
//include get_template_directory() . '/posts-custom-query.php';   // gets the latest post

?>

<main id="primary" class="site-main">

    <section class="landing-screen">
        <div class="featured-post-box" style="background-image: url('<?php echo $thumbnail?>')">
            <!-- <div class="featured-post-box" style="background-image: url(".{$GLOBALS[th]}.");" > -->

            <?php 
        // Check if there's at least one post
            if (isset($latest_post) && $latest_post) {          ?>

            <div class="landing-post-box">
                <div class="latest-post">
                    <div class="category-box"><span class="category"><?php echo $category[0]->name ; ?></span></div>
                </div>
                <div class="post-title-box">
                    <h2 class="title-of-post">
                        <a href="<?php the_permalink() ?>" class="post-link heading-post-link">
                            <?php echo $title; ?>
                        </a>
                    </h2>
                </div>
                <div class="data-of-post">
                    <span class="post-data author-of-post"><img
                            src="<?php echo esc_url(get_avatar_url($post->post_author, array('size' => 32))); ?>" alt=""
                            class="author-image"><?php echo get_avatar(get_the_author_meta('ID'), 32); ?></span><span
                        class="post-data name-of-author"><?php echo$author_name ; ?></span><span
                        class="post-data post-bublised-date"><?php  echo $published_date ; ?></span>
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

    <!-- <section class="pt-5 circle-1">

        <div class="ourworks-box container pb-5 pt-5">
            <h1 class="our-works-head">Our Clients say</h1>
            <p>Check out what clients say about my services. Happy clients all over the world. Share your experience
                with me by submitting your reviews</p>
        </div>
      // carousal template
        <?php 
            //    get_template_part('/template-parts/slider-template')
                ?>
        </div>

    </section> -->

    <section class="latest-post-grid ">
        <div class="section-title">
            <h3 class="post-grid-title">Latest Post</h3>
        </div>
        <post class="container ">
            <div class="card-group row ">
                <?php  
                get_template_part('/template-parts/posts_custom_query');
                ?>

            </div>
        </post>
    </section>
    <section class="container guest-post-carousal">
        <div class="section-title">
            <h3 class="post-grid-title">Guest Post</h3>
        </div>
        <div class="carousal_box">
   <div>
   <?php

get_template_part('/template-parts/post_carousal');

?>
   </div>

        </div>

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