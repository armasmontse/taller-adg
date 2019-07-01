<?php

require_once 'masters/Cltvo_SingleInput.php';

class Cltvo_Colaboraciones_Diseno_Grafico extends Cltvo_SingleInput {

    protected $post_type = "cltvo_graphic"; // postypes
    protected $description_metabox = 'Colaboraciones: ';


    /**
    * define el metodo dónde se mostrara el meta
    * @return boolean si es verdadero el meta sera desplegado en el admin en caso constrario no
    */
    public static function metaboxDisplayRule(){
        return true;
    }

}
