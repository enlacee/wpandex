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
} elseif (in_category('soluciones')) {
    $my_menu = 'soluciones';
} elseif (in_category('productos')) {
    $my_menu = 'productos';
} elseif (in_category('sectores')) {
    $my_menu = 'sectores';
} elseif (is_page('asistencia-tecnica')) {
    $my_menu = 'asistencia-tecnica';
}

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
                        <a href="<?php echo esc_url( home_url( '/nosotros' ) ); ?>"><?php _e('NOSOTROS') ?></a>
                    </li>
                    <li class="dropdown mega-menu <?php echo ($my_menu == 'soluciones') ? 'active' : '' ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php _e('SOLUCIONES') ?></a>
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
                                                
                                                <?php get_template_part( 'header', 'submenu1' ); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="dropdown mega-menu <?php echo ($my_menu == 'productos') ? 'active' : '' ?>" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php _e('PRODUCTOS') ?></a>
                        <ul class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-sm-4 col-md-6">
                                        <h4 class="title-mega-menu">
                                            CONOCE <br /> <span class="title-mega-menu-tiny-gray">NUESTRAS</span>
                                            <span class="color-text-blue">INNOVADORAS</span><br /> <span class="color-text-black">SOLUCIONES</span><br />
                                            <span class="title-mega-menu-tiny-gray">EN</span>
                                            <span>INGENIERÍA</span>
                                            <span  class="title-mega-menu-tiny-gray">DE</span><br />
                                            <span class="color-text-blue">GEOSINTÉTICOS</span></h4>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php _e('SECTORES') ?></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-sm-4 col-md-6">
                                        <h4 class="title-mega-menu">
                                            CONOCE <br /> <span class="title-mega-menu-tiny-gray">NUESTRAS</span>
                                            <span class="color-text-blue">INNOVADORAS</span><br /> <span class="color-text-black">SOLUCIONES</span><br />
                                            <span class="title-mega-menu-tiny-gray">EN</span>
                                            <span>INGENIERÍA</span>
                                            <span  class="title-mega-menu-tiny-gray">DE</span><br />
                                            <span class="color-text-blue">GEOSINTÉTICOS</span></h4>
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
                        <a href="<?php echo esc_url( home_url( '/asistencia-tecnica' ) ); ?>"><?php _e('ASISTENCIA TÉCNICA') ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- End submenu -->