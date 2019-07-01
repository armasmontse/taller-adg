<?php

/**
 * En este archivo se incluyen los filtros que requiera el tema 
 *
 */


/** ==============================================================================================================
 *                                                  HOOKS
 *  ==============================================================================================================
 */

// add_action( 'pre_get_posts', 'cltvo_query_mod' ); // modifica el query prestablecido por wp


/** ==============================================================================================================
 *                                                FILTROS
 *  ==============================================================================================================
 */

// modifica el query prestablecido por wp
function cltvo_query_mod( $query ) {
	if( $query->is_main_query() && !is_admin() ){
		if ( $query->is_archive() ){
			//Restringir query sólo a un Post Type
			$query->set( 'post_type', 'post' );
		}

		if ( $query->is_page() ){
			//modificar el query por completo
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 9,
				'post_status' => 'publish'
			);
			$query->query_vars = $args;
		}
	}
}


/**
 * @param string $url
 * @param MslsLink $link
 * @param bool current
 * @return string
 */
function my_msls_output_get( $url, $link, $current ) {
    return sprintf(
        '<a href="%s" title="%s"%s>%s</a>',
        $url,
        $link->txt,
        ( $current ? ' class="selected"' : '' ),
        $link
    );
}
add_filter( 'msls_output_get', 'my_msls_output_get', 10, 3 );

	// agrega aqui ...


?>