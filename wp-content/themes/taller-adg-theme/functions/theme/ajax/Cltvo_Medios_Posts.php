<?php

class Cltvo_Medios_Posts extends Cltvo_Ajax_Master
{

	/**
	 * metodo de respuesta del ayax
	 */
	static function privMethod(){
		$medios = new WP_Query(array(
			'paged' => $_POST['page'],
			'post_type' => array('cltvo_medios'),
			'posts_per_page' => $_POST['posts_per_page'],
		));

		if ( $medios->have_posts() ) : while ($medios->have_posts()) : $medios->the_post(); $medio = new Cltvo_Post ?>
			<?php include get_template_directory()."/inc/_medios.php" ?>
		<?php endwhile; endif;

		$next_medios = new WP_Query(array(
			'paged' => $_POST['page'] + 1,
			'post_type' => array('cltvo_medios'),
			'posts_per_page' => $_POST['posts_per_page'],
		));

		if ( !$next_medios->have_posts() ) : ?>
			<div class="empty_medios_JS"></div>
		<?php endif;

		die;

    }

}
