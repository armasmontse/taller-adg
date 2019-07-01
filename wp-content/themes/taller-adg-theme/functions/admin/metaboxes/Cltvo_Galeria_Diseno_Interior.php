<?php

require_once 'masters/Cltvo_Galeria.php';

class Cltvo_Galeria_Diseno_Interior extends Cltvo_Galeria {
    protected $post_type = 'cltvo_interior';

    public static function metaboxDisplayRule(){
    	return true;
    }
 }