<hr>
<?php 
 $ag = array('orderby' => 'id', 'order' => 'ASC', 'style'=> 'none',
     'exclude'=> 1, 'number' => 1, 'echo' => 0, );
// get_categories($ag);
?>
<hr>
<?php
/*
//$menu = wp_nav_menu( array( 'echo'=> false, 'container_class' => 'menu-header', 'theme_location' => 'secondary', 'depth' => 2 ) );

$menu = wp_nav_menu( array( 'echo'=> false, 'container_class' => 'menu-header', 'theme_location' => 'primary', 'depth' => 1 ) );
var_dump($menu);
*/
?>

<?php
echo __DIR__;
        //global $wp_query;
        //var_dump($wp_query); 
        //cho $total = $wp_query->max_num_pages;
        /*
echo "<hr>";
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
echo "<HR>A$paged A<hr>";

var_dump(get_post_custom_values());
ECHO "END..<BR>";
*/
