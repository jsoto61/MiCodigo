<?php
/**
 * Duando.
 * @link    https://duando.net

CSS NECESARIO
.du-imagen-hero-blog {
	background-image: url("/wp-content/...url de la imagen");
	background-color:transparent;
	max-width: 2200px;
	height: 440px;
	background-size: cover;
	background-position:bottom ;
	margin: auto;	
}

 */

/*Inserta la imagen de cabecera para el blog*/
if (is_home) {
add_action('genesis_after_header','du_imagen_hero');
    function du_imagen_hero() {
		echo '<div class="du-imagen-hero-blog"></div>';
}
}
?>
