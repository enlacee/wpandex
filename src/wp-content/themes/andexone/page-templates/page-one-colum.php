<?php
/**
 * Template Name: Page One Column
 *
 * Description: A page template that provides all space One Column
 * @package Enlacee
 * @subpackage Andex_Onde
 * @since Andex Onde 1.0
 */

get_header(); ?>
<style type="text/css">
    .container-me-page {
        padding: 0 0 0 15px;
    }
</style> 
    <div class="wrapper-container">
        <div class="container container-me-page color-bg-white ">

            <?php while ( have_posts() ) : the_post(); ?>
                <div class="subtitle subtitle-bg-1">
                    <h2>&nbsp;&nbsp;&nbsp;&nbsp;<?php the_title(); ?></h2>
                </div>

                <div class="page-one-colum">
                    <?php the_content(); ?>

                </div>
            <?php endwhile; // end of the loop. ?>


        </div>
    </div>


<?php get_footer(); ?>    
