<?php
/* SCRIPT NO PROBADO */
/* Quitar logo barra admin */ 
/* Código obtenido de AyudaWP*/

function du_quitar_logo_wp_admin() { 
    global $wp_admin_bar; 
    $wp_admin_bar->remove_menu( 'wp-logo' ); } 

add_action( 'wp_before_admin_bar_render', 'du_quitar_logo_wp_admin', 0 );

/*  Cambiar logo barra admin */ 
/*  
    Se debe crear un logo con un máximo de 20px de altura y subirlo
    a medios o colocarlo en la url que se desee.
 */
function du_cambiar_logo_admin() { 
    echo ' <style type="text/css"> #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before { 
        background-image: url(AQUI_LA_RUTA_DE_TU_IMAGEN) !important; 
        background-position: 0 0; 
        color:rgba(0, 0, 0, 0); 
        } 
        #wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon { 
            background-position: 0 0; 
        } </style> '; 
    } 
    //gancho en la salida de la cabecera de admin 
    add_action('wp_before_admin_bar_render', 'du_cambiar_logo_admin');


?>
