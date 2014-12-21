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

} else {
    
    include(TEMPLATEPATH.'/single-default.php');

}