<?php

// CREACIÓN DE UN SHORTCODE QUE CUENTE EL NÚMERO DE ENTRADAS DE NUESTRA WEB

function du_numero_entradas($entradas) {
	$args = array(
	    'post_type' => 'post',
	    'post_status' => 'published',
	    'numberposts' => -1
	);
	
	return  (count( get_posts( $args) ));
}

add_shortcode( 'numero_de_entradas', 'du_numero_entradas' );

?>