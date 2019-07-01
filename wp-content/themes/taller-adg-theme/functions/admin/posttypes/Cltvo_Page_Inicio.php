<?php

class Cltvo_Page_Inicio extends Cltvo_Page
{
    public $slider;

    function __construct() {
        parent::__construct(
            get_post( $GLOBALS['special_pages_ids'][__('inicio',TRANSDOMAIN)])
        );
    }


    public function setMetas() {
        $this->slider = Cltvo_Inicio_Slider::getMetaValue($this->post);
    }

}
