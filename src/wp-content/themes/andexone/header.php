<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Enlacee
 * @subpackage Andex One
 * @since Andex One 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head() ?>
    </head>
    <body>
        <div class="wrapper">
            <!-- == header == -->
            <div class="header">
                
                <div class="bg-topbar">
                    <div class="container">
                        <div class="topbar clearfix">
<?php
$menuParameters = array(
    'container' => false,
    'echo' => false,
    'theme_location' => 'primary',
    'container_class' => '');
$menu = wp_nav_menu($menuParameters);
$li = preg_replace( array( '#^<div[^>]*>#', '#</div>$#','#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
?>
                            <ul class="loginbar pull-right">
                                <?php echo $li ?>
                                <li class=""><a href="#">español</a></li>
                            </ul>
                            <!-- <ul class="loginbar pull-right">
                                <li><a href="index.html">inicio</a></li>                                
                                <li><a href="contact.html">contáctenos</a></li>                                
                                <li class=""><a href="#">español</a></li>
                            </ul>-->
                        </div>
                    </div>
                </div><!-- topbar languague -->
                <div class="clearfix"></div>
                <div class="bg-topbar-middle">
                    <div class="container margin-bottom-10 clearfix">
                        <div class="col-md-3 col-sm-3  hidden-xs">
                            <div class="logo">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?> "
                                    title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> " rel="home">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.jpg" alt="Andex">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-foot.jpg" alt="Andex">                                    
                                </a>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class="row">
                                <div class="topbar-middle clearfix">
                                    <ul class="">                                        
                                        <li><a href="#">Proyectos</a></li>                                        
                                        <li><a href="#">Socios estratégicos</a></li>                                        
                                        <li><a href="#">Noticias</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row text-right top-contact-phone">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/contactenos.jpg" alt="contactenos" />                                
                                <!--<strong>
                                <span class="glyphicon glyphicon-earphone color-text-blue ico-contact" aria-hidden="true"></span>
                                <span class="color-text-blue">Contáctenos al</span>
                                </strong> (511) <strong>436-7442</strong>-->
                            </div>
                        </div>
                    </div>
                </div><!-- end bg-topbar-middle-->

                
                <div class="container"><!-- submenu-->
                    <div class="navbar-default main-menu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"> </a>
                        </div>
                        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="activex">
                                    <a href="#">NOSOTROS</a>
                                </li>
                                <li class="dropdown mega-menu" style="">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">SOLUCIONES</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="row">
                                                <div class="col-sm-4 col-md-5">
                                                    <h4 class="title-mega-menu">
                                                        CONOCE <br /> <span class="title-mega-menu-tiny-gray">NUESTRAS</span>
                                                        <span class="color-text-blue">INNOVADORAS</span><br /> <span class="color-text-black">SOLUCIONES</span><br />
                                                        <span class="title-mega-menu-tiny-gray">EN</span>
                                                        <span>INGENIERÍA</span>
                                                        <span  class="title-mega-menu-tiny-gray">DE</span><br />
                                                        <span class="color-text-blue">GEOSINTÉTICOS</span></h4>
                                                </div>
                                                <div class="col-sm-8 col-md-7">
                                                    <div class="row">
                                                        <div class="col-md-11x divider-verical">
                                                        <div class=""></div>
                                                            <ul class="menu">
                                                                <li><a href="#">Ciudades verdes</a></li>
                                                                <li><a href="#">Control de erosión</a></li>
                                                                <li><a href="#">Estabilización de taludes</a></li>
                                                                <li><a href="#">Revestimiento de canales</a></li>
                                                                <li><a href="#">Control de caídas de piedras</a></li>
                                                                <li><a href="#">Drenaje y manejo de agujas</a></li>
                                                                <li><a href="#">Revegetación autosostenigle</a></li>
                                                                <li><a href="#">Defensas ribereñas</a></li>
                                                                <li><a href="#">Refuerzo de carpetas asfálticas</a></li>
                                                                <li><a href="#">Refuerzo de suelos: soporte y distribución de carga</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li><!-- endsubmenu-->
                                
                                <li class="dropdown mega-menu" ><!-- submenu-->
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">PRODUCTOS</a>
                                    <ul class="dropdown-menu">
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-4 col-md-6">
                                                        <h4>CONOCE NUESTRAS INNOVADORAS SOLUCIONES EN INGENIERÍA DE GEOSINTÉTICOS</h4>
                                                        <img src="images/section-image-1.png" alt="image-1">
                                                        <p class="topbar-middle-devider"></p>
                                                    </div>
                                                    <div class="col-sm-8 col-md-6">

                                                        <div class="row">
                                                            <!--<div class="col-md-1 divider-verical"></div>-->
                                                            <div class="col-md-11x divider-verical">
                                                            <div class=""></div>
                                                                <ul class="menu">
                                                                    <li><a href="components-tabs-and-pills.html"><i class="icon-right-open"></i>Tabs &amp; Pills</a></li>
                                                                    <li><a href="components-accordions.html"><i class="icon-right-open"></i>Accordions</a></li>
                                                                    <li><a href="components-social-icons.html"><i class="icon-right-open"></i>Social Icons</a></li>
                                                                    <li><a href="components-buttons.html"><i class="icon-right-open"></i>Buttons</a></li>
                                                                    <li><a href="components-forms.html"><i class="icon-right-open"></i>Forms</a></li>
                                                                    <li><a href="components-progress-bars.html"><i class="icon-right-open"></i>Progress bars</a></li>
                                                                    <li><a href="components-alerts-and-callouts.html"><i class="icon-right-open"></i>Alerts &amp; Callouts</a></li>
                                                                    <li><a href="components-content-sliders.html"><i class="icon-right-open"></i>Content Sliders</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">SECTORES</a></li>
                                    <li><a href="#">ASISTENCIA TÉCNICA</a></li>
                                </ul>

                        </div>
                    </div>
                </div><!-- End submenu -->
            </div><!-- End.header -->




