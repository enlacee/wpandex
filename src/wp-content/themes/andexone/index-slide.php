<?php
/**
 * The template used for displaying main sliders
 *
 * @package Enlacee
 * @subpackage Andex_One
 * @since AndexOne 1.0
 */

 $default = array('orderby' => 'id', 'order' => 'ASC', 'style'=> 'none', 'echo' => 0, );

// 01 get fisrt category
$dataCategory = get_categories($default);    
$objCategory = false;

if (count($dataCategory) > 0) {
    //search category : slides
    if (ICL_LANGUAGE_CODE == 'es') {
        foreach ($dataCategory as $key => $obj) {
            if ($obj->slug == 'slides') {
                $objCategory = $obj; break;
            }
        }
    } elseif(ICL_LANGUAGE_CODE == 'en') {
        foreach ($dataCategory as $key => $obj) {
            if ($obj->slug == 'slides-en') {
                $objCategory = $obj; break;
            }
        }
    } elseif(ICL_LANGUAGE_CODE == 'pt-br') {
        foreach ($dataCategory as $key => $obj) {
            if ($obj->slug == 'slides-pt') {
                $objCategory = $obj; break;
            }
        }
    }

}
    
// 02 get data last post
    $dataPost = array();
    if (is_object($objCategory)) {
        $dataPost = get_posts(array('category' => $objCategory->cat_ID,'post_status'=>'publish', 'numberposts'=> 6));        
    }
    //var_dump($dataPost);
?>
<?php if (count($dataPost) > 0): ?>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <?php foreach ($dataPost as $key => $obj): $classActive = ($key == 0) ? 'active' : ''; ?>
          <?php if ($post->post_status == 'publish'): ?>
            <div class="item <?php echo $classActive ?>">
                <?php echo get_the_post_thumbnail($obj->ID, array(1000, 9999), array('class'=>'img-responsive img-center')); ?>                
                
                <div class="box-slide">                    
                    <?php if (!empty($obj->post_content)): ?>
                    <h3 class="slide-title text-right">
                        <a href="<?php echo get_permalink($obj->ID) ?>" title="<?php $obj->post_title ?>" ><?php echo $obj->post_title ?></a>
                    </h3>                    
                    <?php else: ?>
                    <h3 class="slide-title text-right"><?php echo $obj->post_title ?></h3>
                    <?php endif; ?>

                </div>
            </div> 
            <?php endif; ?>
        <?php endforeach; ?>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!--endslider-->
<?php else: ?>
<p>not found data.</p>
<?php endif; ?>

