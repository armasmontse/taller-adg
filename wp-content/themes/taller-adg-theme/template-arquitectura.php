<?php 
/*
Template Name: Arquitectura
*/

$id = specialPage(__('arquitectura',TRANSDOMAIN));
$img = get_the_post_thumbnail_url($id);
makeArchive('cltvo_architecture', 'Cltvo_Arch_Cats', $img); //el nombre del post type debe ir en minúsculas
