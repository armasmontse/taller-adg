<?php

require_once 'masters/Cltvo_SingleInput.php';

class Cltvo_Fecha_Reconstruccion extends Cltvo_SingleInput {
	protected $post_type = 'cltvo_reconstruction';
	protected $description_metabox = 'Fecha de Realización del Proyecto';
	protected $max_width = '200px';


	public static function metaboxDisplayRule(){
		return true;
	}

	
 }