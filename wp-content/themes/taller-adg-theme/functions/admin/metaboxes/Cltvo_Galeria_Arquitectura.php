<?php

require_once 'masters/Cltvo_Galeria.php';

class Cltvo_Galeria_Arquitectura extends Cltvo_Galeria {
    protected $post_type = 'cltvo_architecture';

    public static function metaboxDisplayRule(){
    	return true;
    }
 }