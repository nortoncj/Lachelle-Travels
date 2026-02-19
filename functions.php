<?php
    function mytheme_post_thumbnails() {
        add_theme_support( 'post-thumbnails');
        add_post_type_support( 'page','excerpt', 'post-thumbnails');
    }
    add_action('after_setup_theme', 'mytheme_post_thumbnails');

    function myportfolio_widgets_init() {
        // RIGHT SIDEBAR
        register_sidebar( array(
            'name'          =>__('right-sidebar', 'myportfolio'),
            'id'            => 'sidebar-1',
            'before_widget' => '<div id="%1$s" class="widget-box %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => 'h3 class="widget-title">',
            'after_title'   => '</h3>',
        ));

        // LEFT SIDEBAR
        register_sidebar( array(
            'name'          =>__('left-sidebar', 'myportfolio'),
            'id'            => 'left-sidebar-1',
            'before_widget' => '<div id="%1$s" class="widget-box %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => 'h3 class="widget-title">',
            'after_title'   => '</h3>',
        ));
    }

    function create_posttype() {
        register_post_type('testimonials',
            // CPT Options
            array(
                'labels' => array(
                    'name' => __('Testimonials'),
                    'singular_name' => __('Testimonial')
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'testimonials'),
                'show_in_rest' => true,
                'supports' => array('title', 'editor', 'thumbnail'),
                'taxonomies' => array('category', 'post_tag'),
            )
        );
    
        add_action('add_meta_boxes', 'add_testimonial_meta_box');
        add_action('save_post', 'save_testimonial_meta', 10, 2);
    }
    
    function add_testimonial_meta_box() {
        add_meta_box(
            'testimonial_meta_box',
            __('Testimonial Details', 'textdomain'),
            'display_testimonial_meta_box',
            'testimonials',
            'normal',
            'high'
        );
    }
    
    function display_testimonial_meta_box($post) {
        wp_nonce_field(basename(__FILE__), 'testimonial_meta_box_nonce');
        $testimonial_link = get_post_meta($post->ID, 'testimonial_link', true);
        ?>
        <table class="form-table">
            <tr>
                <th><label for="testimonial_link"><?php _e('Link to Review', 'textdomain'); ?></label></th>
                <td><input type="text" name="testimonial_link" id="testimonial_link" value="<?php echo esc_attr($testimonial_link); ?>" class="regular-text" /></td>
            </tr>
        </table>
        <?php
    }

    function save_testimonial_meta($post_id, $post) {
        if (!isset($_POST['testimonial_meta_box_nonce']) || !wp_verify_nonce($_POST['testimonial_meta_box_nonce'], basename(__FILE__))) {
            return $post_id;
        }
    
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return $post_id;
        }
    
        if ('page' == $_POST['post_type']) {
            if (!current_user_can('edit_page', $post_id)) {
                return $post_id;
            }
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
        }
    
        $testimonial_link = sanitize_text_field($_POST['testimonial_link']);
        update_post_meta($post_id, 'testimonial_link', $testimonial_link);
    }

    add_action('widgets_init','myportfolio_widgets_init', 'create_posttype','add_testimonial_meta_box', 'display_testimonial_meta_box_nonce','save_testimonial_meta');
?>