<?php
/*
Template Name: Medios
*/

get_header();

// Traemos el id de la pagina.
$page_id = specialPage(__('medios',TRANSDOMAIN));

// Imagen destacada de la pagina
$img = get_the_post_thumbnail_url($page_id);

// Query para traer los posts
$query = new WP_Query( array(
    'post_type' => 'cltvo_medios',
    // 'posts_per_page' => 6
) );

?>
<div class="wrapper">
    <div class="grid__row">
        <div class="grid__container sm  medios__container">
            <div class="grid__container p0 medios_JS medios__container--both">
                <?php foreach ($query->posts as $post): ?>
                    <?php include get_template_directory()."/inc/_medios.php" ?>
                <?php endforeach ?>
                <?php
                $next_medios = new WP_Query(array(
                    'paged' => 2,
                    'post_type' => array('cltvo_medios'),
                    'posts_per_page' => 6,
                ));
                if ( !$next_medios->have_posts() ) : ?>
                    <div class="empty_medios_JS"></div>
                <?php endif;  ?>
            </div>
        </div>
    </div>
</div>
<!-- <div class="arrow__container">
    <div class="arrow__loader">
        <div class="loader_JS_medios arrow__loader--text">CARGANDO...</div>
        <div class="load_medios_JS arrow__loader--image">
            <img src="<?php // echoImg('arrow-down.png');?>">
        </div>
    </div>
</div> -->
<?php get_footer();
