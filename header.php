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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'micropress' ); ?></a>

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
                    <!-- <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Latest</a>
                        </li>
                    </ul> -->
						<?php wp_nav_menu( 
							array (
								'theme_location' => 'main-menu',
								'menu_id' => 'primary-menu'
							)
						 ) ?>
						 <ul class="navbar-nav mx-auto">
    <?php
    $menu_items = wp_get_nav_menu_items('main-menu');

    foreach ($menu_items as $menu_item) {
        $class = 'nav-item';
        if ($menu_item->current) {
            $class .= ' active';
        }

        echo '<li class="' . esc_attr($class) . '">';
        echo '<a class="nav-link" href="' . esc_url($menu_item->url) . '">' . esc_html($menu_item->title) . '</a>';
        echo '</li>';
    }
    ?>
</ul>
<ul class="navbar-nav mx-auto">

<!-- $menu_items = wp-get_nav_menu_items('main-menu')
foreach($menu_items as $menu_items){
	$class = 'nav-item';
	if(menu_items->current1){
		$class = 'Active'
	}
	echo '<li class="<?php echo $class ?>"> </li>'
} -->


                    <!-- Small and rounded search bar with magnifier icon -->

                    <form class="form-inline my-2 my-lg-0">
                        <div class="input-group">
                            <input type="text" class="search_box form-control rounded-pill mr-sm-2" placeholder="Search"
                                aria-label="Search">
                            <!-- <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">🔍</span>
                            </div> -->
                        </div>
                    </form>

                    <div class="custom-control custom-switch ml-3" id="theme-switch">
                        <img src="<?php echo get_template_directory_uri( ) ?>./assets/images/Swich.png" alt="" class="theme-switch">
                    </div>
                </div>
            </nav>
        </div>
    </header><!-- #masthead -->
