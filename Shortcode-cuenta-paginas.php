<?php
// SE CREA UN SHORTCODE QUE CUENTE EL NÚMERO DE PÁGINAS DE NUESTRA WEB

function du_numero_paginas($paginas) {
	$args = array(
	    'post_type' => 'page',
	    'post_status' => 'published',
	    'numberposts' => -1
	);
	
	return  (count( get_posts( $args) ));
}

add_shortcode( 'numero_de_paginas', 'du_numero_paginas' );
?>