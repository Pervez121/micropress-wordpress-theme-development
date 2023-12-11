<?php
/*
Template Name: Single post Template
*/
?>


<div class="main-container">
    <div class="content-container">

        <div class="latest-post">

            <?php
        
                if (have_posts()):
                while (have_posts()):
                the_post();
                ?>
            <div class="category-box">
                <span class="category single-post-category"><?php the_category(); ?></span>
            </div>
            <div class="post-title-box">
                <h2 class="title-of-post single-post-title"><?php the_title(); ?></h2>
            </div>
            <div class="data-of-post">
                <span class="post-data author-of-post single-post-avatar">
                    <img src="<?php echo esc_url(get_avatar_url($post->post_author, array('size' => 32))); ?>" alt=""
                        class="author-image">
                    <span class="post-data name-of-author single-post-author-name"><?php the_author(); ?></span>
                </span>
                <span class="post-data post-bublised-date single-post-date "><?php the_date(); ?></span>
            </div>
            <div class="post-thumbnail">
                <?php
                the_post_thumbnail();
            ?>
            </div>
            <div class="post-content single-post-content">
                <?php the_content(); ?>
            </div>
            <?php
                endwhile;
                endif;
                ?>
        </div>
        <hr class="devider">
        <div class="share-box container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3 share-box">Share: </div>
                <div class="col-sm-12 col-md-9 col-lg-9 share-box">
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3 social-list"><a class="link-body-emphasis" href="#"><img
                                    src="<?php echo get_template_directory_uri(  )?>/assets/images/facebook.png" alt=""
                                    class="social"></a> Facebook </li>
                        <li class="ms-3 social-list"><a class="link-body-emphasis" href="#"><img
                                    src="<?php echo get_template_directory_uri(  )?>/assets/images/insta.png" alt=""
                                    class="social"></a> Instagram </li>
                        <li class="ms-3 social-list"><a class="link-body-emphasis"
                                href="https://www.linkedin.com/in/pervez-iqbal-pi/"><img
                                    src="<?php echo get_template_directory_uri(  )?>/assets/images/linlkden.png" alt=""
                                    class="social"></a> Linkedin </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>