<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package Enlacee
 * @subpackage Anedex_One
 * @since Andex One 1.0
 */
?>
<?php
// logic selection of sidebar
$sidebar_select = '';
if (in_category('productos') || in_category('soluciones')) {
    
    $sidebar_select = 'sidebar-2';
    
} elseif (in_category('sectores')) {
    
    $sidebar_select = 'sidebar-3';
 
} else {
    
    $sidebar_select = 'sidebar-1';
    
}

?>

	<?php if ( is_active_sidebar( $sidebar_select ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
                    <?php dynamic_sidebar( $sidebar_select ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>