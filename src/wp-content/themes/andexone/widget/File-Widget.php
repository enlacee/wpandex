<?php
/**
 * Adds Image_Widget widget.
 * @description show list attachment files in post and pages (sidebar)
 */
class File_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'andexone_file_widget', // Base ID
            __( 'AndexOne Files', 'text_domain' ), // Name
            array( 'description' => __( 'AndexOne, Show attachment files in post and pages', 'text_domain' ), ) // Args
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
                if ($attachments->type() == 'application') {
                    $flag = true; break;
                }
            }
            $attachments->rewind();

            // print condicional
            if ($flag) {
                if ( ! empty( $instance['title'] ) ) {
                    $args['before_title'] = str_replace('class="', 'class="wg-title-document ', $args['before_title']);
                    echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
                    require_once("File-Widget/front-view.php");    
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