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
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );    

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

