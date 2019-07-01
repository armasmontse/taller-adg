<?php 
/*
Template Name: Recostruccion
*/

$id = specialPage(__('recostruccion',TRANSDOMAIN));
$img = get_the_post_thumbnail_url($id);
makeArchive('cltvo_reconstruction', 'Cltvo_Reconst_Cats', $img); //el nombre del post type debe ir en minúsculas