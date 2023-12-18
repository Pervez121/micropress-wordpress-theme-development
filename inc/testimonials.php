<?php

// Register Custom Post Type testimonial

function custom_testimonial_post_type() {
    $args = array(
        'labels' => array(
            'name' => 'Testimonials',
            'singular_name' => 'Testimonial',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array(''),
        'rewrite' => array('slug' => 'testimonials'),
    );
    register_post_type('testimonial', $args);
}
add_action('init', 'custom_testimonial_post_type');

// Add custom fields
function add_testimonial_custom_fields() {
    add_meta_box(
        'testimonial_fields',
        'Testimonial Fields',
        'display_testimonial_fields',
        'testimonial',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_testimonial_custom_fields');

// Display custom fields
function display_testimonial_fields($post) {
    // Retrieve existing values from the database
    $reviewer_image = get_post_meta($post->ID, '_reviewer_image', true);
    $reviewer_name = get_post_meta($post->ID, '_reviewer_name', true);
    $reviewer_subtitle = get_post_meta($post->ID, '_reviewer_subtitle', true);
    $testimonial_content = get_post_meta($post->ID, '_testimonial_content', true);

    // Display fields
    ?>
    <p>
        <label for="reviewer_image">Reviewer Image URL:</label>
        <input type="text" name="reviewer_image" id="reviewer_image" value="<?php echo esc_attr($reviewer_image); ?>" />
    </p>
    <p>
        <label for="reviewer_name">Reviewer Name:</label>
        <input type="text" name="reviewer_name" id="reviewer_name" value="<?php echo esc_attr($reviewer_name); ?>" />
    </p>
    <p>
        <label for="reviewer_subtitle">Reviewer Subtitle:</label>
        <input type="text" name="reviewer_subtitle" id="reviewer_subtitle" value="<?php echo esc_attr($reviewer_subtitle); ?>" />
    </p>
    <p>
        <label for="testimonial_content">Testimonial Content:</label>
        <textarea name="testimonial_content" id="testimonial_content"><?php echo esc_textarea($testimonial_content); ?></textarea>
    </p>
    <?php
}

// Save custom fields
function save_testimonial_custom_fields($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    // Check if the form is submitted
    if (isset($_POST['reviewer_image'])) {
        // Save fields
        update_post_meta($post_id, '_reviewer_image', sanitize_text_field($_POST['reviewer_image']));
        update_post_meta($post_id, '_reviewer_name', sanitize_text_field($_POST['reviewer_name']));
        update_post_meta($post_id, '_reviewer_subtitle', sanitize_text_field($_POST['reviewer_subtitle']));
        update_post_meta($post_id, '_testimonial_content', sanitize_textarea_field($_POST['testimonial_content']));
    }
}
add_action('save_post', 'save_testimonial_custom_fields');

?>