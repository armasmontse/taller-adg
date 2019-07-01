<?php 
/*
Template Name: Acerca
*/

get_header(); 

$taller = getPageFromSlug(__('acerca',TRANSDOMAIN));
$sections = queryChildrenBySlug(__('acerca',TRANSDOMAIN));

$sections = $sections !== null ? $sections : array();

$cool_sections = array_map(function($section) {
	return new Cltvo_Page($section);
}, $sections);

//procesamos la galería
$galleries = array_map(function($section) {
		return $section->gallery;
	}, $cool_sections);

$gallery = empty($galleries) ? array() : call_user_func_array('array_merge', $galleries);

$gallery_index = -1
// dd( $taller );
// dd( $sections );
// dd( $gallery );
// dd( $cool_sections );

?>
<div id="taller" class="taller">
	<div class="grid__row">
		<div class="page__image" style="background-image: url('<?php echo get_the_post_thumbnail_url($taller->ID);?>');"></div>
	</div>
</div>

<div class="grid__container taller__frases-container">
	<div class="taller__frases">
		<?php echo wpautop($taller->post_content) ?>
	</div>
</div>

<div class="grid__container">
	<div class="page__divisor"></div>
</div>

<!-- sections -->
<?php foreach ($cool_sections as $section): ?>
	<div class="grid__container taller__section-container">
		<div class="taller__section-ttl">
			<?php echo $section->post->post_title ?>
		</div>
		<div class="taller__section-p">
			<?php echo wpautop($section->post->post_content) ?>
		</div>
		<div class="grid__container p0">
			<?php //echo '<pre>',print_r($section,true),'</pre>'; ?>
			<?php foreach ($section->gallery as $image): ?>
				<?php $gallery_index += 1; ?>
				<div class="grid__col-1-2 taller__img-col">
					<img class="taller__section-img slider__img-selector_JS" src="<?php echo $image->srcs['talleradg'] ?>" alt="" data-index="<?php echo $gallery_index ?>">
				</div>
			<?php endforeach ?>
		</div>
	</div>
<?php endforeach ?>
<?php 
	cltvo_superInc('/inc/slider.php', ['gallery' => $gallery]);
	get_footer(); 
?>
