<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Micropress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="profile" href="https://gmpg.org/xfn/11"> -->
    <link rel="icon" href="<?php echo get_template_directory_uri()?>/assets/images/micropress.ico" type="image/x-icon">
    <!-- <link rel="stylesheet" href="/assets/bootstrap-4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css"> -->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e( 'Skip to content', 'micropress' ); ?></a>

        <header class="main-header">
            <div class="main-navigation d-flex align-items-center justify-content-space-between">
                <nav class="navbar navbar-expand-lg navbar-light bg-white container-fluid">
                    <!-- <a class="navbar-brand" href="#"><img src="./assets/images/micropress_logo.png" alt="" srcset=""
                        width="150"></a> -->
                    <div class="website-logo">
                        <?php the_custom_logo( ) ?>
                    </div>
                    <!-- Toggler/collapsibe Button for small screens -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <!-- Navigation Items in the middle -->
                        <!-- this code fetches the menu items and add bootstrap classes to pringt a custom menu -->
                        <ul class="navbar-nav mx-auto">
                        <?php
                  get_template_part('/template-parts/navigation');
                  ?>
                        </ul>



                        <!-- Small and rounded search bar with magnifier icon -->

                        <form class="form-inline my-2 my-lg-0">
                            <div class="input-group">
                                <input type="text" class="search_box form-control rounded-pill mr-sm-2"
                                    placeholder="Search" aria-label="Search">
                                <!-- <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">🔍</span>
                            </div> -->
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </header><!-- #masthead -->