<?php
/**
 * Adds Other_Pages_Category_Widget widget.
 * @description show list pages with relations at this post (sidebar)
 */
class Other_Pages_By_Category_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'andexone_other_pages_by_category_widget', // Base ID
            __( 'AndexOne Other pages by category', 'text_domain' ), // Name
            array( 'description' => __( 'AndexOne, Show other pages with relation to one category', 'text_domain' ), ) // Args
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
    
        $instance['title'] = __($instance['title'], 'andexone'); // TRANSLATE TITLE
    
        echo $args['before_widget'];
        
        ///////////////////////////////
        $obj_category = get_the_category($post->ID);
        // only get first category
        $obj_category = (is_array($obj_category) && count($obj_category) > 0)
                ?  $obj_category[0] : false;
        


        if (is_object($obj_category)) {
        $dataPost = get_posts(array(
            'category' => $obj_category->cat_ID,
            'exclude' => $post->ID,
            'post_status' => 'publish',
            'posts_per_page' => 30)
        );
        $dataPost = (is_array($dataPost) && count($dataPost) > 0) ? $dataPost : false;
        
// print condicional
            //var_dump($dataPost); exit;
            if ($dataPost) {
                $numPost = count($dataPost);
                $numCol = 3;
                $r = ceil(count($dataPost) / $numCol);

                if ($r == 0) {                 
                    
                } else {
                    $constante = ceil($numPost/$numCol);
                    //$args['before_title'] = str_replace('class="', 'class="wg-footer ', $args['before_title']);
                    echo "<div class='widget-footer'>";
                    echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'].$obj_category->name  ). $args['after_title'];                                   
                    echo "<div class='row'>";
                    for ($i = 0; $i < $numCol; $i++) {
                        $inicio = $i*$constante;
                        $fin = ($i*$constante) + $constante;
                        echo "<div class='col-md-4'>";                        
                        echo "<ul>";
                        for($x = $inicio; $x < $fin; $x++) {
                            if (isset($dataPost[$x])) {
                                $href = get_permalink($dataPost[$x]->ID);
                                $title = $dataPost[$x]->post_title;
                                echo "<li><a href='{$href}'>{$title}</a></li>";                                
                            }
                        }
                        echo "</ul>";
                        echo "</div>";
                    }
                    echo "</div>";
                    echo "</div>";
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