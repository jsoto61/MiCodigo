/*ELIMINA LA BARRA DE HERRAMIENTAS DE ADMIN*/
	add_action('after_setup_theme', 'du_no_admin_bar');

	function du_no_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	add_filter( 'show_admin_bar', '__return_false' );
	}
}
