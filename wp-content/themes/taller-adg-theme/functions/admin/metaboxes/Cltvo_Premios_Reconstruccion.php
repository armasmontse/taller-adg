<?php

require_once 'masters/Cltvo_TextArea.php';

class Cltvo_Premios_Reconstruccion extends Cltvo_TextArea {

    protected $post_type = "cltvo_reconstruction"; // postypes
    protected $description_metabox = "Premios:";

    /**
    * define el metodo dónde se mostrara el meta
    * @return boolean si es verdadero el meta sera desplegado en el admin en caso constrario no
    */
    public static function metaboxDisplayRule(){
        return true;
    }

}