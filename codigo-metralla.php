<?php
/*
Plugin Name: Duando
Plugin URI: 
Description: 
Version: 
Author: 
Author URI: 
License: 
License URI: 
*/

/**
* Añadir puntos suspensivos al extracto and mostrar un botón "Leer Más" .
* 
* @param type $text
* @return string
*/
    function custom_excerpt($text) {
    $text= substr_replace($text,"",strpos($text, "</p>"),0);
    $excerpt = $text . '<a href="' . get_permalink() . '">
	<button class="read-more-btn" type="button" value="read_more">Acceder al contenido</button></a>';
    return $excerpt;
    }

    add_filter('the_excerpt', 'custom_excerpt');

add_action( 'pre_get_posts', 'wpsf_mostrar_solo_las_entradas' );
function wpsf_mostrar_solo_las_entradas($query)
{
	if ( $query->is_search && $query->is_main_query() )
		$query->set( 'post_type', 'post' );
}


					/*ASESORIA BRITO*/
	/*
                    ELIMINA OPCIONES DEL MENU DE LA BARRA DE ADMINISTRACIÓN
*/

add_action( 'wp_before_admin_bar_render', 'eliminar_menus_admin_bar' );
	
function eliminar_menus_admin_bar() {

   global $wp_admin_bar;
//	   $wp_admin_bar->remove_menu('wp-logo');          // Elimina el logo de WordPress
//	   $wp_admin_bar->remove_menu('about');            // Elimina el enlace 'Acerca de WordPress'
//	   $wp_admin_bar->remove_menu('wporg');            // Elimina el enlace WordPress.org
//		$wp_admin_bar->remove_menu('documentation');    // Elimina el enlace 'Documentación'
//		$wp_admin_bar->remove_menu('support-forums');   // Elimina el enlace 'Foros de soporte'
//		$wp_admin_bar->remove_menu('feedback');         // Elimina el enlace 'Sugerencias'
//		$wp_admin_bar->remove_menu('site-name');        // Elimina el menú con el nombre del sitio
//		$wp_admin_bar->remove_menu('view-site');        // Elimina el enlace 'Visitar sitio'
//		$wp_admin_bar->remove_menu('updates');          // Elimina el enlace a Actualizaciones
//		$wp_admin_bar->remove_menu('comments');         // Elimina el enlace a Comentarios
//		$wp_admin_bar->remove_menu('new-content');      // Elimina el enlace Nuevo contenido

	// Eliminar el menú de usuario (de la derecha) y el campo de búsqueda
//		$wp_admin_bar->remove_menu('top-secondary');
//		$wp_admin_bar->remove_menu('search');

	//Eliminar cada subelemento del menú de usuario (de la derecha)
//		$wp_admin_bar->remove_menu('user-actions');
//		$wp_admin_bar->remove_menu('user-info');
//		$wp_admin_bar->remove_menu('edit-profile');
//		$wp_admin_bar->remove_menu('logout');

}