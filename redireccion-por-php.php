<?php

/*
   Para crear una redirección desde una url a otra basta
   con colocar un archivo index.php con el siguiente código
   en la que tendremos que modificar URL_DE_DESTINO 
 */

header("Status: 301 Moved Permanently");
header("Location: https://URL_DE_DESTINO");
exit;
?>