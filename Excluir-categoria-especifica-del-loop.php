<?php

/* EXCLUIR ALGUNAS CATEGORÍAS DEL LOOP DE WORDPRESS 
 *  $wp_query->set( 'cat', '-X,-Y,-Z' );
 * Sustituir X,Y,Z por los corresponientes ID de las categorías a excluir
 * */

add_action( 'pre_get_posts', 'excluir_categoria_especifica' );
function excluir_categoria_especifica( $wp_query ) {   
    if( !is_admin() && is_main_query() && is_home() ) {
        $wp_query->set( 'cat', '-10,-11' );
    }
}

?>