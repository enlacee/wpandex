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
                if ($obj->slug == 'proyectos') {
                    $objCategory = $obj; break;
                }
            }
        } elseif(ICL_LANGUAGE_CODE == 'en') {
            foreach ($dataCategory as $key => $obj) {
                if ($obj->slug == 'projects') {
                    $objCategory = $obj; break;
                }
            }
        } elseif(ICL_LANGUAGE_CODE == 'pt-br') {
            foreach ($dataCategory as $key => $obj) {
                if ($obj->slug == 'projetos') {
                    $objCategory = $obj; break;
                }
            }
        }

    }  

// 02 get data last post
    $dataPost = array();
    if (is_object($objCategory)) {
        $dataPost = get_posts(array('category' => $objCategory->cat_ID, 'post_status'=>'publish', 'numberposts'=> 1));
        $dataPost = (is_array($dataPost) && count($dataPost) > 0) ? $dataPost[0] : false;
    }
?>
<?php if (is_object($dataPost)): ?>
    <div class="col-md-7 col-sm-7 col-xs-6  margin-bottom-5">
        <h3 class="title-index-category text-uppercase color-text-blue"><?php echo $objCategory->name ?></h3>        
            <a href="<?php echo get_permalink($dataPost->ID) ?>" class="text-uppercase color-text-blue"><?php echo limit_string($dataPost->post_title, 40) ?></a>
            <p style="min-height:30px; margin:0"><?php
                $content = $dataPost->post_content;
                $content = wp_filter_nohtml_kses($content);
                echo limit_string($content, 50); ?></p>
        <div class="btn-see-project">            
            <span class="btn-text-see-project color-text-blue text-bold">
                <a href="<?php echo get_permalink($dataPost->ID) ?>" alt="<?php echo $dataPost->post_title; ?>"><?php _e('see projects', 'andexone')?></a>
            </span>
            <img class="" style="margin: 0 0 0 20px" src="<?php echo get_template_directory_uri() ?>/assets/img/btn-see-project.png" />
        </div>
    </div>
    <div class="col-md-5 col-sm-5 col-xs-6">
        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($dataPost->ID) ); ?>
        <a href="<?php echo get_permalink($dataPost->ID) ?>" title="<?php echo $dataPost->post_title; ?>">
            <img  align="right" style="width:131px; height:201px"src="<?php echo $url ?>" alt="<?php echo $dataPost->post_title; ?>">
        </a>
    </div>    

<?php else: //template ?>
    <div class="col-md-7 col-sm-7 col-xs-6  margin-bottom-5">
        <h3 class="text-uppercase color-text-blue">proyecto</h3>
        <h4 class="text-uppercase color-text-blue">Sistema para el control de caída de piedras</h4>
        <p>description...</p>
        <div class="btn-see-project">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="btn-text-see-project color-text-blue text-bold">ver proyectos</span>
            <img class="" style="margin: 0 0 0 20px" src="<?php echo get_template_directory_uri() ?>/assets/img/btn-see-project.png" />
        </div>
    </div>
    <div class="col-md-5 col-sm-5 col-xs-6">
        <img  align="right" src="<?php echo get_template_directory_uri() ?>/assets/img/f_proyecto_uno.jpg" alt="">
    </div>
<?php endif; ?>


