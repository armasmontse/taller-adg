<?php

class Cltvo_Medios extends Cltvo_PostTypeCustom_Master {

	const nombre_plural = 'Medios';
	const nombre_singular = 'Medio';
	const slug = 'medios';

	// Args
	const publico = true;
	const publicly_queryable = true;
	const has_archive = false;
	protected static $supports = array( 'title' , 'thumbnail');
	// const show_ui = true;
	// const show_in_menu = true;
	// const query_var = true;
	// const capability_type = 'post';
	// const hierarchical = false;
	// const menu_position = 6;

	public $link;

	public function setMetas() {
		// $this->gallery = Cltvo_Galeria_Medios::getImages($this->post);
		// $this->date = Cltvo_Fecha_Medios::getMetaValue($this->post);
		// $this->location = Cltvo_Locacion_Medios::getMetaValue($this->post);
		$this->link = Cltvo_Link::getMetaValue($this->post);
	}

	public static function rewriteSlug() {
		return array(
			'slug'	=> 	__('medios', TRANSDOMAIN),
			'with_front'	=> 	false,
			'hierarchical'	=> 	true
		);
	}
}
