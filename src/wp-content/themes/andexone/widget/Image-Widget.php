<?php
/**
 * Adds Image_Widget widget.
 * @description show gallery images in sidebar
 */
class Image_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'andexone_image_widget', // Base ID
            __( 'AndexOne Images', 'text_domain' ), // Name
            array( 'description' => __( 'AndexOne, Show attachment images in post and pages', 'text_domain' ), ) // Args
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
        ///////////////////////////////
        $attachments = new Attachments( 'attachments' );              
        $flag = false;
        if ($attachments->total() > 0) {
            while($attachments->get()) {
                if ($attachments->type() == 'image') {
                    $flag = true; break;
                }
            }

            // print condicional
            if ($flag) {
                if ( ! empty( $instance['title'] ) ) {
                    $args['before_title'] = str_replace('class="', 'class="wg-title-gallery ', $args['before_title']);
                    echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
                    require_once("Image-Widget/front-view.php");    
                }
            }
        }
        ///////////////////////////////
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
            <a target="_blank" href="https://wordpress.org/plugins/attachments/">attachments</a>
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

} // class Foo_Widget