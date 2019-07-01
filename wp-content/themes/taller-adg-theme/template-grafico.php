<?php 
/*
Template Name: Diseño Gráfico
*/

$id = specialPage(__('diseno-grafico',TRANSDOMAIN));
$img = get_the_post_thumbnail_url($id);
makeArchive('cltvo_graphic', 'Cltvo_Graphic_Cats', $img); //el nombre del post type debe ir en minúsculas
