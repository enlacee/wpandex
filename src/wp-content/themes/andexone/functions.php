<?php

/**
 * Andex One setup.
 *
 * Sets up theme defaults
 *
 * @uses load_theme_textdomain() For translation/localization support.
 *
 * @since Andex One 1.0
 */
function andexone_setup() {
    /*
     * Makes Andex One available for translation. format [my_theme-de_DE.mo] : andexone-es_ES.mo
     */
    load_theme_textdomain( 'andexone', get_template_directory() . '/languages' );

    // This theme supports a variety of post formats.
    add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menu( 'primary', __( 'Primary Menu', 'andexone' ) );
    
    // This theme uses a custom image size for featured images, displayed on "standard" posts.
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop
}
add_action( 'after_setup_theme', 'andexone_setup' );

/**
 * Enqueue scripts and styles for front-end.
 *
 * @since Andex One 1.0
 */
function andexone_scripts_styles() {
    global $wp_styles;
    global $wp_scripts;

    // init JS
    // Loads the Internet Explorer specific JS.
    wp_register_script('andexone-ie-1', get_template_directory_uri() . '/assets/plugins/html5shiv.min.js', array(), false);
    wp_register_script('andexone-ie-2', get_template_directory_uri() . '/assets/plugins/respond.min.js', array(), false);
    $wp_scripts->add_data('andexone-ie-1', 'conditional', 'lt IE 9');
    $wp_scripts->add_data('andexone-ie-2', 'conditional', 'lt IE 9');
    // load jquey customs
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/plugins/jquery.min.js', array(), false, true);
    wp_enqueue_script('jquery');
    
    wp_enqueue_script( 'andexone-navigation', get_template_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script( 'andexone-navigation', get_template_directory_uri() . '/js/navigation.js', array(), false, true);

    // init CSS
    wp_enqueue_style('andexone-style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'andexone_scripts_styles' );

/**
 * Filter the page title.
 *
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @since Andex One 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string Filtered title.
 */
function andexone_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() )
        return $title;

    // Add the site name.
    $title .= get_bloginfo( 'name', 'display' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

    return $title;
}
add_filter( 'wp_title', 'andexone_wp_title', 10, 2 );

/**
 * Filter the page menu arguments.
 *
 * Makes our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
 *
 * @since Twenty Twelve 1.0
 */
function andexone_page_menu_args( $args ) {
    if ( ! isset( $args['show_home'] ) )
        $args['show_home'] = true;
    return $args;
}
add_filter( 'wp_page_menu_args', 'andexone_page_menu_args' );



/**
 * Add Script in footer  for pages-template determinates 
 * 
 * @return void
 */

function andexone_contact_add_script()
{
    if (is_page_template('page-templates/page-contact.php'))
    {
        wp_enqueue_script(
            'jquery.validate',
            get_template_directory_uri() . '/assets/js/plugins/jquery.validate.min.js', array(), false, true);        
        wp_enqueue_script(
            'page-contact',
            get_template_directory_uri() . '/assets/js/page-templates/page-contact.js', array(), false, true);        

    }   
}
add_filter( 'wp_enqueue_scripts', 'andexone_contact_add_script');



/***
*  page contact
*
***/

/**
 * Send mail to administrador web (contact)
 * 
 */
function ajaxPageContact()
{
    $flag = false;
    if (count($_REQUEST) > 3) {
        $admin_email = get_option('admin_email');
        $other = '';

        $br = "<br />";
        $to = array($admin_email, $other);
        $subject = $_REQUEST['issue'];
        $message = <<<MESS
from : {$_REQUEST['email']} $br
name : {$_REQUEST['name']} $br
company : {$_REQUEST['company']} $br
$br
message : {$_REQUEST['message']} 
MESS;
echo $message; exit;
        $flag = wp_mail( $to, $subject, $message);
    }

    if ($flag) {
        echo "1";
    } else {
        echo "0";
    }
    die();
}
// creating Ajax call for WordPress
add_action('wp_ajax_ajaxPageContact', 'ajaxPageContact'); // admin
add_action('wp_ajax_nopriv_ajaxPageContact', 'ajaxPageContact'); // anonimus


/**
 *  Helpers Views
 */

/**
 * Limit words custom for views
 * 
 * @param string $str description o content string
 * @param int $num number to cut
 * @param string $append_str string to concat
 * @return string
 */
function limit_words( $str, $num='', $append_str='' ) {
    $num = strlen($str);
    $palabras = preg_split( '/[\s]+/', $str, -1, PREG_SPLIT_OFFSET_CAPTURE );
    if( isset($palabras[$num][1]) ){
      $str = substr( $str, 0, $palabras[$num][1] ) . $append_str;
    }
    unset( $palabras, $num );
    return trim( $str );
}
/*
function andexone_entry_meta() {
    // Translators: used between list items, there is a space after the comma.
    $categories_list = get_the_category_list( __( ', ', 'andexone' ) );

    // Translators: used between list items, there is a space after the comma.
    $tag_list = get_the_tag_list( '', __( ', ', 'andexone' ) );

    $date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
            esc_url( get_permalink() ),
            esc_attr( get_the_time() ),
            esc_attr( get_the_date( 'c' ) ),
            esc_html( get_the_date() )
    );
    printf(
            $categories_list,
            $tag_list,
            $date
    );       
}

*/