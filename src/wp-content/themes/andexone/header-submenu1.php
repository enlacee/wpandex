<?php
/**
 * submenu 1 : SOLUCIONES
 *
 * 
 */

// 01 get fisrt category    
    $slug = 'soluciones';
    $objCategory = get_category_by_slug( $slug );

// 02 get data last post
    $dataPost = array();
    if (is_object($objCategory)) {
        $param = array(
            'category' => $objCategory->cat_ID,
            'post_status'=>'publish',
            'posts_per_page'=> 30
        );
        $rDataPost = get_posts($param);
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
        <li><a href="#">I'm sorry, not found items for this category.</a></li>
    </ul>
<?php endif; ?>