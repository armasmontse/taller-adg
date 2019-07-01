<?php

class Cltvo_Interior extends Cltvo_PostTypeCustom_Master {

    const nombre_plural = 'Diseño Interior';
    const nombre_singular = 'Proyecto';
    const slug = 'diseno-interior';

    // Args
	const publico = true;
	const publicly_queryable = true;
    const has_archive = false;
    protected static $supports = array( 'title', 'editor', 'thumbnail');
	// const show_ui = true;
	// const show_in_menu = true;
	// const query_var = true;
	// const capability_type = 'post';
	// const hierarchical = false;
	// const menu_position = 6;

    public function setMetas() {
		$this->gallery = Cltvo_Galeria_Diseno_Interior::getImages($this->post);
		$this->date = Cltvo_Fecha_Diseno_Interior::getMetaValue($this->post);
		$this->location = Cltvo_Locacion_Diseno_Interior::getMetaValue($this->post);

        $this->colaboraciones =Cltvo_Colaboraciones_Diseno_Interior::getMetaValue($this->post);
		$this->fotografia =Cltvo_Fotografia_Diseno_Interior::getMetaValue($this->post);
		$this->premios =Cltvo_Premios_Diseno_Interior::getMetaValue($this->post);
        $this->status = Cltvo_Status_Diseno_Interior::getMetaValue($this->post);
    }

    public static function rewriteSlug() {
    	return array(
    		'slug'	=> 	__('diseno-interior', TRANSDOMAIN),
    		'with_front'	=> 	false,
    		'hierarchical'	=> 	true
    	);
    }
}
