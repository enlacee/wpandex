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
                            <!-- slider-->
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                              <!-- Indicators
                              <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                              </ol>-->

                              <!-- Wrapper for slides -->
                              <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                  <img class="img-responsive img-center" src="<?php echo get_template_directory_uri() ?>/assets/img/slides/01.jpg" alt="...">
                                    <div class="box-slide">
                                        <h3>SOLUCIONES INNOVADORAS<BR /> CON TECNOLOGÍA DE AVANZADA</h3>
                                    </div>
                                </div>
                                <div class="item">
                                  <img class="img-responsive img-center" src="<?php echo get_template_directory_uri() ?>/assets/img/slides/01.jpg" alt="...">
                                    <div class="box-slide">
                                        <h3>SOLUCIONES INNOVADORAS<BR /> CON TECNOLOGÍA DE AVANZADA</h3>
                                    </div>

                                </div>
                                <div class="item">
                                  <img class="img-responsive img-center" src="<?php echo get_template_directory_uri() ?>/assets/img/slides/01.jpg" alt="...">
                                    <div class="box-slide">
                                        <h3>SOLUCIONES INNOVADORAS<BR /> CON TECNOLOGÍA DE AVANZADA</h3>
                                    </div>
                                </div>

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
                            </div>
                            <!--endslider-->
                        </div>
                        <div class="col-md-4 slide-main-lef">
                            <div class="clearfix margin-bottom-5">
                                <div class="col-md-7 col-sm-7 col-xs-6  margin-bottom-5">
                                    <h3 class="text-uppercase color-text-blue">proyecto</h3>
                                    <h4 class="text-uppercase color-text-blue">Sistema para el control de caída de piedras</h4>
                                    <p>description...</p>
                                    <div class="btn-see-project">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="btn-text-see-project color-text-blue text-bold">ver proyectos</span>
                                        <img class="" style="margin: 0 0 0 20px" src="<?php echo get_template_directory_uri() ?>/assets/img/btn-see-project.png" />                                
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-6">
                                    <img  align="right" src="<?php echo get_template_directory_uri() ?>/assets/img/f_proyecto_uno.jpg" alt="">                            
                                </div>                        
                            </div>
                            <div class="clearfix"></div>
                            
                            <div class="clearfix">
                                <div class="col-md-7 col-sm-7 col-xs-6">
                                    <h3 class="text-uppercase color-text-green">soluciones</h3>
                                    <h4 class="text-uppercase color-text-green">ciudades verdes</h4>
                                    <p>description...</p>
                                    <div class="btn-see-project">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="btn-text-see-project color-text-green text-bold">ver soluciones</span>
                                        <img class="" style="margin: 0 0 0 20px" src="<?php echo get_template_directory_uri() ?>/assets/img/btn-see-solution.png" />                                
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-6">
                                    <img  align="right" src="<?php echo get_template_directory_uri() ?>/assets/img/f_solucion_uno.jpg" alt="">                            
                                </div>                        
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
                        <h4 class="text-bold">&nbsp;</h4>
                        <div class="row news-f2">
                            <a href="#">
                            <img align="right" class="img-responsive  img-center" src="<?php echo get_template_directory_uri() ?>/assets/img/banner_ejecucion_obras.jpg" alt="" />
                            </a>
                            <a href="#" class="btn-main-gray">más información</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6  news">
                        <h4 class="text-bold">&nbsp;</h4>
                        <div class="row news-f3">
                            <div class="col-md6 clearfix" style="padding-bottom:8px">
                                <img align="right" class="img-responsive"  src="<?php echo get_template_directory_uri() ?>/assets/img/banner_asistencia_tecnica.jpg" />
                            </div>
                            
                            <div class="col-md6 clearfix">
                                <img align="right" class="img-responsive"  src="<?php echo get_template_directory_uri() ?>/assets/img/banner_preguntas_frecuentes.jpg" />
                            </div>
                        </div>

                    </div>
                </div>

            </div><!-- End.wrapper-container-->
<?php get_footer(); ?>            