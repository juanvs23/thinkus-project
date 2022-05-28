<?php
   require THINKEMPLOYEE_PLUGIN_DIR . '/includes/post-types.php';
   require THINKEMPLOYEE_PLUGIN_DIR . '/includes/taxonomies.php';

   function wporg_add_custom_box() {
    $screens = [ 'thinkus_employee' ];
    foreach ( $screens as $screen ) {
        add_meta_box(
            'wporg_box_id',                 // Unique ID
            'Custom Meta Box Title',      // Box title
            'wporg_custom_box_html',  // Content callback, must be of type callable
            $screen                            // Post type
        );
    }
}
function wporg_custom_box_html( $post ) {
    ?>
    <label for="wporg_field">Description for this field</label>
    <select name="wporg_field" id="wporg_field" class="postbox">
        <option value="">Select something...</option>
        <option value="something">Something</option>
        <option value="else">Else</option>
    </select>
    <?php
}
add_action( 'add_meta_boxes', 'wporg_add_custom_box' );