<?php

require_once 'masters/Cltvo_Galeria.php';

class Cltvo_Galeria_Taller extends Cltvo_Galeria {
	protected $post_type = 'page';

	public static function metaboxDisplayRule() {
		$post_id = isset($_GET['post']) ? $_GET['post'] : -1;
		return isChildOfPage( specialPage(__('acerca',TRANSDOMAIN)), $post_id);
	}
}