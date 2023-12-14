<?php
// Template Name: Micropress customizer template
// Description: this template is for adding options to customizer


?>

<?php


function theme_menu_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    $wp_customize->add_panel('micropress_menu_setting', array(
        'title'  => 'Customize Menu Items',
        'description' => 'This option lets you customize font and color of menu items',
        'priority' => 10,
    ));

    $wp_customize->add_section('customize_micropress_menu_font', array(
        'title'  => 'Menu Font Setting',
        'panel' => 'micropress_menu_setting', // Corrected 'Panel' to 'panel'
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
}
add_action( 'customize_register', 'theme_menu_customize_register' );


?>