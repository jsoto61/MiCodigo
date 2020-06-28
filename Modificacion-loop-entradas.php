<?php



/*MODIFICACIONES EN EL LOOP DE ENTRADAS*/

	add_action( 'genesis_before_entry', 'cambiar_informacion_del_loop' );
    
    function cambiar_informacion_del_loop() {
		if ( is_home() ) {
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

    
?>