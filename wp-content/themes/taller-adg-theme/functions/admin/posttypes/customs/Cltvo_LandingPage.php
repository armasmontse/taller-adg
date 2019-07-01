<?php

class Cltvo_LandingPage extends Cltvo_PostTypeCustom_Master
{
	const show_in_menu = false;
    public function setMetas()
    {
    		$this->video = Cltvo_ProyectoDestacado_Video::getMetaValue($this->post);
    }  
}
