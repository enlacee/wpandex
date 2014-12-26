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
?>


<?php
  // Get the nav menu based on $menu_name (same as 'theme_location' or 'menu' arg to wp_nav_menu)
    // This code based on wp_nav_menu's code to get Menu ID from menu slug

/*
	$locations = get_nav_menu_locations();
	var_dump($locations);

	//var_dump(wp_get_nav_menu_items(8));

    $menu_name = 'main';
    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
	$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
	echo "___". $locations[ $menu_name ];

	$menu_items = wp_get_nav_menu_items($menu->term_id);
var_dump($menu_items);
	$menu_list = '<ul id="menu-' . $menu_name . '">';

	foreach ( (array) $menu_items as $key => $menu_item ) {
	    $title = $menu_item->title;
	    $url = $menu_item->url;
	    $menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
	}
	$menu_list .= '</ul>';
    } else {
	$menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
    }
    // $menu_list now ready to output
    echo $menu_list;
*/
?>

<?php


$element_id = $post->ID;
ECHO ICL_LANGUAGE_CODE;
VAR_DUMP(get_post(icl_object_id($element_id, 'post', false,ICL_LANGUAGE_CODE)));
VAR_DUMP(get_post_meta(icl_object_id($element_id,'post',false,ICL_LANGUAGE_CODE), '_sample_key', true));
echo "<hr>";
var_dump(wpml_get_language_information($element_id));
echo "<hr>";
global $sitepress;
var_dump($sitepress->get_current_language());
//var_dump(get_class_methods($sitepress));

$language_details = $sitepress->get_language_details(ICL_LANGUAGE_CODE);
var_dump($language_details);
echo "<hr>";
var_dump(ICL_LANGUAGE_CODE);
