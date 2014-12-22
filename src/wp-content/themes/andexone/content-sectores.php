<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Enlacee
 * @subpackage Andex_One
 * @since AndexOne 1.0
 */
?>          
        <div class="row">
            <div class="subtitle subtitle-bg-1 page">
                <h2 class="color-text-blue"><?php the_title(); ?></h2>
            </div>
            <div class="margin-bottom-10">
                <?php get_template_part( 'single', 'productosslide' ); ?>
                
            </div>
        </div>    

        <div class="row margin-bottom-60">
            <div class="col-md-8">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div><!-- .entry-content -->                  
                </article><!-- #post -->
                
                <div>
                    <?php get_template_part( 'content', 'sectoresfooter' ); ?>
                </div>
                
            </div>
            <div class="col-md-4 page-sidebar">
                <?php get_sidebar() ?>
            </div>
        </div>


