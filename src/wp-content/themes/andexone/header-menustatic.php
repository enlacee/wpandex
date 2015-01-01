<?php
/**
 * selector menu static
 */

$class = '';
if (in_category('proyectos') 
    || in_category('projects')
    || in_category('projetos'))
{
    $class_select = "current-menu-item";
}
?>
    <li class="dropdown mega-menu <?php echo $class_select ?>">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php _e('Projects', 'andexone') ?></a>
        <ul class="dropdown-menu">
            <li>
                <div class="row">
                    <div class="col-sm-4 col-md-5">
                        <h4 class="title-mega-menu">
                            <?php _e('DISCOVER', 'andexone') ?> <br /> 
                            <span class="title-mega-menu-tiny-gray"><?php _e('OUR', 'andexone') ?></span>
                            <span class="color-text-blue"><?php _e('INNOVATIVE', 'andexone') ?></span><br /> 
                            <span class="color-text-black"><?php _e('SOLUTIONS', 'andexone') ?></span><br />
                            <span class="title-mega-menu-tiny-gray"><?php _e('IN', 'andexone') ?></span>
                            <span><?php _e('ENGINEERING', 'andexone') ?></span> 
                            <span  class="title-mega-menu-tiny-gray"><?php _e('OF', 'andexone') ?></span><br />
                            <span class="color-text-blue"><?php _e('GEOSYNTHETICS', 'andexone') ?></span>
                        </h4>
                    </div>
                    <div class="col-sm-8 col-md-7">
                        <div class="row">
                            <div class="col-md-11x divider-verical">
                            <div class=""></div>
                                <?php
                                // 01 get fisrt category    
                                    $slug = 'proyectos';
                                    $objCategory = get_category_by_slug( $slug );

                                // 02 get data last post
                                    $dataPost = array();
                                    if (is_object($objCategory)) {
                                        $rDataPost = get_posts(array(
                                            'category' => $objCategory->cat_ID,
                                            'posts_per_page' => 30,
                                            'post_status' => 'publish'
                                        ));
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
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </li>