

/* Quitar logo barra admin */ 
/* Código obtenido de AyudaWP*/

function du_quitar_logo_wp_admin() { 
    global $wp_admin_bar; 
    $wp_admin_bar->remove_menu( 'wp-logo' ); } 

add_action( 'wp_before_admin_bar_render', 'du_quitar_logo_wp_admin', 0 );

