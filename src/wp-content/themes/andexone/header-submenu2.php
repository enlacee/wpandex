<?php
/**
 * submenu 1 : PRODUCTOS
 *
 * 
 */

// 01 get fisrt category    
    $slug = 'productos';
    $objCategory = get_category_by_slug( $slug );

// 02 get data last post
    $dataPost = array();
    if (is_object($objCategory)) {
        $rDataPost = get_posts(array('category' => $objCategory->cat_ID));
    }
?>
<?php if (is_array($rDataPost) && count($rDataPost) > 0): ?>
<ul class="menu">
    <?php foreach ($rDataPost as $dataPost ): ?>
        <li>
            <a href="<?php echo get_permalink($dataPost->ID) ?>">
            <?php echo $dataPost->post_title ?>
            </a>
        </li>        
    <?php endforeach; ?>
</ul>
<?php else: ?>
    <ul class="menu">
        <li><a href="#">I'm sorry, not found item for this category.</a></li>
    </ul>
<?php endif; ?>