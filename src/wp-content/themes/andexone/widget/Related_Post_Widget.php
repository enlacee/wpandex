<?php
/**
 * Adds Related_Post_Widget widget.
 * @description show list of link if this post have relation with other post.
 */
class Related_Post_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'andexone_related_post_widget', // Base ID
            __( 'AndexOne Relations Post', 'text_domain' ), // Name
            array( 'description' => __( 'AndexOne, Custom Post Types Relationships (CPTR)', 'text_domain' ), ) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
    
        echo $args['before_widget'];

        // plugin enabled                
        if (cptr(false) == null) {
            // echo "<h4>". __( 'Were not found related post', 'text_domain' ) ."</h4>";
        } else {
            if ( ! empty( $instance['title'] ) ) {
                    echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
            }                    

            echo "<div class='related-posts margin-bottom-0'>";  
            cptr();
            echo "</div>";
        };
 
        echo $args['after_widget'];
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'New title', 'text_domain' );
        ?>
        <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            *<strong>Important!</strong> for enabled this widget, your must install 
            <a target="_blank" href="https://wordpress.org/plugins/custom-post-types-relationships-cptr/">CPTR</a>
        </p>
        <?php 
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

        return $instance;
    }

} // class Related_Post_Widget