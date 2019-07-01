<?php

require_once 'masters/Cltvo_Galeria.php';

class Cltvo_Galeria_Reconstruccion extends Cltvo_Galeria {
    protected $post_type = 'cltvo_reconstruction';

    public static function metaboxDisplayRule(){
    	return true;
    }
 }