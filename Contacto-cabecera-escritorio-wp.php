<?php


/*AÑADE CONTACTO DE DUANDO EN LA CABECERA DEL ESCRITORIO*/

	function duando(){
		 printf ( '<br><span>Este sitio web ha sido desarrollado por 
		 <a href="https://duando.net">Duando</a></span>
		 - <span> para cualquier problema contactar a través <a href:"mailto:juanjsoto@duando.net>juanjsoto@duando.net</a> 
		 o WhatsApp al +34 697 901 931</span>' );
	}

    add_action( 'admin_notices', 'Duando' );
    
?>