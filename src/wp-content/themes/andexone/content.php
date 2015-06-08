<?php
/**
 * The default template for displaying content
 *
 *
 * @package Enlacee
 * @subpackage Andex_One
 * @since Andex One 1.0
 */
?>

            <div class="row">
                <div class="subtitle subtitle-bg-2 page">
                    <h2 class="color-text-blue"><?php _e('NOTICIAS') ?></h2>
                </div>
                <div class="pull-right">
                    <a href="<?php echo esc_url( home_url( '/noticias' ) ); ?>" class="btn-see-news"><?php _e('ver noticias') ?></a>
                </div>            
            </div>

            <div class="row title-news">
                <div class="col-md-1">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/ico-news.jpg" />
                </div>
                <div class="col-md-11">
                    <div class="title-news-date"><?php the_date('l d F Y') ?></div>
                    <div><h1 class="text-uppercase"><?php the_title(); ?></h1>
                </div>                
            </div>            
            </div>            
            <div class="boder-dotted-blue-top"></div>


            <div class="row margin-bottom-60">
                <div class="col-md-8">
                    <?php the_content(); ?>
                </div>
                
                
                <!-- NAVBAR -->
                <div class="col-md-4 page-sidebar">
                    <?php get_sidebar(); ?>
                </div>
            </div>
            <div class="boder-dotted-blue-bottom "></div>

            <div class="pull-left " style="margin-top: 10px">
                <a href="<?php echo esc_url( home_url( '/noticias' ) ); ?>" class="btn-see-news"><?php _e('ver noticias') ?></a>                
            </div>
                        
            <div class="clearfix"></div>
            <br />
            <br />
