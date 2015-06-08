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
    <div class="page container color-bg-white min-heigh-700 ">
                                
	<section id="primary" class="site-content margin-bottom-60">
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
                            <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'andexone' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'content', 'page' ); ?>
                            <?php //comments_template( '', true ); ?>
                        <?php endwhile; // end of the loop. ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">
                            <header class="entry-header">
                                <h1 class="entry-title"><?php _e( 'Nothing Found', 'andexone' ); ?></h1>
                            </header>

                            <div class="entry-content">
                                    <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'andexone' ); ?></p>
                                    <?php get_search_form(); ?>
                            </div><!-- .entry-content -->
                            
			</article><!-- #post-0 -->

		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->
        
    </div><!-- #wrapper-container -->
</div><!-- #page -->
<?phpif( is_search() != true ) { get_sidebar() }; ?>
<?php get_footer(); ?>