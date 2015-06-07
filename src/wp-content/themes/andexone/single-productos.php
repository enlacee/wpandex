<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Enlacee
 * @subpackage Andex_One
 * @since Andex One 1.0
 */

get_header(); ?>

    <div class="wrapper-container">
        <div class="page container color-bg-white ">

            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'productos' ); ?></font>
                <?php //comments_template( '', true ); ?>
            <?php endwhile; ?>
            
            <div class="">
                <?php get_template_part( 'sidebar', 'footer' ); ?>                
            </div>
        </div><!-- end.page -->        
    </div><!-- end.wrapper-container -->

<?php get_footer(); ?>

