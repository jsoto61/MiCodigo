<?php
/* 
 * ELIMINAR CIERTAS PÁGINAS DE LOS RESULTADOS DE BÚSQUEDA DEL BUSCADOR DE
 * WORDPRESS
 */
add_action( 'pre_get_posts', 'du_exclude_specific_pages' );
function du_exclude_specific_pages($query)
{
	if ( $query->is_search() && $query->is_main_query() )
		$query->set( 'post__not_in', array( 1131,2,431 ) );
}

?>