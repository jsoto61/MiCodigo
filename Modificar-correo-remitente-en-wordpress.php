<?php
/*
Plugin Name: funcionalidades duando
Plugin URI: 
Description: 
Version: 
Author: Juan Jacinto Soto Sanchez
Author URI: https://duando.net
License: 
License URI: 
*/
// Cambiar la dirección de correo del remitente
	
add_filter('wp_mail_from', 'duando_nuevo_from');
	
function duando_nuevo_from($old) {
	
    return 'pedidos@nosfarma.com'; // Tiene que ser del dominio donde esté instalado WP
	
}

?>