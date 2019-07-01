<?php

class Cltvo_Premios extends Cltvo_PostTypeCustom_Master {

	const nombre_plural = 'Premios';
	const nombre_singular = 'Premio';
	const slug = 'premios';

	// Args
	const publico = true;
	const publicly_queryable = true;
	const has_archive = false;
	protected static $supports = array( 'title','editor', 'thumbnail');
	// const show_ui = true;
	// const show_in_menu = true;
	// const query_var = true;
	// const capability_type = 'post';
	// const hierarchical = false;
	// const menu_position = 6;

	public $nombre;
	public $premio;
	public $proyectotexto;
	public $proyectolink;
	public $fecha;

	public function setMetas() {
		$this->nombre =Cltvo_Nombre_Premios::getMetaValue($this->post);
		$this->premio =Cltvo_Premio_Premios::getMetaValue($this->post);
		$this->proyectotexto =Cltvo_ProyectoTexto_Premios::getMetaValue($this->post);
		$this->proyectolink =Cltvo_ProyectoLink_Premios::getMetaValue($this->post);
		$this->fecha =Cltvo_Fecha_Premios::getMetaValue($this->post);
	}

	public static function rewriteSlug() {
		return array(
			'slug'	=> 	__('premios', TRANSDOMAIN),
			'with_front'	=> 	false,
			'hierarchical'	=> 	true
		);
	}
}
