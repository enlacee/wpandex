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

                <?php get_template_part( 'content', get_post_format() ); ?>
                    <br />
                <?php //comments_template( '', true ); ?>
            <?php endwhile; // end of the loop. ?>
        
        </div><!-- #wrapper-container -->
    </div><!-- #page -->
<?php //get_sidebar(); ?>
<?php get_footer(); ?>


    

