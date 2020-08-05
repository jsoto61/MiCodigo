<?php
/*
  MODIFICAR LOS CRÉDITOS DEL PIE DE PÁGINA EN GENESIS
    Se debe eliminar el contenido de pie que se encuentra en
    el personalizador. También es recomendable aplicar estilos
    para ello se puede utilizar la clase du_estilo_pie_genesis
  */
add_action( 'genesis_footer_creds_text', 'du_creditos_pie_de_pagina' );
function du_creditos_pie_de_pagina() {
echo '<div class="du-estilo-pie-genesis">';
echo '<a href="/legal">Política de privacidad</a><br>';
echo 'Crea tu éxito financiero<br>';
echo 'Sitio web desarrollado por <a ref="https://duando.net">Duando</a>';
echo '</div>';
}

   ?>