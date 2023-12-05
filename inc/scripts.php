<?php
/**
 * Enqueue scripts and styles.
 */
function micropress_scripts() {
    
    // Function to enqueue bootstrap styles
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap-4.0.0/css/bootstrap.min.css', array(), '4.0.0' );

    //bootstrap scripts
    wp_enqueue_script( 'jquery.js', get_template_directory_uri().'/assets/js/jquery-3.2.1.slim.min.js', array(), '3.2.1', true );
    wp_enqueue_script( 'bootstrap.js', get_template_directory_uri().'/assets/bootstrap-4.0.0/js/bootstrap.min.js', array(), '4.0.0', true );
    
    // theme custom stylesheet
    wp_enqueue_style( 'micropress-style', get_template_directory_uri() . '/assets/css/style.css', array() );
    //theme default stylesheet
    wp_enqueue_style( 'micropress-style', get_stylesheet_uri(), array(), _S_VERSION );
    // RTL data
    wp_style_add_data( 'micropress-style', 'rtl', 'replace' );



	wp_enqueue_script( 'micropress-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'micropress_scripts' );
?>