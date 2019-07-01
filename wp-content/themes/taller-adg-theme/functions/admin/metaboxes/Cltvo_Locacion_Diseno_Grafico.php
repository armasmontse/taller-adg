<?php

require_once 'masters/Cltvo_SingleInput.php';

class Cltvo_Locacion_Diseno_Grafico extends Cltvo_SingleInput {
	protected $post_type = 'cltvo_graphic';
	protected $description_metabox = 'Lugar de Realización del Proyecto';

	public static function metaboxDisplayRule(){
		return true;
	}
}