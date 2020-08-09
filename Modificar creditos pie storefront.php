
// Eliminar el footer de StoreFront
add_action( 'init', 'du_eliminar_footer_storefront', 10 );
	function du_eliminar_footer_storefront() {
	remove_action( 'storefront_footer', 'storefront_credit', 20 );
	}

// Personalizar el footer de StoreFront
add_action( 'storefront_footer', 'du_personalizar_footer_storefront', 10 );
function du_personalizar_footer_storefront() {
	echo '<div class="du-creditos-pie">';
	echo '&copy'; 
	echo get_the_date( 'Y' ) . ' ' . get_bloginfo( 'name' ); 
	echo ' - ' . get_bloginfo( 'description' ); 
	echo '</div>';
	}
//Se añaden los creditos de Duando
add_action( 'storefront_footer', 'du_creditos_duando', 10 );
function du_creditos_duando() {
    echo '<div class="du-creditos-duando">';
    echo 'Sitio web implementado por <a href="https://duando.net">Duando</a>';
    echo '</div>';
    }