<?php
/**
 * Template Name: Page Index News
 *
 * Description: A page template that provides news listing and pagination
 *
 * @package Enlacee
 * @subpackage Andex_Onde
 * @since Andex Onde 1.0
 */

get_header(); ?>    
    <div class="wrapper-container">
        <div class="page container container-me-pagexx color-bg-white ">
            <div class="subtitle subtitle-bg-2">
                <h2><?php _e('Noticias') ?></h2>
            </div>

            <div class="row margin-bottom-60">
                <div class="col-md-12">
<?php 
    $category_id =get_cat_ID('noticias');

    $mypage = (get_query_var('paged')) ? get_query_var('paged') : 0;

    /***/
    $limit = 3;
    $count = count(get_posts(array('category' => $category_id)));

    if ($count > 0) {
        $total_pages = ceil($count/$limit);
    } else {
       $total_pages = 1; 
    }
    if ($mypage > $total_pages) { $mypage = $total_pages; }// $mypage = 0
    if ($mypage < 1) { $mypage = 1; }

    $start = $limit * $mypage - $limit;

    $dataPost = get_posts(array('category' => $category_id,'offset' => $start,'numberposts'=> $limit));
?>
<?php if (is_array($dataPost) && count($dataPost) > 0): ?>
    <?php foreach ($dataPost as $key => $post): ?>
        <?php setup_postdata($post); ?>
            <div class="row margin-bottom-40">                
                <div class="col-md-2 col-sm-2">
                    <?php if (has_post_thumbnail()): ?>
                    <a class="" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                        <?php echo get_the_post_thumbnail($post->ID, array(100,100)); ?>
                    </a>
                    <?php else: ?>
                        <img style="widht:100px; height:100px" src="<?php echo get_template_directory_uri() ?>/assets/img/thumbnail-news.png" 
                        alt="<?php the_title(); ?>" class="img-thumbnail">                        
                    <?php endif; ?>            
                </div>


                <div class="col-md-9 col-sm-9">
                        <div class="title-news-date"><?php echo get_the_date( 'l d F Y' ); ?></div>     
                        <div>
                            <a class="link-search text-capitalize" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                            <p class="text-capitalize" ><?php
                            $content = get_the_content();
                            $content = wp_filter_nohtml_kses($content);
                            echo limit_words($content, 18,'...'); ?>
                            <a class="see-detail" href="<?php the_permalink() ?>">ver  detalle</a>
                            <p>                     
                        </div> 
                </div>
            </div>
        <?php wp_reset_postdata(); ?>        
    <?php endforeach;?>
<?php else: ?>
    <h3><?php _e('No se encontraron resultados en este momento.') ?></h3>
<?php endif; ?>

<div style="min-height:180px"></div>






<!-- pagination-->
<div class="boder-dotted-blue-bottom clearfix"></div>
<div class="row">
    <div class="col-md-6 text-left">    
        <?php if ($mypage > 1): $mypage_text = $mypage - 1; ?>
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/ico-previous.jpg">
            <a href="<?php echo get_permalink() . "/page/{$mypage_text}" ?>"><?php _e('Anterior') ?></a>
        <?php endif; ?>
    </div>

    <div class="col-md-6 text-right">
        <?php if ($total_pages == $mypage): ?>
        <?php elseif ($mypage == 1): ?>            
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/ico-next.jpg">
            <a href="<?php echo get_permalink() . "/page/2" ?>"><?php _e('Siguiente') ?></a>
        <?php elseif ($mypage < $limit): $mypage_text = $mypaged + 1; ?>
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/ico-next.jpg">
            <a href="<?php echo get_permalink() . "/page/$mypaged" ?>"><?php _e('Siguiente') ?></a>
        <?php endif; ?>
    </div>

</div>





            
                </div>
            </div>

        </div>
    </div>
<?php get_footer(); ?>    