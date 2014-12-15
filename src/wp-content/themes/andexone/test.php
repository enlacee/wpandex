<hr>
<?php 
 $ag = array('orderby' => 'id', 'order' => 'ASC', 'style'=> 'none',
     'exclude'=> 1, 'number' => 1, 'echo' => 0, );
// get_categories($ag);
?>
<hr>
<?php

//$menu = wp_nav_menu( array( 'echo'=> false, 'container_class' => 'menu-header', 'theme_location' => 'secondary', 'depth' => 2 ) );

$menu = wp_nav_menu( array( 'echo'=> false, 'container_class' => 'menu-header', 'theme_location' => 'primary', 'depth' => 1 ) );
var_dump($menu);
?>


<div id="menu_yd">
  <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary', 'depth' => 1 ) ); ?>
</div>
<hr>
<div id="bottom-nav-menu" class="bottom-menu">
  <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'secondary', 'depth' => 1 ) ); ?>
</div>
<hr>
<div id="partner-links" class="bottom-menu">
  <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'tertiary', 'depth' => 1 ) ); ?>
</div>