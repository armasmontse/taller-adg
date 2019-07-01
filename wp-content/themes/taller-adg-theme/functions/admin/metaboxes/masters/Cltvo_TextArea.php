<?php

class Cltvo_TextArea extends Cltvo_Metabox_Master {

	/* Sobre escribiendo las opcciones del master */
	protected $description_metabox = 'Ingresa tu texto';
	protected $post_type = 'post';
	protected $prioridad = 'high';
	protected $max_width = '100%';


	/* Define el metodo que inicializa el valor del meta */
	public static function setMetaValue($meta){
		return $meta;
	}


	/*
	Es la funcion que muestra el contenido del metabox
	@param object $object en principio es un objeto de WP_post
	*/
	/*<input type="text"
	name="<?php echo  $this->meta_key; ?>"
	id="<?php echo  $this->meta_key; ?>"
	value="<?php echo $this->meta_value; ?>"  />*/

	public function CltvoDisplayMetabox($object) {
		?>
			<table class="" cellpadding="0" cellspacing="0" style="width: 100%">
				<tbody id="">
						<tr id="" class="">
							<td style="width: 100%; padding-left: 15px;">
								<textarea rows="3" cols="85" name="<?php echo  $this->meta_key; ?>" ><?php echo $this->meta_value; ?></textarea>
							</td>
						</tr>
				</tbody>
			</table>
	<?php
	}
}
