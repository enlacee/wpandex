<?php
/**
 * 
 * list of post by category only : productos and soluciones
 * 
 * 
 */

/**
 * Get category slug only fisrt category assig.
 * 
 * @param int $idPost id post
 * @return mix (int or string)
 */
function getFisrtCategory($idPost) {
    $return = false;
    $categories = get_the_category($idPost);
    $categories = (is_array($categories) && count($categories) > 0 ) ? $categories[0] : false;
    
    if (is_object($categories)) {
        $return = $categories->slug;
    } else {
        $return = $categories;
    }
    
    return $return;
}

global $post;
$original_post = $post;
$related = cptr_populate($post->ID);
$li_productos = array();
$li_soluciones = array();
foreach ( $related as $post ) {
    $href = get_permalink($dataPost->ID);
    $title = $post->post_title;
    
    if (getFisrtCategory($post->ID) == 'productos') {
        $li_productos[] = <<<LI
            <li><a href="{$href}" title="{$title}">{$title}</a></li>
LI;
        
    } elseif(getFisrtCategory($post->ID) == 'soluciones') {
        
        $li_soluciones[] = <<<LI
            <li><a href="{$href}" title="{$title}">{$title}</a></li>
LI;
        
    }
}


$item_li_productos = implode(" ", $li_productos);
$item_li_soluciones = implode(" ", $li_soluciones);


/*
var_dump($item_li_productos);
var_dump($item_li_soluciones);
*/
?>

<div class="boder-dotted-black"></div>
<div class="sector-footer">
<?php if (!empty($item_li_productos)): ?>
    <h3><?php _e('Productos') ?></h3>
    <ul>
        <?php echo $item_li_productos ?>
    </ul>
<?php endif; ?>

<?php if (!empty($item_li_soluciones)): ?>
<h3><?php _e('Soluciones') ?></h3>
<ul>
    <?php echo $item_li_soluciones ?>
</ul>
<?php endif; ?>
</div>

<?php  wp_reset_postdata();?>
