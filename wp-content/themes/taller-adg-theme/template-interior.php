<?php 
/*
Template Name: Diseño Interior
*/

$id = specialPage(__('diseno-interior',TRANSDOMAIN));
$img = get_the_post_thumbnail_url($id);
makeArchive('cltvo_interior', 'Cltvo_Interior_Cats', $img); //el nombre del post type debe ir en minúsculas
