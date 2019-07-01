<?php

/**
 * En este archivo se incluyen los filtros generales
 *
 */


/** ==============================================================================================================
 *                                                  HOOKS
 *  ==============================================================================================================
 */

add_filter('show_admin_bar', function(){
	return false;
}); // elimina la barra de herramientas del sitio en el front

// // activa la tradudccion del sitio por archivos .mo
add_action( 'after_setup_theme', function (){

	load_theme_textdomain( TRANSDOMAIN, get_template_directory() . '/languages' );
	apply_filters( 'theme_locale', get_locale(), TRANSDOMAIN );
});


/** ==============================================================================================================
 *                                                FILTROS
 *  ==============================================================================================================
 */
 add_image_size( 'talleradg', 510, 340, true );
 add_image_size( 'publicaciones', 778, 1012, true );

	// agrega aqui ...


?>
