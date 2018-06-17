<?php 

/* ------------------------------------------------- *|
	SOMMAIRE
|* ------------------------------------------------- */
/**
 * CSS AND JS SCRIPTS................ Déclaration des fichiers .css et .js
 * SET UP THEME ..................... Taille des images et thumbnails, déclaration du menu
 * NAVWALKER ........................ Inclusion de navwalker pour le menu Bootstrap
 * CUSTOMIZER ....................... Inclusion des fichiers customizer
 */





/*
 ***********************************************
 * CSS AND JS SCRIPTS
 ***********************************************
 */

function hom_styles(){

	// CSS FILES
	wp_register_style('googlefonts', 'https://fonts.googleapis.com/css?family=Kalam|Raleway:400,700', array(), '1.0.0');
	wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css', array(), '4.0.0');
	wp_register_style('style', get_template_directory_uri().'/style.css', array('bootstrap'), '1.0.0');

	wp_enqueue_style('googlefont');
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('style');

	// JS FILES
	wp_register_script('fontawesome', 'https://use.fontawesome.com/7e001e981e.js', array(), '4.0.0', true);
	wp_register_script('jquery3', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', true);
	wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array(), '1.12.3', true);
	wp_register_script('bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js', array('jquery3', 'popper'), '4.0.0', true);

	wp_enqueue_script('fontawesome');
	wp_enqueue_script('jquery3');
	wp_enqueue_script('popper');
	wp_enqueue_script('bootstrapjs');
}

add_action('wp_enqueue_scripts', 'hom_styles');





/*
 ***********************************************
 * SET UP THEME
 ***********************************************
 */

function hom_setup(){
	add_theme_support('post-thumbnails');

	add_image_size('panoramique', 1600, 550, true);
	add_image_size('prestation', 400, 200, true);


	// Menu Main
	register_nav_menus( array(
		'primary' => __( 'Menu principal', 'homahanature' ),
	) );

	// Footer menu
	register_nav_menus( array(
		'footer1' => __( 'Menu pied de page 1', 'homahanature' ),
	) );

	register_nav_menus( array(
		'footer2' => __( 'Menu pied de page 2', 'homahanature' ),
	) );

	// Header menu
	register_nav_menus( array(
		'header' => __( 'Menu en-tête', 'homahanature' ),
	) );
}
add_action('after_setup_theme', 'hom_setup');





/*
 ***********************************************
	NAVWALKER
 ***********************************************
 */
if ( ! file_exists( get_template_directory() . '/inc/navwalker/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
    require_once get_template_directory() . '/inc/navwalker/class-wp-bootstrap-navwalker.php';
}





/*
 ***********************************************
	CUSTOMIZER
 ***********************************************
 */
require get_stylesheet_directory().'/inc/customizer/customizer-footer.php';
