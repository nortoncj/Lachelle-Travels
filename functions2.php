

function display_testimonial_meta_box($post) {
    wp_nonce_field(basename(__FILE__), 'testimonial_meta_box_nonce');
    $testimonial_link = get_post_meta($post->ID, 'testimonial_link', true);
    $testimonial_name = get_post_meta($post->ID, 'testimonial_name', true);
    $testimonial_location = get_post_meta($post->ID, 'testimonial_location', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="testimonial_link"><?php _e('Link to Review', 'textdomain'); ?></label></th>
            <td><input type="text" name="testimonial_link" id="testimonial_link" value="<?php echo esc_attr($testimonial_link); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="testimonial_name"><?php _e('Name', 'textdomain'); ?></label></th>
            <td><input type="text" name="testimonial_name" id="testimonial_name" value="<?php echo esc_attr($testimonial_name); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="testimonial_location"><?php _e('Location', 'textdomain'); ?></label></th>
            <td><input type="text" name="testimonial_location" id="testimonial_location" value="<?php echo esc_attr($testimonial_location); ?>" class="regular-text" /></td>
        </tr>
    </table>
    <?php
}

