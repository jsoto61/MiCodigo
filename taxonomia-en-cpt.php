<?php

// Registrar una taxonomia temática
function du_formacion_tematica() {

	$labelsTematica = array(
		'name'                       => __( 'Temática de formación', 'du_formacion' ),
		'singular_name'              => __( 'Temática de formación', 'Taxonomy Singular Name', 'du_formacion' ),
		'all_items'                  => __( 'Todas las Temáticas de formación', 'du_formacion' ),
		'new_item_name'              => __( 'Nombre de la nueva Temática de formación', 'du_formacion' ),
		'add_new_item'               => __( 'Añadir Temática de formación', 'du_formacion' ),
		'edit_item'                  => __( 'Editar Temática de formación', 'du_formacion' ),
		'update_item'                => __( 'Actualizar Temática de formación', 'du_formacion' ),
		'view_item'                  => __( 'Ver categoría de Temática', 'du_formacion' ),
		'separate_items_with_commas' => __( 'Separar Temática de formación con comas', 'du_formacion' ),
		'add_or_remove_items'        => __( 'Añadir o quitar Temáticas de formación', 'du_formacion' ),
		'choose_from_most_used'      => __( 'Elige entre las Temáticas más usadas', 'du_formacion' ),
		'popular_items'              => __( 'Temáticas de formación populares', 'du_formacion' ),
		'search_items'               => __( 'Buscar Temáticas de formación', 'du_formacion' ),
		'not_found'                  => __( 'No encontrada', 'du_formacion' ),
		'no_terms'                   => __( 'No hay Temáticas de formación', 'du_formacion' ),
		'items_list'                 => __( 'Lista de Temáticas de formación', 'du_formacion' ),
		'items_list_navigation'      => __( 'Navegación por la lista de Temáticas de formación', 'du_formacion' ),
	);

	$argsTematica = array(
		'labels'                     => $labelsTematica,
		'hierarchical'               => false,
		'public'                     => true,
		'show_admin_column'          => true,
		'show_in_rest'               => true,
		'rewrite'  => array(
			'slug' => __( 'tematica-formacion', 'du_formacion_tematica' ),
		),

	);
	register_taxonomy( 'formacion_tematica', array( 'du_formacion' ), $argsTematica );
	
}
add_action( 'init', 'du_formacion_tematica', 0 );



?>