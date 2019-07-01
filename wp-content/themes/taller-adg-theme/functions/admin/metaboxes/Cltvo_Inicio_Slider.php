<?php

class Cltvo_Inicio_Slider extends Cltvo_Metabox_Master {

	/* Sobre escribiendo las opcciones del master */
	protected $description_metabox = 'Slider';
	protected $post_type = 'page';

	public static function metaboxDisplayRule(){
		return isSpecialPage( __('inicio',TRANSDOMAIN) );
	}

	/* Define el metodo que inicializa el valor del meta */
	public static function setMetaValue($meta_value){
		$meta_value = is_array($meta_value) ? $meta_value : array();
		$meta_value["links"] = isset($meta_value["links"]) ? $meta_value["links"] : array();
		$meta_value["images"] = isset($meta_value["images"]) ? $meta_value["images"] : array();

		foreach ($meta_value["images"] as $key => $image_id) {
			$meta_value["links"][$key] = isset($meta_value["links"][$key]) ? $meta_value["links"][$key] : "";
		}

		return $meta_value;
	}

	public static function getImages($object){
		return array_map(function($img_arr){
			return new Cltvo_Img($img_arr['imagen']);
		}, static::getMetaValue($object));
	}


	/* 
	Es la funcion que muestra el contenido del metabox
	@param object $object en principio es un objeto de WP_post
	*/
	public function CltvoDisplayMetabox($object) {
		?>
		<div id="table__galeria">

			<table class="table__galeria" cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<?php // foreach ($this->galeria as $item): ?>
						<!--
							<th class="th__galeria" align="left" style="padding-bottom:10px;">
								 <?php echo $item; ?> <span class="warn">*</span> 
							</th>
						-->
						<?php // endforeach; ?>
						<th class="th__galeria" style="padding-bottom:10px;">
							&nbsp;
						</th>
					</tr>
				</thead>
				<tbody id="tbody__imagen_JS">
					<?php $this->drawTemplate($this->meta_value); ?>
				</tbody>
			</table>
		</div>

	<?php }

	public function drawTemplate($meta_value) {

		$gallery_images = $meta_value["images"];
		array_walk($gallery_images, function(&$image,$key) use($meta_value) {
			$image =  [
				'url' =>  wp_get_attachment_url($image),
				'imagen'	=> $image,
				'link'	=> $meta_value["links"][$key]
			];
		});

		$gallery_images_json = json_encode($gallery_images);
		?>
			<tr>
				<td>
					<style>
						.gallery__image {
							width: 150px;
							height: 150px;
							margin-bottom: 5px;
							background-size: cover;
							background-position: center;
						}
						.gallery__image-container {
							border: 5px solid #fff;
							margin: 0 10px 10px 0;
							display: inline-block;
							box-shadow: 0 0 3px rgba(0,0,0,0.2);
							border-radius: 5px;
							margin-bottom: 15px;
						}
						.gallery__image-container button {
							width: 100%;
						}
					</style>
					<div id="<?php echo $this->meta_key ?>" class="cltvo_gallery_container_JS" data-gallery-var="<?php echo $this->meta_key ?>"></div>
					<button class="button add-image-to-gallery_JS" data-gallery-container-id="<?php echo $this->meta_key ?>">Agregar</button>
					<script>
						var <?php echo $this->meta_key ?> = JSON.parse('<?php echo  json_encode($gallery_images) ?>');
						initAlterGallery('<?php echo $this->meta_key ?>', <?php echo $this->meta_key ?>)
					</script>
				</td>
			</tr>
		<?php 
	}
}