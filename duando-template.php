<?php
/*
Plugin Name: Duando
Plugin URI: https://duando.net
Description: Plugin de funcionalidades específicas de este proyecto web
Version: 1.1
Author: Juan Jacinto Soto Sánchez
Author URI: https://duando.net
License: GPL
License URI: 
*/

/* 
    WIDGET DE ESCRITORIO CON DATOS DE INTERÉS PARA CLIENTE
*/
    //Añade un widget personalizado en el escritorio de WordPress
	add_action('wp_dashboard_setup','du_anade_widget_personalizado_en_escritorio');
	function du_anade_widget_personalizado_en_escritorio() {
		add_meta_box (
			'du_widget_duando',             // ID del widget
			'Duando', 			            // Título
			'du_metabox_personalizado',		// Función a la que "engancharemos" el contenido
			'dashboard', 				    // Mostrar en el escritorio WP
			'normal' 					    // Posición en el escritorio
		);
		
		// Añadir el contenido al widget
		function du_metabox_personalizado() {
			
			printf('<p>Si necesitas ayuda para gestionar tu WordPress ponte en contacto con Duando 
					a trav&eacute;s de <a href="mailto:juanjsoto@duando.net">correo electr&oacute;nico</a> o 
					bien mediante un mensaje desde el <a href="https://duando.net/contacto">formulario 
					de contacto</a></p>');
			
		}
	}


/*
    INSERTA UN AVISO DE SITIO NO INDEXADO EN LA BARRA DE HERRAMIENTAS
    DE ADMINISTRACIÓN.
*/

add_action('admin_bar_menu', 'du_site_indexation_warning', 999);
function du_site_indexation_warning($bar) {
	if (get_option('blog_public') == 0) {
		$icon = '"\f530"';
		$icon_color = 'red';
	}
	echo
	'<style>
	#wpadminbar #wp-admin-bar-site-indexation-warning .ab-icon:before {
	content: ' . $icon . '; color: ' . $icon_color . ';
	}
	</style>';
	$bar->add_menu(
	[
	'id' => 'site-indexation-warning',
	'title' => '<span class="ab-icon"></span>',
	'href' => '/wp-admin/options-reading.php',
	'meta' => [
		'target' => '_self',
		'title' => 'You have the option of discourage search engines from indexing this site activated',
	],
	]);
}

/*
    ENCOLADO DE ESTILOS PERSONALIZADOS CSS 
    Se debe crear el archivo personalizado.css y colocarlo en la carpeta 
    /css-personalizado/ del tema 
*/

add_action( 'wp_enqueue_scripts', 'encolado_estilo_personalizado');

function encolado_estilo_personalizado() {
	wp_enqueue_style( 'custom-style', 
					  get_stylesheet_directory_uri() . '/css-personalizado/personalizado.css', 
					  array(), 
					  wp_get_theme()->get('Version')
					);
}


/*
    AÑADE PALETA PERSONALIZADA EN EL EDITOR
 */

add_action( 'after_setup_theme', 'du_paleta_colores_personalizada' );

function du_paleta_colores_personalizada() {
	
	add_theme_support(
		'editor-color-palette', array(
			array(
				'name'  => esc_html__( 'Color 1', 'genesis-sample' ),
				'slug' => 'color-1',
				'color' => '#76AADB',
			),
			array(
				'name'  => esc_html__( 'Color 2', 'genesis-sample' ),
				'slug' => 'color-2',
				'color' => '#4A7282',
			),
			array(
				'name'  => esc_html__( 'Color 3', 'genesis-sample' ),
				'slug' => 'color-3',
				'color' => '#3D6199',
			),
			array(
				'name'  => esc_html__( 'Color 4', 'genesis-sample' ),
				'slug' => 'color-4',
				'color' => '#ffffff',
			),
			array(
				'name'  => esc_html__( 'Color 5', 'genesis-sample' ),
				'slug' => 'color-5',
				'color' => '#000000',
			)
		)
	);
}

/* 
*  colocar esta línea al final del archivo wp-config.php para inhabilitar el 
*  editor de archivos
*
*   /*Inhabilita la posibilidad de editar archivos (plugins y themes) desde el panel de admin */
*	define( 'DISALLOW_FILE_EDIT', true );
*
*/