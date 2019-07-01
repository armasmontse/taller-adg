<?php
	cltvo_superInc('/header.php', array('class' => 'home__body'));
	$home_id = specialPage('inicio');
	$img = get_the_post_thumbnail_url($home_id);
	$proyectos_destacados_query = array(
		'post_type' => array('cltvo_interior', 'cltvo_graphic', 'cltvo_architecture','cltvo_medios','cltvo_premios'),
		'posts_per_page' => -1,
		'meta_query'=> array(
			'relation'	=> 	'OR',
		        array(
		            'key' => 'Cltvo_ProyectoDestacado', // this key will change!
		            'compare' => 'like',
		            'value' => 'proyecto-destacado',
		        ),
		        array(
		            'key' => 'Cltvo_ProyectoDestacado_Video', // this key will change!
		            'compare' => 'like',
		            'value' => 'proyecto-destacado',
		        )
		),
	);

	$proyectos_destacados = array_map(function($post) {
		return new Cltvo_LandingPage($post);
	}, get_posts($proyectos_destacados_query) );

	$destacados_urls = array_map(function($post) {
		if ($post->thumbail_img) {
			if ($post->video['link'] !== '') {
				return array(
					'permalink'	=> get_permalink($post->ID),
					'url' 		=> $post->thumbail_img->srcs['full'],
					'video_url'	=> $post->video['link'],
					'video'		=> true
				);
			} else {
				return array(
					'permalink'	=> get_permalink($post->ID),
					'url' 		=> $post->thumbail_img->srcs['full'],
					'video'		=> false
				);
			}
		}
	}, $proyectos_destacados);
?>

	<?php
	$inicio = new Cltvo_Page_Inicio();
	if ($inicio->slider['images'] && $inicio->slider['links']) {
		foreach ($inicio->slider['images'] as $key => $image) {
			$slider[$key]['image'] = $image;
			$slider[$key]['link'] = $inicio->slider['links'][$key];
		}
	}
	?>

	<div class="home__slider home__slider_JS">
		<?php if (isset($slider) && is_array($slider) && count($slider) > 0): ?>

			<?php if (count($slider) == 1): ?>

				<?php $slide = reset($slider) ?>

				<div class="home__image">
					<a <?= $slide['link'] ? 'href="'.$slide['link'].'"' : '' ; ?>>
						<div
						class="home__image"
						style="background-image: url(<?= wp_get_attachment_url($slide['image'],'medium') ?>)">
						</div>
					</a>
				</div>

			<?php else: ?>

				<div class="swiper-container home__image single__slider_JS">

					<!-- Additional required wrapper -->
					<div class="swiper-wrapper home__image">

						<!-- Slides -->
						<?php foreach ($slider as $slide): ?>
							<?php //echo '<pre>',print_r($slide,true),'</pre>'; ?>
							<div class="swiper-slide">
								<a <?= $slide['link'] ? 'href="'.$slide['link'].'"' : '' ; ?>>
									<div
									class="home__image"
									style="background-image: url(<?= wp_get_attachment_url($slide['image'],'medium') ?>)">
									</div>
								</a>
							</div>
						<?php endforeach ?>
						<?php /* foreach ($destacados_urls as $slide): ?>
							<?php if ($slide['url'] != '') : ?>
								<div class="swiper-slide">
									<?php if ($slide['video'] == true): ?>
										<a href="<?= $slide['permalink'] ?>">
											<div class="home__image" style="background-image: url('<?= $slide['url'] ?>'); display: none;"></div>
											<video class="" src="<?= $slide['video_url'] ?>"></video>
										</a>
									<?php else : ?>
										<a href="<?= $slide['permalink'] ?>">
											<div class="home__image" style="background-image: url('<?= $slide['url'] ?>')"></div>
										</a>
									<?php endif ?>
								</div>
							<?php endif ?>
						<?php endforeach */ ?>
				    </div>

				    <!-- If we need navigation buttons -->
				    <div class="slider__nav_JS swiper-button-prev"><?php themeInc('/images/arrow-left.php');  ?></div>
				    <div class="slider__nav_JS  swiper-button-next"><?php themeInc('/images/arrow-right.php');  ?></div>

				</div>
			<?php endif; ?>

		<?php endif ?>
	</div>

<?php get_footer('contacto') ?>
