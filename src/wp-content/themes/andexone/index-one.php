<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Enlacee
 * @subpackage Andex_One
 * @since AndexOne 1.0
 */

 $default = array('orderby' => 'id', 'order' => 'ASC', 'style'=> 'none',
     'exclude'=> false, 'number' => false, 'echo' => 0, );
 
// 01 get fisrt category
    $dataCategory = get_categories($default);    
    $objCategory = false;

    if (count($dataCategory) > 0) {
        //search category : slides
        if (ICL_LANGUAGE_CODE == 'es') {
            foreach ($dataCategory as $key => $obj) {
                if ($obj->slug == 'noticias') {
                    $objCategory = $obj; break;
                }
            }
        } elseif(ICL_LANGUAGE_CODE == 'en') {
            foreach ($dataCategory as $key => $obj) {
                if ($obj->slug == 'news') {
                    $objCategory = $obj; break;
                }
            }
        } elseif(ICL_LANGUAGE_CODE == 'pt-br') {
            foreach ($dataCategory as $key => $obj) {
                if ($obj->slug == 'noticias-pt') {
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
<?php if (is_object($dataPost)): ?>
        <h4 class="text-bold"><img src="/web/wp-content/themes/andexone/assets/img/t.gif" width="1" height="5" border="1"></h4>
        <div class="row news-f1">
            <div class="col-md-6 col-sm-6">
                <img src="/web/wp-content/themes/andexone/assets/img/tit_noti<?php echo $imgLang ?>.jpg"><?php if (has_post_thumbnail($dataPost->ID)): ?>
                <a href="<?php echo get_permalink($dataPost->ID) ?>" title="<?php echo limit_words($dataPost->post_title) ?>">
                    <?php echo get_the_post_thumbnail($dataPost->ID, array(164, 132)); ?>
                </a>
                <?php else: ?>
                    <img class="img-responsive"  src="<?php echo get_template_directory_uri() ?>/assets/img/f_noticia_uno.jpg">
                <?php endif; ?>
            </div>
            <div class="col-md-5 col-sm-6 hidden-xs text-uppercase text-left">
                <a href="<?php echo get_permalink($dataPost->ID) ?>"><?php echo limit_words($dataPost->post_title, 85) ?></a>
            </div>
            <a class="btn-main-gray" href="<?php echo get_permalink($dataPost->ID) ?>"><?php _e('see news', 'andexone')?></a>                            
        </div>
<?php else: ?>
        <h4 class="text-bold">NOTICIAS .config</h4>
        <div class="row news-f1">
            <div class="col-md-7 col-sm-6">
                <img class="img-responsive"  src="<?php echo get_template_directory_uri() ?>/assets/img/f_noticia_uno.jpg">
            </div>
            <div class="col-md-5 col-sm-6 hidden-xs text-uppercase text-left">
                CURSO PRE-CONGRESO "SISTEMA DE CONFIANZA DE CONFINAMIENTO PARA CONTROL DE LA EROSÍON" - VII CICES                        
            </div>
            <a class="btn-main-gray">ver noticia</a> 
        </div>
<?php endif; ?>
