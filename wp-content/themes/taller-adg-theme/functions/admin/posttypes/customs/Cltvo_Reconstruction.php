<?php

class Cltvo_Reconstruction extends Cltvo_PostTypeCustom_Master {

	const nombre_plural = 'Reconstrucción';
	const nombre_singular = 'Proyecto';
	const slug = 'recostruccion';

	// Args
	const publico = true;
	const publicly_queryable = true;
	const has_archive = false;
	protected static $supports = array( 'title', 'editor', 'thumbnail');
	// const show_ui = true;
	// const show_in_menu = true;
	// const query_var = true;
	// const capability_type = 'post';
	// const hierarchical = false;
	// const menu_position = 6;

	public function setMetas() {
		$this->gallery = Cltvo_Galeria_Reconstruccion::getImages($this->post);
		$this->date = Cltvo_Fecha_Reconstruccion::getMetaValue($this->post);
		$this->location = Cltvo_Locacion_Reconstruccion::getMetaValue($this->post);

		$this->colaboraciones =Cltvo_Colaboraciones_Reconstruccion::getMetaValue($this->post);
		$this->fotografia =Cltvo_Fotografia_Reconstruccion::getMetaValue($this->post);
		$this->premios =Cltvo_Premios_Reconstruccion::getMetaValue($this->post);
		$this->status =Cltvo_Status_Reconstruccion::getMetaValue($this->post);
	}

	public static function rewriteSlug() {
		return array(
			'slug'	=> 	__('reconstruccion', TRANSDOMAIN),
			'with_front'	=> 	false,
			'hierarchical'	=> 	true
		);
	}
}
