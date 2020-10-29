<?php 
/*Plugin Name: CPT NOMBRE_CPT
Description: Este plugin registra un nuevo CPT llamado 'NOMBRE_CPT' con una taxonomía llamada Categoría.
Version: 1.0
Author: Duando
Author URI: https://duando.net
Text Domain: du-cpt-ID_CPT
License: GPLv2
*/

// Registrar el CPT
function du_cpt_ID_CPT() {

	$labels = array(
		'name'                  => _x( 'NOMBRE_CPT', 'du-cpt-ID_CPT' ),
		'singular_name'         => _x( 'NOMBRE_CPT', 'du-cpt-ID_CPT' ),
		'menu_name'             => __( 'NOMBRE_CPT', 'du-cpt-ID_CPT' ),
		'archives'              => __( 'NOMBRE_CPT', 'du-cpt-ID_CPT' ),
		'all_items'             => __( 'Todos los contenidos', 'du-cpt-ID_CPT' ),
		'add_new_item'          => __( 'Añadir nuevo trabajo', 'du-cpt-ID_CPT' ),
		'add_new'               => __( 'Añadir trabajo', 'du-cpt-ID_CPT' ),
		'new_item'              => __( 'Nuevo trabajo', 'du-cpt-ID_CPT' ),
		'edit_item'             => __( 'Editar trabajo', 'du-cpt-ID_CPT' ),
		'update_item'           => __( 'Actualizar trabajo', 'du-cpt-ID_CPT' ),
		'view_item'             => __( 'Ver trabajo', 'du-cpt-ID_CPT' ),
		'search_items'          => __( 'Buscar trabajo', 'du-cpt-ID_CPT' ),
		'not_found'             => __( 'No encontrado', 'du-cpt-ID_CPT' ),
		'not_found_in_trash'    => __( 'No se encuentra en la papelera', 'du-cpt-ID_CPT' ),
		'insert_into_item'      => __( 'Insertar', 'du-cpt-ID_CPT' ),
		'uploaded_to_this_item' => __( 'Añadido a este trabajo', 'du-cpt-ID_CPT' ),
		'items_list'            => __( 'Lista de contenidos', 'du-cpt-ID_CPT' ),
		'items_list_navigation' => __( 'Navegación por los contenidos', 'du-cpt-ID_CPT' ),
		'filter_items_list'     => __( 'Lista de contenidos filtrados', 'du-cpt-ID_CPT' ),
	);

	$args = array(
		'label'                 => __( 'ID_CPT', 'du-cpt-ID_CPT' ),
		'description'           => __( 'Los mejores contenidos realizados', 'du-cpt-ID_CPT' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'excerpt', 'thumbnail', 'comments', 'custom-fields','genesis-cpt-archives-settings', 'genesis-seo', 'genesis-scripts', 'genesis-layouts', 'genesis-rel-author','genesis-breadcrumbs-toggle', 'genesis-footer-widgets-toggle','genesis-title-toggle', 'genesis-singular-images' ),
		'taxonomies'            => array( 'ID_CPT_category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
        'show_in_rest'          => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'query_var'             => 'du-cpt-ID_CPT',
		'rewrite' => array(
			'slug' => __( 'ID_CPT', 'du-cpt-ID_CPT' ),
		),
		'capability_type'       => 'page',
	);
	register_post_type( 'ID_CPT', $args );

}
add_action( 'init', 'du_cpt_ID_CPT', 0 );


// Registrar una categoría
function du_ID_CPT_category() {

	$labelsCategory = array(
		'name'                       => __( 'Categorías ID_CPT', 'du-cpt-ID_CPT' ),
		'singular_name'              => __( 'Categoría ID_CPT', 'Taxonomy Singular Name', 'du-cpt-ID_CPT' ),
		'all_items'                  => __( 'Todas las categorías', 'du-cpt-ID_CPT' ),
		'new_item_name'              => __( 'Nombre de la nueva categoría', 'du-cpt-ID_CPT' ),
		'add_new_item'               => __( 'Añadir categoría', 'du-cpt-ID_CPT' ),
		'edit_item'                  => __( 'Editar categoría', 'du-cpt-ID_CPT' ),
		'update_item'                => __( 'Actualizar categoría', 'du-cpt-ID_CPT' ),
		'view_item'                  => __( 'Ver categoría', 'du-cpt-ID_CPT' ),
		'separate_items_with_commas' => __( 'Separar categorías con comas', 'du-cpt-ID_CPT' ),
		'add_or_remove_items'        => __( 'Añadir o quitar categorías', 'du-cpt-ID_CPT' ),
		'choose_from_most_used'      => __( 'Elige entre las más usadas', 'du-cpt-ID_CPT' ),
		'popular_items'              => __( 'Categorías populares', 'du-cpt-ID_CPT' ),
		'search_items'               => __( 'Buscar categorías', 'du-cpt-ID_CPT' ),
		'not_found'                  => __( 'No encontrada', 'du-cpt-ID_CPT' ),
		'no_terms'                   => __( 'No hay categorías', 'du-cpt-ID_CPT' ),
		'items_list'                 => __( 'Lista de categorías', 'du-cpt-ID_CPT' ),
		'items_list_navigation'      => __( 'Navegación por la lista de categorías', 'du-cpt-ID_CPT' ),
	);

	$argsCategory = array(
		'labels'                     => $labelsCategory,
		'hierarchical'               => true,
		'public'                     => true,
		'show_admin_column'          => true,
		'show_in_rest'               => true,
		'rewrite'  => array(
			'slug' => __( 'categoria-ID_CPT', 'du-cpt-ID_CPT' ),
		),

	);
	register_taxonomy( 'ID_CPT_category', array( 'ID_CPT' ), $argsCategory );
	
}
add_action( 'init', 'du_ID_CPT_category', 0 );

// Resetear los enlaces permanetes tras la activación/desactivación del plugin
register_deactivation_hook( __FILE__, 'flush_rewrite_rules' );
register_activation_hook( __FILE__, 'du_cpt_ID_CPT_rewrite_flush' );

function du_cpt_ID_CPT_rewrite_flush(){
  du_cpt_ID_CPT();
  flush_rewrite_rules();
}

?>