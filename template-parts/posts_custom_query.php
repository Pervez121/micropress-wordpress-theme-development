<?php
/*
Template Name: Post Custom Query
*/
?>



<?php
$args = array(
    'post_type'  => 'guest-post',
    'posts_per_page' => 9,
    // 'post_type'  => 'guest-posts'   // for custom posts 
    'orderby' => 'date',
    'order' => 'DESC',
);

$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) :
        $query->the_post();


?>

<div class="card col-xs-12 col-sm-12 col-md-6 col-lg-4 single-post-box home-posts-grid  my-3 ">
    <a href="<?php the_permalink(); ?>" class="post-thumhnail-box" 
    style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(null, 'medium')); ?>');">
    </a>
    <div class="card-body post-data">
        <?php
                $categories = get_the_category();
                if (!empty($categories)) :
                    ?>
        <div class="latest-post latest-post-category">

            <div class="category-box"><span class="category"
                    id="post-category"><?php echo esc_html($categories[0]->name); ?></span></div>
        </div>
        <?php endif; ?>
        <div class="post-title-box " id="post-title">
            
            <h2 class="title-of-post" id="post-content">
            <a class="post-link"  href="<?php the_permalink() ?>">
                <?php the_title(); ?>
                </a>
            </h2>
            
        </div>
        <div class="data-of-post">
            <span class="post-data author-of-post">
            <!-- K<img src="" alt="" id="post-author-image" class="author-image"> -->
          
            <?php echo get_avatar(get_the_author_meta('ID'), 32); ?>
            
            </span>
                    
            <span class="post-data name-of-author"
                id="post-author-name"> <?php the_author(); ?></span><span class="post-data post-bublised-date"
                id="post-published-date"><?php the_date(); ?></span>
        </div>
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
