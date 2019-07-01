<?php

class Cltvo_Premios_Posts extends Cltvo_Ajax_Master
{

	/**
	 * metodo de respuesta del ayax
	 */
	static function privMethod(){

		$premios = new WP_Query(array(
			'paged' => $_POST['page'],
			'post_type' => array('cltvo_premios'),
			'posts_per_page' => $_POST['posts_per_page'],
		));

		if ( $premios->have_posts() ) : while ($premios->have_posts()) : $premios->the_post();  ?>
			<?php include get_template_directory()."/inc/_premios.php" ?>
		<?php endwhile; endif;

		$next_premios = new WP_QUERY(array(
			'paged'	=>	$_POST['page']+1,
			'post_type'	=>	array('cltvo_premios'),
			'posts_per_page'	=> $_POST['posts_per_page'],
		));

		if ( !$next_premios->have_posts() ) : ?>
			<div class="empty_premios_JS"></div>
		<?php endif;

		die;
    }

}
