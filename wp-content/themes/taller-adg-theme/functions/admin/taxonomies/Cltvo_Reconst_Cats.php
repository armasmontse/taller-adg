<?php

class Cltvo_Reconst_Cats extends Cltvo_Taxonomy_Master
{

    const nombre_plural = 'Categorías de reconstrucción';
    const nombre_singular = 'Categoría';
    const slug = 'tipo-de-reconstruccion';

// args
    //const hierarchical = true; // padres eh hijos
    //const show_ui = true; // muestra para administracion
    //const query_var = true;
    //const show_admin_column = true; // columna en el administrador del port
    protected static $postypes = array('cltvo_reconstruction');

// terms iniciales
    protected static $initialTerms = array(
    );

}