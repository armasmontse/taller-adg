<?php

class Cltvo_Link extends Cltvo_Metabox_Master
{

    /**
     * sobre escribiendo los args del master
     */
    protected $description_metabox = "Link a PDF";
	protected $post_type = array("cltvo_medios"); // postypes
	// protected $position = "normal"; // posicion
	// protected $prioridad = "default"; //prioridad
	// protected $ags = null; //args


    /**
    * define el metodo dónde se mostrara el meta
    * @return boolean si es verdadero el meta sera desplegado en el admin en caso constrario no
    */
    // public static function metaboxDisplayRule(){
    //     return true;
    // }


    /**
     * define el metodo que inicializa el valor del meta
     */
    public static function setMetaValue($meta){
        return isset($meta)&& !empty($meta) ? $meta : '';
    }


	/**
	 * Es la funcion que muestra el contenido del metabox
	 * @param object $object en principio es un objeto de WP_post
	 */
	public function CltvoDisplayMetabox( $object ){ ?>

        <label for="">Link</label>
        <input type="text" name=<?php echo $this->meta_key ?> value="<?php echo $this->meta_value ?>" style="width: 100%">


	<?php }



}
