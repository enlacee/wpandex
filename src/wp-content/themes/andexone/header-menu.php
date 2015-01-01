<?php
/**
 * menu selected 
 * select by slug
 */
$my_menu = false;

if (is_home()) {
    $my_menu = false;
}elseif (is_page('nosotros')) {
    $my_menu = 'nosotros';
} elseif (in_category('soluciones') || in_category('solutions') || in_category('solucoes')) {
    $my_menu = 'soluciones';
} elseif (in_category('productos') || in_category('produce') || in_category('produzir')) {
    $my_menu = 'productos';
} elseif (in_category('sectores') || in_category('sectores-en')|| in_category('setores')) {
    $my_menu = 'sectores';
} elseif (is_page('asistencia-tecnica')) {
    $my_menu = 'asistencia-tecnica';
}


$my_new_name = 'nosotros';
$my_new = get_posts(array('name' => $my_new_name,'post_type' => 'page','post_status' => 'publish','numberposts' => 1));
$my_new = (is_array($my_new) && count($my_new)>0) ? $my_new[0] : false;
if (ICL_LANGUAGE_CODE == 'es') {
    $dat = get_post_by_language($my_new->ID, 'page', ICL_LANGUAGE_CODE);
    $my_new = (is_object($dat)) ? $dat : $my_new;    
} elseif (ICL_LANGUAGE_CODE == 'en') {
    $dat = get_post_by_language($my_new->ID, 'page', ICL_LANGUAGE_CODE);
    $my_new = (is_object($dat)) ? $dat : $my_new;
} elseif (ICL_LANGUAGE_CODE == 'pt') {
    $dat = get_post_by_language($my_new->ID, 'page', ICL_LANGUAGE_CODE);
    $my_new = (is_object($dat)) ? $dat : $my_new;
}

$my_02_name = 'asistencia-tecnica';
$my_02 = get_posts(array('name' => $my_02_name,'post_type' => 'page','post_status' => 'publish','numberposts' => 1));
$my_02 = (is_array($my_02) && count($my_02)>0) ? $my_02[0] : false;
if (ICL_LANGUAGE_CODE == 'es') {
    $dat = get_post_by_language($my_02->ID, 'page', ICL_LANGUAGE_CODE);
    $my_02 = (is_object($dat)) ? $dat : $my_02;    
} elseif (ICL_LANGUAGE_CODE == 'en') {
    $dat = get_post_by_language($my_02->ID, 'page', ICL_LANGUAGE_CODE);
    $my_02 = (is_object($dat)) ? $dat : $my_02;
} elseif (ICL_LANGUAGE_CODE == 'pt') {
    $dat = get_post_by_language($my_02->ID, 'page', ICL_LANGUAGE_CODE);
    $my_02 = (is_object($dat)) ? $dat : $my_02;
}


//echo get_url_for_language($my_new->ID, ICL_LANGUAGE_CODE);

//var_dump($my_new);

//$original_ID = icl_object_id( $my_posts[0]->ID, 'page', false, 'en' );

//$a = get_post_by_language($my_posts[0]->ID, 'page', 'en');

//echo "noticias en ingles";
//var_dump($a);
?>
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
                    <li class="<?php echo ($my_menu == 'nosotros') ? 'active' : '' ?>">
                        
                        <a href="<?php echo (!is_null($my_new->ID)) ? get_permalink($my_new->ID) : '#'; ?>"><?php _e('US', 'andexone') ?></a>
                        <!--<a href="<?php echo esc_url( home_url( '/nosotros' ) ); ?>"><?php _e('US', 'andexone') ?></a>-->
                    </li>
                    <li class="dropdown mega-menu <?php echo ($my_menu == 'soluciones') ? 'active' : '' ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php _e('SOLUTIONS', 'andexone') ?></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-sm-4 col-md-5">
                                        <h4 class="title-mega-menu">
                                            <?php _e('DISCOVER', 'andexone') ?> <br /> 
                                            <span class="title-mega-menu-tiny-gray"><?php _e('OUR', 'andexone') ?></span>
                                            <span class="color-text-blue"><?php _e('INNOVATIVE', 'andexone') ?></span><br /> 
                                            <span class="color-text-black"><?php _e('SOLUTIONS', 'andexone') ?></span><br />
                                            <span class="title-mega-menu-tiny-gray"><?php _e('IN', 'andexone') ?></span>
                                            <span><?php _e('ENGINEERING', 'andexone') ?></span> 
                                            <span  class="title-mega-menu-tiny-gray"><?php _e('OF', 'andexone') ?></span><br />
                                            <span class="color-text-blue"><?php _e('GEOSYNTHETICS', 'andexone') ?></span>
                                        </h4>
                                    </div>
                                    <div class="col-sm-8 col-md-7">
                                        <div class="row">
                                            <div class="col-md-11x divider-verical">
                                            <div class=""></div>
                                                
                                                <?php get_template_part( 'header', 'submenu1' ); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="dropdown mega-menu <?php echo ($my_menu == 'productos') ? 'active' : '' ?>" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php _e('PRODUCE', 'andexone') ?></a>
                        <ul class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-sm-4 col-md-6">
                                            <h4 class="title-mega-menu">
                                                <?php _e('DISCOVER', 'andexone') ?> <br /> 
                                                <span class="title-mega-menu-tiny-gray"><?php _e('OUR', 'andexone') ?></span>
                                                <span class="color-text-blue"><?php _e('INNOVATIVE', 'andexone') ?></span><br /> 
                                                <span class="color-text-black"><?php _e('SOLUTIONS', 'andexone') ?></span><br />
                                                <span class="title-mega-menu-tiny-gray"><?php _e('IN', 'andexone') ?></span>
                                                <span><?php _e('ENGINEERING', 'andexone') ?></span> 
                                                <span  class="title-mega-menu-tiny-gray"><?php _e('OF', 'andexone') ?></span><br />
                                                <span class="color-text-blue"><?php _e('GEOSYNTHETICS', 'andexone') ?></span>
                                            </h4>
                                            <p class="topbar-middle-devider"></p>
                                        </div>
                                        <div class="col-sm-8 col-md-6">

                                            <div class="row">
                                                <!--<div class="col-md-1 divider-verical"></div>-->
                                                <div class="col-md-11x divider-verical">
                                                <div class=""></div>

                                                    <?php get_template_part( 'header', 'submenu2' ); ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                    </li>

                    <li class="dropdown mega-menu <?php echo ($my_menu == 'sectores') ? 'active' : '' ?>" ><!-- submenu-->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php _e('SECTORS', 'andexone') ?></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-sm-4 col-md-6">
                                        <h4 class="title-mega-menu">
                                            <?php _e('DISCOVER', 'andexone') ?> <br /> 
                                            <span class="title-mega-menu-tiny-gray"><?php _e('OUR', 'andexone') ?></span>
                                            <span class="color-text-blue"><?php _e('INNOVATIVE', 'andexone') ?></span><br /> 
                                            <span class="color-text-black"><?php _e('SOLUTIONS', 'andexone') ?></span><br />
                                            <span class="title-mega-menu-tiny-gray"><?php _e('IN', 'andexone') ?></span>
                                            <span><?php _e('ENGINEERING', 'andexone') ?></span> 
                                            <span  class="title-mega-menu-tiny-gray"><?php _e('OF', 'andexone') ?></span><br />
                                            <span class="color-text-blue"><?php _e('GEOSYNTHETICS', 'andexone') ?></span>
                                        </h4>
                                        <p class="topbar-middle-devider"></p>
                                    </div>
                                    <div class="col-sm-8 col-md-6">

                                        <div class="row">
                                            <!--<div class="col-md-1 divider-verical"></div>-->
                                            <div class="col-md-11x divider-verical">
                                            <div class=""></div>
                                                <?php get_template_part( 'header', 'submenu3' ); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                        
                    <li class="<?php echo ($my_menu == 'asistencia-tecnica') ? 'active' : '' ?>">
                        <a href="<?php echo (!is_null($my_02->ID)) ? get_permalink($my_02->ID) : '#'; ?>"><?php _e('TECHNICAL ASSISTANCE', 'andexone') ?></a>
                        <!--<a href="<?php echo esc_url( home_url( '/asistencia-tecnica' ) ); ?>"><?php _e('TECHNICAL ASSISTANCE') ?></a>-->
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- End submenu -->