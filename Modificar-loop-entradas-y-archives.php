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


/*  MODIFICACIONES EN EL LOOP DE ENTRADAS                          */
/*  Mediante este script la colección de entradas que se presenta
 *  en la home, así como la de cualquier categoría, se muestran 
 *  en el siguiente orden: imagen destacada, título, contenido */
add_action( 'genesis_before_entry', 'cambiar_informacion_del_loop' );

function cambiar_informacion_del_loop() {

	if ( is_home() || is_category('1') || is_category('3') || is_category('4') || is_category('10') || is_category('11') ) {

	/* Eliminamos el título del post*/
    remove_action('genesis_entry_header','genesis_do_post_title');

    /*Eliminamos el contenido del post (texto)*/
    remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
    
    /*Añadimos el título debajo de la imagen*/
    add_action('genesis_entry_content','genesis_do_post_title');
    
    /*Añadimos el contenido del post*/
    add_action( 'genesis_entry_content', 'genesis_do_post_content' );

	}
}