<!-- 
Template Name: Blog Template

 -->
<?php get_header( ); ?>

<section class="latest-post-grid ">
    <div class="section-title">
        <h3 class="post-grid-title">Latest Post</h3>
    </div>
    <div class="container ">
        <div class="card-group row ">
            <?php
            $args = array(
               	'post_type' => 'post', 
                   'posts_per_page' => 9,
            );
           $all_posts = new WP_Query( $args );
            if($all_posts -> have_posts(  )):
             
                while($all_posts -> have_posts(  )):
                    $all_posts -> the_post(  );                      
                    $author_id = get_the_author_ID(  );
                    $published_date = get_post_datetime()
                    // $author_
                    
                

    ?>


            <!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ -->
                    
            <div class="card col-xs-12 col-sm-12 col-md-6 col-lg-6  single-post-box home-posts-grid  my-3 ">
            <a href="<?php echo get_the_permalink(); ?>">
                    <img class="card-img-top post-image" src="<?php echo the_post_thumbnail_url();    ?>"
                        alt="Card image cap">
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
                id="post-author-name"><?php   the_author( ); ?></span><span class="post-data post-bublised-date"
                id="post-published-date"><?php echo $published_date->format( 'Y-m-d' );  ?></span>
        </div>
    </div>
</div>

            <!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ -->


            <?php

            
                endwhile;
                // micropress_pagination();

            endif;

            // echo "No posts currently";
    ?>
        </div>
    </div>
</section>

<?php get_footer( ); ?>