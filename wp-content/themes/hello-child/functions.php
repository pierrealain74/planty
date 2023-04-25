<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */

 add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles');    
function theme_enqueue_styles() {

	// Chargement du style.css du thème parent Hell Elementor
		wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

		wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/theme.css', array(), filemtime(get_stylesheet_directory() . '/theme.css'));

}


/* afficher le menu admin que si user connecté */

function hello_elementor_child_menu_args( $args ) {
    if ( is_user_logged_in() ) {
        $args['menu'] = 'mainmenu';
    } else {
        $args['menu'] = 'mainmenu-notlogged';
    }
    return $args;
}
add_filter( 'wp_nav_menu_args', 'hello_elementor_child_menu_args' );

/* afficher un footer diff selon la page */

/* function isPageCommander( $args ) {

if(is_page( 'commander' )){
	
}


}
add_filter( 'wp_nav_menu_args', 'isPageCommander' ); */

?>

