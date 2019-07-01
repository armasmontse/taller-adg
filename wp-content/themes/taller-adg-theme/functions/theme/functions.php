<?php

/**
 * En este archivo se incluyen las funciones del tema
 *
 */

function getBlogLanguage() {
	$blog = MslsBlogCollection::instance()->get_current_blog();
	$language = $blog != null ? $blog->get_language() : null;
	if($language == 'us' || $language == 'en_EN' || $language == 'en_US') {
		$lang_code = 'en';
	} else {
		$lang_code = 'es';
	}
	return $lang_code;
}

/** ==============================================================================================================
 *                                              FUNCIONES DEL TEMA
 *  ==============================================================================================================
 */

//Register Header Menu
function register_my_menu() {
	register_nav_menu('menu', __('Menú','taller-adg-theme'));
}
add_action('after_setup_theme','register_my_menu');




?>
