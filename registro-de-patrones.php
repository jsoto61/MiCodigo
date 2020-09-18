<?php
// Registrar los patrones de bloques
add_action( 'init', 'du_registrar_block_patterns' );
function du_registrar_block_patterns() {
    register_block_pattern(
        'centro-macrofit',
        array(
            'title'       => __( 'titulo del patrón', '' ),
            'description' => _x( 'Un bloque con el patrón de todo el contenido de un centro', 'Block pattern description', 'duando' ),
            'categories'  => array( 'header' ),
            'content'     => "aquí iría el código html copiado del(os) los bloque(s) después de escapado",
        )
    );
}
?>