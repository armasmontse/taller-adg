<?php 

function makeArchive($post_type_name, $taxonomy_name, $featured_img) {
	get_header();

	$query = new WP_Query( array( 
		'post_type' => $post_type_name,
		'posts_per_page' => -1
	) );

	$taxs = get_terms(array('taxonomy' => $taxonomy_name));


	$terms = array_map(function($tax) {
		return '<span class="architecture__filter taxonomy__filter_JS" data-filter="'.$tax->term_id.'">'.$tax->name.'</span>';
	}, $taxs);

	?>
	<div id="architecture" class="architecture">
		<div class="grid__row">
			<div class="page__image" style="background-image: url('<?php echo $featured_img?>');"></div>
		</div>

<!-- 		<div class="grid__container architecture__filter-container sm s-around">
			<?php foreach ($terms as $term): ?>
				<?php echo $term ?>
			<?php endforeach ?>
		</div>
 -->
		<div class="grid__container lg architecture__container--main">
			<?php foreach ($query->posts as $post): ?>
				<?php 
					 $queried_terms = is_array(get_the_terms($post->ID, $taxonomy_name)) ? get_the_terms($post->ID, $taxonomy_name) : array();
					$post_terms = array_map(function($term){
							return array($term->term_id, $term->name);
						}, $queried_terms);
					$term_names = join(
						"<span class='architecture__data architecture__data--book'> / </span>",
						array_map(function($term) {
							return "<span class='architecture__data architecture__data--book'>$term[1]</span>";
						}, $post_terms)
					);
				?>	 	
				<div class="grid__col-1-3 architecture__col-1-3 architecture-col-1-3_JS item_taxonomies_JS" data-terms="<?php echo join('-', array_map(function($term) {
							return $term[0];//el id
						}, $post_terms)) ?>">
					<a href="<?php echo get_post_permalink($post->ID) ?>">
						<div class="grid__box architecture__box">
							<img src="<?php echo get_the_post_thumbnail_url($post->ID, 'talleradg')?>" alt="">
							<div class="architecture__data-container architecture__data-container_JS">
								<span class="architecture__data ttu"><?php echo $post->post_title ?></span>
								<?php if (count($post_terms) > 0): ?>
									<span class="architecture__data--divisor">|</span>
								<?php endif ?>

								<!-- terms -->
								<span class="architecture__data">
									<?php echo $term_names;  ?>	
								</span>
							</div>
						</div>
					</a>
				</div>
			<?php endforeach ?>
		</div>
	</div>
	
	<?php get_footer();
}
