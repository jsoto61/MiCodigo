<?php

// Sustituir el logo de la página de login de WordPress por el de la web
add_action( 'login_head', 'cg_login_logo' );
function cg_login_logo() {
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	$logo_image_url = $image[0];
	?>
	<style type="text/css">
	.login h1 a {
		background-image: url('<?php echo $logo_image_url ?>');
		background-size: contain;
		background-repeat: no-repeat;
		display: block;
		overflow: hidden;
		text-indent: -9999em;
		width: 100%;
		height: 100px;
	}
	</style>
	
}

<?php
// Cambiar logo de la página de login de WordPress
add_filter( 'login_headerurl', 'cg_login_header_url' );
function cg_login_header_url( $url ) {
	return esc_url( home_url() );
}