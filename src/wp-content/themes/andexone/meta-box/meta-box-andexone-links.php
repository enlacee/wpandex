<?php

/**
 * Adds a box to the main column, admin links
 */
function mylink_add_meta_box() {

    $screens = array( 'post', 'page' );

    foreach ( $screens as $screen ) {

        add_meta_box(
            'mylink_sectionid',
            __( 'Attachments Links andexOne', 'mylink_textdomain' ),
            'mylink_meta_box_callback',
            $screen
        );
    }
}
add_action( 'add_meta_boxes', 'mylink_add_meta_box' );

/**
 * Prints the box content.
 * 
 * @param WP_Post $post The object for the current post/page.
 */
// field custom nettus
$prefix = '_mylink_';
$custom_meta_fields = array(
    array(
        'label' => 'List of links (videos)',
        'desc'  => 'A description for the field. example: title,https://www.youtube.com/watch?v=V9xAMlQP9tE',
        'id'    => $prefix.'repeatable',
        'type'  => 'repeatable')
);

function mylink_meta_box_callback($post) {
    global $custom_meta_fields;

    if(is_admin()) {
        wp_enqueue_script('custom-js', get_template_directory_uri().'/assets/js/admin/script-custom.js');        
    }

    // Use nonce for verification
    echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
    // Begin the field table and loop
    echo '<table class="form-table">';
    foreach ($custom_meta_fields as $field) {
        // get value of this field if it exists for this post
        $meta = get_post_meta($post->ID, $field['id'], true);
        
        // begin a table row with
        echo '<tr>
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
                <td>';        
        switch($field['type']) {
            case 'repeatable':                
                echo '<a class="repeatable-add button" href="#">+</a>
                        <ul id="'.$field['id'].'-repeatable" class="custom_repeatable">';
                $i = 0;
                if ($meta) {
                    foreach($meta as $row) {
                        echo '<li><span class="sort hndle">|||</span>
                                    <input type="text" name="'.$field['id'].'['.$i.']" id="'.$field['id'].'" value="'.$row.'" size="30" />
                                    <a class="repeatable-remove button" href="#">-</a></li>';
                        $i++;
                    }
                } else {
                    echo '<li><span class="sort hndle">|||</span>
                                <input type="text" name="'.$field['id'].'['.$i.']" id="'.$field['id'].'" value="" size="60" placeholder="title, https://www.youtube.com/watch?v=V9xAMlQP9tE"/>
                                <a class="repeatable-remove button" href="#">-</a></li>';
                }
                echo '</ul>
                    <span class="description">'.$field['desc'].'</span>';
                        break;
        } //end switch
        echo '</td></tr>';
    }
    echo '</table>'; // end table


}

///
// Save the Data
function save_custom_meta($post_id) {
    global $custom_meta_fields;
     
    // verify nonce
    if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__))) 
        return $post_id;
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;
    // check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
    }
     
    // loop through fields and save the data
    foreach ($custom_meta_fields as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach
}
add_action('save_post', 'save_custom_meta');

