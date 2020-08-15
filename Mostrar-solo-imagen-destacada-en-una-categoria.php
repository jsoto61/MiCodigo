<?php
    /*MODIFICACIONES EN EL LOOP DE ENTRADAS SEGÚN SUS CATEGORÍAS
    En el ejemplo se modifican las categorías iD=72 e iD=176*/

	add_action( 'genesis_before_entry', 'du_modificar_orden_informacion_categorias' );
    
    function du_modificar_orden_informacion_categorias() {
		if (is_category(72) || 
			is_category(176)) {
	    /* Eliminamos el título del post*/
	    remove_action('genesis_entry_header','genesis_do_post_title');
        /*Eliminamos el contenido del post (texto)*/
        remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
	    }
    }

    ?>