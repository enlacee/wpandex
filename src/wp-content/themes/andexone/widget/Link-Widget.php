<?php
/**
 * Adds Link_Widget widget.
 * @description show links in sidebar
 */
class Link_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'andexone_link_widget', // Base ID
            __( 'AndexOne Links', 'text_domain' ), // Name
            array( 'description' => __( 'AndexOne, Show links videos, web, other resources', 'text_domain' ), ) // Args
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
        global $post;    
        echo $args['before_widget'];
        
        ///////////////////////////////             
        $meta_values = get_post_meta( $post->ID, '_mylink_repeatable');
        
        if (is_array($meta_values) && count($meta_values) > 0) {
            $meta_values = $meta_values[0];            
            $args['before_title'] = str_replace('class="', 'class="wg-title-video ', $args['before_title']);
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
            
            //html
            $li = "";
            $patron = "#\,#"; // ,          
            foreach ($meta_values as $linkString) {

                if (preg_match($patron, $linkString)) {
                    $reg = preg_split($patron, $linkString);
                    $li .= <<<LISTA
                <li><a class="" href="{$reg[1]}" target="_blank" title="{$reg[0]}">{$reg[0]}</a></li>
LISTA;

                }

            }
            echo "<div class='textwidget'> ";
            echo '<div class="wg-boder-black-top"></div>';
            echo "<ul>{$li}</ul>";
            echo '<div class="wg-boder-black-bottom"></div>';
            echo "</div> ";
            //require_once("Link-Widget/front-view.php");            
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