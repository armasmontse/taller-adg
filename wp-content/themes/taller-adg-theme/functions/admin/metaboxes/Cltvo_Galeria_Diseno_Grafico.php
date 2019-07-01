<?php

require_once 'masters/Cltvo_Galeria.php';

class Cltvo_Galeria_Diseno_Grafico extends Cltvo_Galeria {
    protected $post_type = 'cltvo_graphic';

    public static function metaboxDisplayRule(){
    	return true;
    }
 }