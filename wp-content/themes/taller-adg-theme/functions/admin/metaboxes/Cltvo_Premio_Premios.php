<?php

require_once 'masters/Cltvo_SingleInput.php';

class Cltvo_Premio_Premios extends Cltvo_SingleInput {

    protected $post_type = "cltvo_premios"; // postypes
    protected $description_metabox = 'Premio: ';


    /**
     * define el metodo que inicializa el valor del meta
     */
    public static function setMetaValue($meta){
        return isset($meta)&& !empty($meta) ? $meta : '';
    }

    public function CltvoDisplayMetabox( $object ){ ?>

        <label for="">Premio</label>
        <input type="text" name=<?php echo $this->meta_key ?> value="<?php echo $this->meta_value ?>" style="width: 100%">
    <?php }



}
