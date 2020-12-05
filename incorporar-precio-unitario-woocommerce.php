<?php

/*******************************************************************************
 * 	
 *  RUTINA PARA AÑADIR AL PRECIO DE UN PRODUCTO DE WOOCOMMERCE UN TEXTO QUE 
 *  INDIQUE  EL COSTE POR VOLUMEN, PESO O UNITARIO.
 * =========================================================================
 *  Para que funcione se debe crear un campo personalizado en el producto de 
 *  woocommerce denominado precio-unidad-peso-volumen (si se modifica este 
 *  nombre recordar cambiarlo también en la función)
 *  Mediante la clase du-precio-unitario podemos modificar el aspecto por 
 *  código CSS, por ejemplo:
 *  .du-precio-unitario { font-size: .8rem; color: #aaa;}
 * 
 *******************************************************************************/

function du_filtro_woocommerce_precio( $price, $instance ) { 
	$du_precio_unidad_peso_volumen = get_post_meta( get_the_ID(), 'precio-unidad-peso-volumen', true );

	if ($du_precio_unidad_peso_volumen) 
		$price =  $price . '<br> <span class="du-precio-unitario"> (' . $du_precio_unidad_peso_volumen .')<span>' ;
	return $price; 
	}

add_filter( 'woocommerce_get_price_html', 'du_filtro_woocommerce_precio', 10, 2 );
?>