<?php

/*Incorporación de las fuentes de awesome*/
	add_action( 'wp_enqueue_scripts', 'carga_fa' );
	function carga_fa() {
	wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css' );
	}

?>