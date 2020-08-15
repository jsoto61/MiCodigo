<?php

/* AÑADE UNA BARRA CTA SOBRE EL MENÚ DE GENESIS */

add_action('genesis_before_header', 'du_cabecera_sobre_menu');
	function du_cabecera_sobre_menu() {
		echo '<div class="du-cabecera-sobre-menu">';
		echo '<span> CTA - ¡Haz tu reserva!</span>';
		echo '</div>';
}
?>