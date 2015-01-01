<?php
/**
 * The template for displaying page default
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
 
if (in_category('noticias')) {
    
    include(TEMPLATEPATH.'/single-noticias.php');

} elseif (in_category('productos') || in_category('produce') || in_category('produzir')
	|| in_category('soluciones') || in_category('solutions') || in_category('solucoes')
	|| in_category('proyectos') || in_category('projects') || in_category('projetos')	
){
    
    include(TEMPLATEPATH.'/single-productos.php');
    
} elseif (in_category('sectores') || in_category('sectores-en') || in_category('setores')) {
    
    include(TEMPLATEPATH.'/single-sectores.php');
    
} else {
   
    include(TEMPLATEPATH.'/single-default.php');

}