<?php

// Template Name: carousal

?>
<div class="owl-carousel">

    <?php
$args = array(
    'post_type'  => 'guest-post',
    'orderby' => 'date',
    'posts_per_page' => -1, // Display all posts
);

$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) :
        $query->the_post();

?>

    <div class="main-carousel-container" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');">
        <div class="carousel-bg-overlay">
            <a class="carousal-background-overlay" href="<?php the_permalink(); ?>">



                <div class="post-title-box " id="post-title">

                    <h2 class="title-of-post" id="post-content">
                        <a class="post-link carousal-post-title" href="<?php the_permalink() ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                </div>
                <div class="carousel-post-content">

                    <?php $content = get_the_content(); echo wp_trim_words( get_the_content(), 20, '...' );?>

                </div>
                <a class="carousel-read-more-btn" href="<?php the_permalink() ?>">
                    Read More
                </a>
            </a>
        </div>
    </div>



    <?php
endwhile;

?>

    <?php
else :
    echo 'No posts found';
endif;

wp_reset_postdata();
?>
</div>