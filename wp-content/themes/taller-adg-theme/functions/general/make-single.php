<?php

function makeSingle($cool_post, $taxonomy) {
	//categories
	$terms = getTermNames($cool_post->terms[$taxonomy]);

	//images
	$main_img = $cool_post->thumbail_img ? $cool_post->thumbail_img->srcs['full'] : '';
	$gallery = count($cool_post->gallery) > 0 ? $cool_post->gallery : [];

	$next_post = get_adjacent_post( false,  '', false);
	$next_post_link = $next_post ? get_permalink($next_post->ID) : '';
	$previous_post = get_adjacent_post( false,  '', true);
	$previous_post_link = $previous_post ? get_permalink($previous_post->ID) : '' ;

	?>
	<div id="single" class="single">
		<div class="grid__row">
			<div class="page__image" style="background-image: url('<?php echo $main_img?>');"></div>
		</div>
	</div>

	<div class="grid__container sm">
			<div class="single__arrow-container">
				<?php if ($next_post_link != ''): ?>
					<a href="<?php echo $next_post_link ?>">
						<div class="single__arrow single_arrow--left"><?php themeInc('/images/arrow-left.php')?></div>
					</a>
				<?php else : ?>
					<div></div>
				<?php endif ?>

				<?php if ($previous_post_link != ''): ?>
					<a href="<?php echo $previous_post_link ?>">
						<div class="single__arrow single_arrow--right"><?php themeInc('/images/arrow-right.php')?></div>
					</a>
				<?php else : ?>
					<div></div>
				<?php endif ?>
			</div>
		</div>
	</div>

	<div class="grid__container sm single__data-container">
		<!-- subcontainer 1 -->
		<div class="single__data-subcontainer">
			<?php if (!empty($cool_post->post->post_title) or (trim($cool_post->post->post_title) != "")): ?>
				<div class=" first__card single__data single__data--name pl0">
					<p><?php echo __('Nombre del Proyecto', TRANSDOMAIN) ?></p>
					<h1><?php echo $cool_post->post->post_title ?></h1>

					<?php if ((!empty($terms) or (trim($terms) != "")) or (!empty($cool_post->location) or (trim($cool_post->location) != ""))): ?>
						<div class="single__vertical-divisor"></div>
					<?php endif ?>

				</div>
			<?php endif ?>

			<?php if (!empty($terms) or (trim($terms) != "")): ?>
				<div class="single__data single__data--type">
					<p><?php echo __('Tipo', TRANSDOMAIN) ?></p>
					 <h2><?php echo $terms ?></h2>
					<?php if (!empty($cool_post->location) or (trim($cool_post->location) != "")): ?>
					 	<div class="single__vertical-divisor"></div>
					<?php endif ?>
				</div>
			<?php endif ?>

			<?php if (!empty($cool_post->location) or (trim($cool_post->location) != "")): ?>
				<div class="single__data single__data--location">
					<p><?php echo __('Locación', TRANSDOMAIN) ?></p>
					<h2><?php echo $cool_post->location ?></h2>
					<!-- <div class="single__vertical-divisor"></div> -->
				</div>
			<?php endif ?>
		</div>
		<!-- subcontainer 2 -->
	</div>

	<?php if( !empty($cool_post->colaboraciones) || !empty($cool_post->premios) ):?>
	<div class="grid__container sm"><div class="page__divisor"></div></div>
	<div class="grid__container sm single__data-container single__data-container--second">
		<div class="single__data-subcontainer">
			<?php if (!empty($cool_post->status) or (trim($cool_post->status) != "")): ?>
				<div class="first__card single__data single__data--date">
					<p><?php echo __('Estatus', TRANSDOMAIN) ?></p>
					<h2><?php echo $cool_post->status ?></h2>
					<?php if ((!empty($cool_post->date) or (trim($cool_post->date) != "")) or (!empty($cool_post->fotografia) or (trim($cool_post->fotografia) != ""))) : ?>
						<div class="single__vertical-divisor"></div>
					<?php endif ?>
				</div>
			<?php endif ?>

			<?php if (!empty($cool_post->date) or (trim($cool_post->date) != "")): ?>
				<div class="single__data single__data--date">
					<p><?php echo __('Fecha', TRANSDOMAIN) ?></p>
					<h2><?php echo $cool_post->date ?></h2>
					<?php if (!empty($cool_post->fotografia) or (trim($cool_post->fotografia) != "")): ?>
						<div class="single__vertical-divisor"></div>
					<?php endif ?>
				</div>
			<?php endif ?>

			<?php if (!empty($cool_post->fotografia) or (trim($cool_post->fotografia) != "")): ?>
				<div class="single__data single__data--date">
					<p><?php echo __('Fotografía', TRANSDOMAIN) ?></p>
					<h2><?php echo $cool_post->fotografia ?></h2>
					<!-- <div class="single__vertical-divisor"></div> -->
				</div>
			<?php endif ?>
		</div>
	</div>
	<?php endif;?>

<!-- bloque tres -->
	<?php if( !empty($cool_post->colaboraciones) || !empty($cool_post->premios) ):?>
	<div class="grid__container sm"><div class="page__divisor"></div></div>
	<div class="grid__container sm single__data-container single__data-container--second">
		<div class="single__data-subcontainer">
			<?php if (!empty($cool_post->colaboraciones) or (trim($cool_post->colaboraciones) != "")): ?>
			<div class="two-elements__row first__card single__data single__data--name pl0 single__data--second">
				<p><?php _e('Colaboraciones', TRANSDOMAIN) ?></p>
				<h1><?php echo $cool_post->colaboraciones ?></h1>
				<?php if ((trim($cool_post->premios) != "")): ?>
					<div class="single__vertical-divisor"></div>
				<?php endif ?>
			</div>
			<!-- <div class="line__2elements--container">
				<div class="line__2elements"></div>
			</div> -->
			<?php endif ?>
			<?php if ((trim($cool_post->premios) != "")): ?>
			<div class="two-elements__row single__data single__data--type single__data--second">
				<p><?php _e('Premios', TRANSDOMAIN) ?></p>
				<div class="single__premios--text">
					<h1><?php echo wpautop($cool_post->premios) ?></h1>
				</div>
			</div>
			<?php endif ?>
		</div>
	</div>
	<?php endif;?>

	<!-- conceptoo-->

	<div class="grid__container sm"><div class="page__divisor"></div></div>

	<div class="grid__container sm">
		<?php if ((trim($cool_post->post->post_content) != "")): ?>
			<div>
				<div class="single__ttl"><?php echo __('Concepto', TRANSDOMAIN) ?></div>
				<div class="single__p">
					<?php echo wpautop($cool_post->post->post_content) ?>
				</div>
			</div>
		<?php endif ?>
	</div>

	<?php if (count($gallery) > 0) : ?>
	<div class="masonry__container sm">
		<div class="masonry">
			<div class="masonry-sizer"></div>
			<?php $i = 0 ?>
			<?php foreach ($gallery as $image): ?>
				<?php if ($image->srcs['talleradg']) : ?>
					<div class="masonry-item">
						<img class="single__img slider__img-selector_JS" data-index="<?php echo $i ?>" src="<?php echo $image->srcs['full'] ?>" alt="">
					</div>
				<?php $i++; endif; ?>
			<?php endforeach ?>
			<?php unset($i) ?>
		</div>
	</div>



	<!-- Slider main container -->
	<?php cltvo_superInc('/inc/slider.php', ['gallery' => $gallery]); ?>

	<?php endif; ?>

	<?php get_footer('single');
}
