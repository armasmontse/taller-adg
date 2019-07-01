<?php

require_once 'masters/Cltvo_SingleCheckbox.php';

class Cltvo_ProyectoDestacado extends Cltvo_SingleCheckbox {
    protected $post_type = array('cltvo_interior', 'cltvo_graphic', 'cltvo_architecture');
    protected $description_metabox = 'Selecciona si quieres que la imagen destacada aparezca en Home';
    protected $label_text = 'Proyecto Destacado';
    protected $checkbox_value_name = "proyecto-destacado";

    public static function metaboxDisplayRule(){
    	return true;
    }
 }
