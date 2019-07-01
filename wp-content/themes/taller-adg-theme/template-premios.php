<?php
/*
Template Name: premios
*/
get_header();

// Traemos el id de la pagina.
$page_id = specialPage(__('premios',TRANSDOMAIN));

// Imagen destacada de la pagina
$img = get_the_post_thumbnail_url($page_id);

// Query para traer los posts
$query = new WP_Query( array(
    'post_type' => 'cltvo_premios',
    // 'posts_per_page' => 3
) );

?>
<div class="wrapper">
    <div class="grid__row premios__container-main">
        <div class="grid_container p0">
            <div class="premios_JS">
                <?php foreach ($query->posts as $post): ?>
                    <?php include get_template_directory()."/inc/_premios.php" ?>
                <?php endforeach ?>
                <?php
                $next_premios = new WP_QUERY(array(
                    'paged' =>  2,
                    'post_type' =>  array('cltvo_premios'),
                    'posts_per_page' => 3,
                ));
                if ( !$next_premios->have_posts() ) : ?>
                    <div class="empty_premios_JS"></div>
                <?php endif;  ?>
            </div>
        </div>
    </div>
</div>
<!-- <div class="arrow__container">
    <div class="arrow__loader">
        <div class="loader_JS_premios arrow__loader--text">CARGANDO...</div>
        <div class="load_premios_JS arrow__loader--image">
            <img src="<?php // echoImg('arrow-down.png');?>">
        </div>
    </div>
</div> -->
<?php get_footer(); ?>
