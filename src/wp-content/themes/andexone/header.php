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
// include 'test.php';
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>

<link rel="icon" href="http://www.andex.com.pe/web/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://www.andex.com.pe/web/favicon.ico" type="image/x-icon" />
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head() ?>
		
		<?php include_once("analyticstracking.php") ?>
		
    </head>
    <body>
	        <div class="wrapper">
            <!-- == header == -->
            <div class="header">
                
                <div class="subtitle-bg-1">
                    <div class="container">
                        <div class="topbar clearfix">
<?php
$menuParameters = array( 'container' => false, 'container_class' => '',
    'echo' => false, 'theme_location' => 'primary', 'depth' => 1);
$primaryMenu = wp_nav_menu($menuParameters);
$list = preg_replace( array( '#^<div[^>]*>#', '#</div>$#','#^<ul[^>]*>#', '#</ul>$#' ), '', $primaryMenu );
?>
                            <ul class="loginbar pull-right">
                                <li><a href="/web/"><img src="/web/wp-content/themes/andexone/assets/img/ico_home.png" border="0"></a></li>
								  <?php echo $list ?>                                
                                <!--<li>
                                    <?php do_action('icl_language_selector'); ?>
                                </li> -->
                                
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
                                    <!-- <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-foot.jpg" alt="Andex">    -->                                 
                                </a>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class="row">
                                <div class="topbar-middle clearfix">
<?php
$menuParam = array( 'container' => false, 'container_class' => '',
    'echo' => false, 'theme_location' => 'secondary', 'depth' => 1,
    'fallback_cb'     => false);
$secondaryMenu = wp_nav_menu($menuParam);
$list = preg_replace( array( '#^<div[^>]*>#', '#</div>$#','#^<ul[^>]*>#', '#</ul>$#' ), '', $secondaryMenu );
?>                                    
                                    <ul>
                                        <?php if (!empty($list)): ?>
                                        <?php get_template_part( 'header', 'menustatic' ); ?>
                                        <?php echo $list ?>
                                        <?php else: ?>
                                        <li><a href="#">Proyectos config</a></li>                                        
                                        <li><a href="#">Socios estratégicos config</a></li>                                        
                                        <li><a href="#">Noticias config</a></li> 
										
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="row text-right top-contact-phone">
                                <!--<img src="<?php echo get_template_directory_uri() ?>/assets/img/contactenos.jpg" alt="contactenos" />-->
                                <strong>
                                <span class="glyphicon glyphicon-earphone color-text-blue ico-contact" aria-hidden="true"></span>
                                <!-- <span class="color-text-blue"><?php _e('Contact us at', 'andexone') ?></span> -->
                                </strong><font size="3"> (511) <strong>436-7442</strong></font>
                            </div>
                        </div>
                    </div>
                </div><!-- end bg-topbar-middle-->

                
            <?php get_template_part( 'header', 'menu' );
            //include 'header-menu.html';  ?>
            </div><!-- End.header -->




