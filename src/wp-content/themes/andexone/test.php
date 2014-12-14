<?php
/*
 $ag = array('orderby' => 'id', 'order' => 'ASC', 'style'=> 'none',
     'exclude'=> 1, 'number' => 1, 'echo' => 0, );
echo wp_list_categories( $ag ); 
*/

/*
echo "<hr>";

    $defaults = array(
        'numberposts' => 3, 'offset' => 0,
        'category' => 0, 'orderby' => 'date',
        'order' => 'DESC', 'include' => array(),
        'exclude' => array(), 'meta_key' => '',
        'meta_value' =>'', 'post_type' => 'post',
        'suppress_filters' => true
    );

get_posts( $args );  exit;

*/
?>
<hr>
<?php 
 $ag = array('orderby' => 'id', 'order' => 'ASC', 'style'=> 'none',
     'exclude'=> 1, 'number' => 1, 'echo' => 0, );
var_dump(get_categories($ag));


?>