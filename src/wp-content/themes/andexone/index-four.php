<?php
/**
 * The template used for displaying
 *
 * @package Enlacee
 * @subpackage Andex_One
 * @since AndexOne 1.0
 */

// 01 get fisrt category
    
    $slug = 'soluciones';
    $objCategory = get_category_by_slug( $slug );
// 02 get data last post
    $dataPost = array();
    if (is_object($objCategory)) {
        $dataPost = get_posts(array('category' => $objCategory->cat_ID, 'numberposts'=> 1));
        $dataPost = (is_array($dataPost) && count($dataPost) > 0) ? $dataPost[0] : false;
    }
?>
<?php if (is_object($dataPost) > 0): ?>
    <div class="col-md-7 col-sm-7 col-xs-6">
        <h3 class="title-index-category-2 text-uppercase color-text-green"><?php echo $objCategory->name ?></h3>
        <a href="<?php echo get_permalink($dataPost->ID) ?>" class="text-uppercase color-text-greene"><?php echo limit_string($dataPost->post_title, 40) ?></a>
        <p style="min-height:30px; margin:0"><?php
            $content = $dataPost->post_content;
            $content = wp_filter_nohtml_kses($content);
            echo limit_string($content, 80); ?></p>
        <div class="btn-see-project">            
            <span class="btn-text-see-project color-text-green text-bold">
                <a href="<?php echo get_permalink($dataPost->ID) ?>" alt="<?php echo $dataPost->post_title; ?>">
                <?php _e('see solutions','andexone') ?></a>
            </span>
            <img class="" style="margin: 0 0 0 20px" src="<?php echo get_template_directory_uri() ?>/assets/img/btn-see-solution.png" />
        </div>
    </div>
    <div class="col-md-5 col-sm-5 col-xs-6">        
        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($dataPost->ID) ); ?>
        <a href="<?php echo get_permalink($dataPost->ID) ?>" title="<?php echo $dataPost->post_title; ?>">
            <img  align="right" style="width:131px; height:201px"src="<?php echo $url ?>" alt="<?php echo $dataPost->post_title; ?>">
        </a>
    </div>
<?php else: ?>
    <div class="col-md-7 col-sm-7 col-xs-6">
        <h3 class="text-uppercase color-text-green">soluciones</h3>
        <h4 class="text-uppercase color-text-green">ciudades verdes</h4>
        <p>description...</p>
        <div class="btn-see-project">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="btn-text-see-project color-text-green text-bold">ver soluciones</span>
            <img class="" style="margin: 0 0 0 20px" src="<?php echo get_template_directory_uri() ?>/assets/img/btn-see-solution.png" />
        </div>
    </div>
    <div class="col-md-5 col-sm-5 col-xs-6">
        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($dataPost->ID) ); ?>
        <a href="<?php echo get_permalink($dataPost->ID) ?>" title="<?php echo $dataPost->post_title; ?>">
            <img  align="right" src="<?php echo $url ?>" alt="<?php echo $dataPost->post_title; ?>">
        </a>
    </div>
<?php endif; ?>    
