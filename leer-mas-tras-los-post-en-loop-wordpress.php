<?php
/**
     * Añadir puntos suspensivos al extracto and mostrar un botón "Leer Más" .
     * 
     * @param type $text
     * @return string
     */
	function custom_excerpt($text) {
		$text= substr_replace($text,"...",strpos($text, "</p>"),0);
		$excerpt = $text . '<a href="' . get_permalink() . '"><button class="read-more-btn" type="button" value="read_more">Leer más...</button></a>';
		return $excerpt;
		}
	
        add_filter('the_excerpt', 'custom_excerpt');
        
?>