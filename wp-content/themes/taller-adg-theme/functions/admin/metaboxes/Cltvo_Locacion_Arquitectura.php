<?php

require_once 'masters/Cltvo_SingleInput.php';

class Cltvo_Locacion_Arquitectura extends Cltvo_SingleInput {
	protected $post_type = 'cltvo_architecture';
	protected $description_metabox = 'Lugar de Realización del Proyecto';

	public static function metaboxDisplayRule(){
		return true;
	}
}