<?php //require 'test.php'; ?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://enlacee.github.io
 *
 * @package Enlacee
 * @subpackage Andex One
 * @since Andex One 1.0
 */

get_header(); ?>
            <div class="wrapper-container">
                <!--body-->
                <div class="bg-slide">
                    <div class="container color-bg-white">
                        <div class="col-md-8 slide-main">

                            <?php get_template_part( 'index', 'slide' ); ?>

                        </div>
                        <div class="col-md-4 slide-main-lef">
                            <div class="clearfix margin-bottom-5">
                                <?php get_template_part( 'index', 'three' ); ?>
                            </div>
                            <div class="clearfix"></div>

                            <div>
                                <?php get_template_part( 'index', 'four' ); ?>
                            </div>
                            <div class="clearfix"></div>

                        </div>
                    </div>
                </div>
                    <!--endbody-->

                <div class="container body-food">
                    <div class="col-md-4 col-sm-6 news">
                        <?php get_template_part( 'index', 'one' ); ?>
                    </div>

                    <div class="col-md-4 col-sm-6  news">
                        <?php get_template_part( 'index', 'two' ); ?>
                    </div>

                    <div class="col-md-4 col-sm-6  news">
                        <h4 class="text-bold">&nbsp;</h4>
                        <div class="row news-f3">
                            <div class="col-md6 clearfix" style="padding-bottom:8px">
                                <a href="<?php echo esc_url( home_url( '/asistencia-tecnica' ) ); ?>">
                                    <img align="right" class="img-responsive"  src="<?php echo get_template_directory_uri() ?>/assets/img/banner_asistencia_tecnica.jpg" />
                                </a>
                            </div>

                            <div class="col-md6 clearfix">
                                <a href="<?php echo esc_url( home_url( '/preguntas-frecuentes' ) ); ?>">
                                    <img align="right" class="img-responsive"  src="<?php echo get_template_directory_uri() ?>/assets/img/banner_preguntas_frecuentes.jpg" />
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div><!-- End.wrapper-container-->
<?php get_footer(); ?>

