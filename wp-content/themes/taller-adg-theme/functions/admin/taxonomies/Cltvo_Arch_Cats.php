<?php

class Cltvo_Arch_Cats extends Cltvo_Taxonomy_Master
{

    const nombre_plural = 'Categorías de arquitectura';
    const nombre_singular = 'Categoría';
    const slug = 'tipo-de-arquitectura';

// args
    //const hierarchical = true; // padres eh hijos
    //const show_ui = true; // muestra para administracion
    //const query_var = true;
    //const show_admin_column = true; // columna en el administrador del port
    protected static $postypes = array('cltvo_architecture');

// terms iniciales
    protected static $initialTerms = array(
    );

}
