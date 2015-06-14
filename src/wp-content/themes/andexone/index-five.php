<?php
$my_new_name = 'preguntas-frecuentes';
$my_new = get_posts(array('name' => $my_new_name,'post_type' => 'page','post_status' => 'publish','numberposts' => 1));
$my_new = (is_array($my_new) && count($my_new)>0) ? $my_new[0] : false;
if (ICL_LANGUAGE_CODE == 'es') {
    $dat = get_post_by_language($my_new->ID, 'page', ICL_LANGUAGE_CODE);
    $my_new = (is_object($dat)) ? $dat : $my_new;    
} elseif (ICL_LANGUAGE_CODE == 'en') {
    $dat = get_post_by_language($my_new->ID, 'page', ICL_LANGUAGE_CODE);
    $my_new = (is_object($dat)) ? $dat : $my_new;
} elseif (ICL_LANGUAGE_CODE == 'pt-br') {
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
} elseif (ICL_LANGUAGE_CODE == 'pt-br') {
    $dat = get_post_by_language($my_02->ID, 'page', ICL_LANGUAGE_CODE);
    $my_02 = (is_object($dat)) ? $dat : $my_02;
}

$imgLang = (ICL_LANGUAGE_CODE == 'es') ? '' : ICL_LANGUAGE_CODE;
?>


    <h4 class="text-bold">&nbsp;</h4>
    <div class="row news-f3">
        <div class="col-md6 clearfix" style="padding-bottom:8px">
            <a href="<?php echo (!is_null($my_02->ID)) ? get_permalink($my_02->ID) : '#'; ?>">
                <img align="right" class="img-responsive"  src="<?php echo get_template_directory_uri() ?>/assets/img/banner_asistencia_tecnica<?php echo $imgLang ?>.jpg" />
            </a>
        </div>
        <div class="col-md6 clearfix">
            <a href="<?php echo (!is_null($my_new->ID)) ? get_permalink($my_new->ID) : '#'; ?>">
                <img align="right" class="img-responsive"  src="<?php echo get_template_directory_uri() ?>/assets/img/banner_preguntas_frecuentes<?php echo $imgLang ?>.jpg" />
            </a>
        </div>
    </div>