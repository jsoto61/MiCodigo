/**
 * Añadir paletas de color personalizadas en Gutenberg
 */

add_action( 'after_setup_theme', 'du_paleta_colores_personalizada' );

function du_paleta_colores_personalizada() {
	add_theme_support(
		'editor-color-palette', array(
			array(
				'name'  => esc_html__( 'Black', 'genesis-sample' ),
				'slug' => 'black',
				'color' => '#2a2a2a',
			),
			array(
				'name'  => esc_html__( 'Gray', 'genesis-sample' ),
				'slug' => 'gray',
				'color' => '#f7f7f7',
			),
			array(
				'name'  => esc_html__( 'Blue', 'genesis-sample' ),
				'slug' => 'blue',
				'color' => '#619ad0',
			),
			array(
				'name'  => esc_html__( 'duando', 'genesis-sample' ),
				'slug' => 'duando',
				'color' => '#88dd99',
			),
			array(
				'name'  => esc_html__( 'duando2', 'genesis-sample' ),
				'slug' => 'duando2',
				'color' => '#ff0000',
			)
		)
	);
}
