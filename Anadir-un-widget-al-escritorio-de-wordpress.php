<?php
	// Añadir un widget personalizado en el escritorio de WordPress
	add_action('wp_dashboard_setup','du_anade_widget_personalizado_en_escritorio');
	function du_anade_widget_personalizado_en_escritorio() {
		add_meta_box (
			'du_widget_duando', // ID del widget
			'Duando', 			// Título
			'du_metabox_personalizado',		// Función a la que "engancharemos" el contenido
			'dashboard', 				// Mostrar en el escritorio WP
			'normal' 					// Posición en el escritorio
		);
		
		// Añadir el contenido al widget
		function du_metabox_personalizado() {
			
			printf('<p>Si necesitas ayuda para gestionar tu WordPress ponte en contacto con Duando 
					a trav&eacute;s de <a href="mailto:juanjsoto@duando.net">correo electr&oacute;nico</a> o 
					bien mediante un mensaje desde el <a href="https://duando.net/contacto">formulario 
					de contacto</a></p>');
			
		}
	}
?>