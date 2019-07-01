<?php

require_once 'masters/Cltvo_Links.php';

class Cltvo_ProyectoDestacado_Video extends Cltvo_Links {
	protected $post_type = array('cltvo_interior', 'cltvo_graphic', 'cltvo_architecture');
	protected $description_metabox = 'Agrega un link a un video para que aparezca en el home';

	public static function metaboxDisplayRule(){
		return true;
	}
}