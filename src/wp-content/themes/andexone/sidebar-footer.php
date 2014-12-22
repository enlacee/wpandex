<?php
/**
 * The Sidebar footer
 *
 * this widget that function is list all las pages  with related to one category: 
 *  categorya, categoryb, etc.
 *
 * @package Enlacee
 * @subpackage Andex_One
 * @since Andex One 1.0
 */

?>

	<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
		<div class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'sidebar-4' ); ?>
		</div><!-- end.widget-area-footer -->
	<?php endif; ?>