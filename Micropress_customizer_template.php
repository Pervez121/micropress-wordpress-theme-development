<?php
// Template Name: Micropress customizer template
// Description: this template is for adding options to customizer
require_once ABSPATH . 'wp-admin/includes/template.php';
require_once ABSPATH . 'wp-admin/includes/theme.php';

?>

<?php


function theme_menu_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    $wp_customize->add_panel('micropress_theme_options', array(
        'title'  => 'Customize Theme options',
        'description' => 'This option lets you customize font and color of menu items',
        'priority' => 10,
    ));

    $wp_customize->add_section('customize_micropress_menu_font', array(
        'title'  => 'Menu Font Setting',
        'panel' => 'micropress_theme_options', // 'panel'
    ));

    // $wp_customize->add_setting('micropress_menu_font_family', array(
    //     'type'              => 'theme_mod',
    //     'capability'        => 'edit_theme_options',
    //     'default'           => array(
    //         'family' => 'sans-serif',
    //         'size'   => '16px',
    //         'weight' => 'normal',
    //         'color'  => 'black',
    //     ),
    //     'transport'         => 'refresh', // or postMessage
    //     'sanitize_callback' => 'sanitize_text_field',
    // ));
    // Add settingfor each property in their respective sections
    $wp_customize->add_setting('micropress_menu_font_family', array(
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'default'           => 'sans-serif',
        'transport'         => 'refresh', // or postMessage
        'sanitize_callback' => 'esc_attr',
    ));
    
    $wp_customize->add_setting('micropress_menu_font_size', array(
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'default'           => '16px',
        'transport'         => 'refresh', // or postMessage
        'sanitize_callback' => 'esc_attr',
    ));
    
    $wp_customize->add_setting('micropress_menu_font_weight', array(
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'default'           => '400px',
        'transport'         => 'refresh', // or postMessage
        'sanitize_callback' => 'esc_attr', // Ensure it's a positive integer
    ));
    
    $wp_customize->add_setting('micropress_menu_font_color', array(
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'default'           => '#000000',
        'transport'         => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_hex_color', // Ensure it's a valid hex color code
    ));

    // Add controls for 'family', 'size', 'weight', 'color'
    $wp_customize->add_control('micropress_menu_font_family', array(
        'label'    => __('Font Family'),
        'section'  => 'customize_micropress_menu_font',
        //'settings' => 'micropress_menu_font_family',
        'type'     => 'text',
    ));

    $wp_customize->add_control('micropress_menu_font_size', array(
        'label'    => __('Font Size'),
        'section'  => 'customize_micropress_menu_font',
        //'settings' => 'micropress_menu_font_size',
        'type'     => 'text',
    ));

    $wp_customize->add_control('micropress_menu_font_weight', array(
        'label'    => __('Font Weight'),
        'section'  => 'customize_micropress_menu_font',
        //'settings' => 'micropress_menu_font_weight',
        'type'     => 'text',
    ));

    $wp_customize->add_control('micropress_menu_font_color', array(
        'label'    => __('Font Color'),
        'section'  => 'customize_micropress_menu_font',
        //'settings' => 'micropress_menu_font_color',
        'type'     => 'color',
    ));

    // theme option for landing page post

    $wp_customize->add_section('landing_page_post', array(
        'title'  => 'Select landing page post',
        'panel' => 'micropress_theme_options', // 'panel'
    ));

    $wp_customize->add_setting('micropress_landing_page_post', array(
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'transport'         => 'refresh', // or 'postMessage' for live preview
        'sanitize_callback' => 'esc_attr',
    ));
        // Custom function to retrieve all posts
   function micropress_get_all_posts() {
    $posts = get_posts(array(
        'post_type'      => 'post', // Change to your custom post type if needed
        'posts_per_page' => -1,     // Retrieve all posts
    ));

    $post_choices = array();
    foreach ($posts as $post) {
        $post_choices[$post->ID] = $post->post_title;
    }

    return $post_choices;
    
}

    $wp_customize->add_control('micropress_landing_page_post', array(
        'label'    => __('Landing page post'),
        'section'  => 'landing_page_post',
        //'settings' => 'micropress_menu_font_color',
        'type'     => 'select',
        'choices'  => micropress_get_all_posts(), // Custom function to get all posts
        'settings' => 'micropress_landing_page_post', // Set the setting for the selected post
    ));
    
}
add_action( 'customize_register', 'theme_menu_customize_register' );


?>