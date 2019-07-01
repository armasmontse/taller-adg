<?php

class Cltvo_SocialNet extends Cltvo_Metabox_Master {

	/** Sobre escribiendo las opcciones del master */
	protected $description_metabox = 'Redes Sociales';
	protected $post_type = 'page';

	/**
	 * proiedades de esta clase
	 */
	protected static $redesConUrl = [
		'facebook' 	=> 'Facebook',
		'tumblr' 	=> 'Tumblr',
		'instagram' => 'Instagram',
	];

	protected static $redesSinUrl = [
		'mail' 		=> 'Email',
		'telefono' 	=> 'Teléfono',
		'direccion' => 'Dirección'
	];




  /**
	 * define el metodo donde se mostrara el meta
	 * @return boolean si es verdadero el meta sera desplegado en el admin en caso constrario no
	 */
	public static function metaboxDisplayRule(){
		return isSpecialPage( __('contacto',TRANSDOMAIN) );
	}


	/**
	 * define el metodo que inicializa el valor del meta
	 */
	public static function setMetaValue($meta){

		$meta = is_array($meta) ? $meta : [] ;

		foreach (self::$redesSinUrl as $red => $imagen) {
			$meta[$red] = isset($meta[$red]) ? $meta[$red] :  "";
		}

		foreach (self::$redesConUrl as $red => $imagen) {
			$meta[$red] = isset($meta[$red]) ? $meta[$red] :  array('cuenta'=> '', 'link'=> '');
		}

		return $meta;
	}


	/**
	 * Es la funcion que muestra el contenido del metabox
	 * @param object $object en principio es un objeto de WP_post
	 */
	public function CltvoDisplayMetabox( $object ){

		?>

				<table style="width: 100%" cellpadding="5">
					<tr>
						<td >
							<b><?php echo __('Teléfono',TRANSDOMAIN); ?></b>
						</td>
						<td>
							<input
							type="text"
							placeholder="+52 (55) 1234-5678"
							name="<?php echo $this->meta_key; ?>[telefono]"
							id="<?php echo $this->meta_key; ?>[telefono]"
							value="<?php echo $this->meta_value['telefono']; ?>"
							style="width: 100%;" />
						</td>
					</tr>
					<tr>
						<td>
							<b><?php echo __('Correo',TRANSDOMAIN); ?></b>
						</td>
						<td>
							<input
							type="email"
							placeholder="ejemplo@ejemplo.com"
							name="<?php echo $this->meta_key; ?>[mail]"
							id="<?php echo $this->meta_key; ?>[mail]"
							value="<?php echo $this->meta_value['mail']; ?>"
							style="width: 100%;" />
						</td>
					</tr>
					<tr>
						<td style="vertical-align: top">
							<b><?php echo __('Dirección',TRANSDOMAIN); ?></b>
						</td>
						<td>
							<input type="text" placeholder="<?php echo __('Dirección linea 1',TRANSDOMAIN); ?>" name="<?php echo  $this->meta_key; ?>[direccion][0]" id="<?php echo  $this->meta_key; ?>[direccion][0]" value="<?php echo isset($this->meta_value['direccion'][0]) ? $this->meta_value['direccion'][0] : ''; ?>" style="width: 100%" />
							<input type="text" placeholder="<?php echo __('Dirección linea 2',TRANSDOMAIN); ?>" name="<?php echo  $this->meta_key; ?>[direccion][1]" id="<?php echo  $this->meta_key; ?>[direccion][1]" value="<?php echo isset($this->meta_value['direccion'][1]) ?  $this->meta_value['direccion'][1] : ''; ?>" style="width: 100%" />
						</td>
					</tr>
					<tr>
						<td style="vertical-align: top; width: 230px;">
							<b><?php echo __('Latitud y Longitud',TRANSDOMAIN); ?></b>
							<br>
							<small style="font-size: 10px; line-height: 1;"><?php echo __('Para el mapa: Si por alguna razón la dirección no posiciona correctamente el marcador en el mapa, será necesario ingresar las coordenadas exactas del lugar, de lo contrario no es necesario ingresar nada en estos campos')?></small>
						</td>
						<td>
							<input type="number" step="0.00000000000001" placeholder="<?php echo __('Latitud',TRANSDOMAIN); ?>" name="<?php echo  $this->meta_key; ?>[latitude]" id="<?php echo  $this->meta_key; ?>[latitude]" value="<?php echo isset($this->meta_value['latitude']) ? $this->meta_value['latitude'] : ''; ?>" style="width: 100%" />
							<input type="number" step="0.00000000000001" placeholder="<?php echo __('Longitud',TRANSDOMAIN); ?>" name="<?php echo  $this->meta_key; ?>[longitude]" id="<?php echo  $this->meta_key; ?>[longitude]" value="<?php echo isset($this->meta_value['longitude']) ?  $this->meta_value['longitude'] : ''; ?>" style="width: 100%" />
						</td>
					</tr>
			  <?php foreach (self::$redesConUrl as $slug => $nombre): ?>
						<tr>
							<td>
								<b><?php echo $nombre; ?></b>
							</td>
							<td>
								<?php $this->social_network_link($slug,$nombre); ?>
							</td>
						</tr>

					<?php endforeach; ?>

				</table>
				<?php
	}



	/**
	 * Imprime los input de las redes sociales
	 *
	 * Parametros:
	 *
	 * @param string $slug slug de la red social
	 * @param array $meta array con los valores link y cuenta
	 */

	private function social_network_link($slug,$nombre) {
		 ?>
			<p style="display: none;">
				<label for="<?php echo $this->meta_key."_".$slug; ?>_cuenta">
					<b><?php echo __('Cuenta:',TRANSDOMAIN); ?></b>
				</label>
				<br>
				<input type="text"
					  placeholder="<?= $nombre ?>"
					  name="<?php echo $this->meta_key."[".$slug."][cuenta]"; ?>"
					  id="<?php echo $this->meta_key."_".$slug; ?>_cuenta"
					  value="<?php echo $this->meta_value[$slug]['cuenta']; ?>"
					  style="width: 100%;" />
			</p>
			<p>
				<!-- <label for="<?php echo $this->meta_key."_".$slug; ?>_link" ><?php echo __('Link:',TRANSDOMAIN); ?></label><br> -->
				<input type="url"
						placeholder="http://"
						name="<?php echo $this->meta_key."[".$slug."][link]"; ?>"
						id="<?php echo $this->meta_key."_".$slug; ?>_link"
						value="<?php echo $this->meta_value[$slug]['link']; ?>"
						style="width: 100%;" />
			</p>
		 <?php
	}

}
