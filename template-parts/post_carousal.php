<?php
$args = array(
    'post_type'  => 'guest-post',
    'orderby' => 'date',
    'posts_per_page' => 10, // Display all posts
);

$query = new WP_Query($args);
$post_counter = 0;
if ($query->have_posts()) :
    while ($query->have_posts()) :
        $query->the_post();
        $post_counter++;
?>
<div class="main-carousel-container" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');">
    <div class="carousel-bg-overlay">
        <a class="carousal-background-overlay" href="<?php the_permalink(); ?>">

            <?php echo 'Total Posts: ' . $post_counter;  ?>
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
            <div class="contributer-info">
                <!-- <img src="<?php // echo get_post_meta(get_the_ID(), 'social_image_url', true); ?>" alt="" srcset=""> -->
                <h3 class="about-contributer"><?php echo get_post_meta(get_the_ID(), 'contributor-name', true); ?></h3>
                <p class="about-contributer"><?php echo get_post_meta(get_the_ID(), 'contributor-bio', true); ?></p>
            </div>
        </a>
    </div>
</div>

<?php
    endwhile;
endif;

echo 'Total Posts: ' . $post_counter; // Output total number of posts
wp_reset_postdata();
?>
