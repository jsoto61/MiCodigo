<?php
//--------------------------ELIMINAR EL TÍTULO DE ALGUNAS PÁGINAS
//  Cuando son varias el array sería array('inicio','contacto',...así todas)

add_action( 'get_header', 'eliminar_titulos_de_pagina' );
function eliminar_titulos_de_pagina() {
	if ( is_page(array('inicio') ) ) {
	remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
	 }
}
?>