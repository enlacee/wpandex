<?php
/**
 * The template used for displaying
 *
 * @package Enlacee
 * @subpackage Andex_One
 * @since AndexOne 1.0
 */

// 01 get fisrt category
    $default = array('orderby' => 'id', 'order' => 'ASC', 'style'=> 'none',
     'exclude'=> false, 'number' => false, 'echo' => 0, );

    $dataCategory = get_categories($default);    
    $objCategory = false;
    
    
    if (count($dataCategory) > 0) {
        //search category : slides
        if (ICL_LANGUAGE_CODE == 'es') {
            foreach ($dataCategory as $key => $obj) {
                if ($obj->slug == 'ejecucion-de-obras') {
                    $objCategory = $obj; break;
                }
            }
        } elseif(ICL_LANGUAGE_CODE == 'en') {
            foreach ($dataCategory as $key => $obj) {
                if ($obj->slug == 'ejecucion-de-obras-en') {
                    $objCategory = $obj; break;
                }
            }
        } elseif(ICL_LANGUAGE_CODE == 'pt-br') {
            foreach ($dataCategory as $key => $obj) {
                if ($obj->slug == 'ejecucion-de-obras-pt') {
                    $objCategory = $obj; break;
                }
            }
        }

    }      
    $imgLang = (ICL_LANGUAGE_CODE == 'es') ? '' : ICL_LANGUAGE_CODE;
// 02 get data last post
    $dataPost = array();
    if (is_object($objCategory)) {
        $dataPost = get_posts(array('category' => $objCategory->cat_ID, 'post_status'=>'publish', 'numberposts'=> 1));
        $dataPost = (is_array($dataPost) && count($dataPost) > 0) ? $dataPost[0] : false;
    }
?>
<?php if (is_object($dataPost) > 0): ?>
    <h4 class="text-bold">&nbsp;</h4>
    <div class="row news-f2">
        <?php if (has_post_thumbnail($dataPost->ID)): ?>
            <a href="<?php echo get_permalink($dataPost->ID) ?>" title="<?php echo limit_words($dataPost->post_title) ?>">
                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($dataPost->ID) ); ?>
                <img align="right" class="img-responsive  img-center" src="<?php echo $url ?>" alt="" 
                style="max-width:303px"/>
            </a>
        <?php else: ?>
            <a href="#">
            <img align="right" class="img-responsive  img-center" src="<?php echo get_template_directory_uri() ?>/assets/img/banner_ejecucion_obras<?php echo $imgLang ?>.jpg" alt="" />
            </a>
        <?php endif; ?>
        <a href="<?php echo get_permalink($dataPost->ID) ?>" class="btn-main-gray"><?php _e('more information', 'andexone') ?></a>
    </div>
<?php else: ?>
    <h4 class="text-bold">&nbsp;</h4>
    <div class="row news-f2">
        <a href="#">
        <img align="right" class="img-responsive  img-center" src="<?php echo get_template_directory_uri() ?>/assets/img/banner_ejecucion_obras.jpg" alt="" />
        </a>
        <a href="#" class="btn-main-gray">más información</a>
    </div>
<?php endif; ?>
