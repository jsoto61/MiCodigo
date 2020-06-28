<?php

/*INSERTA EL CÓDIGO DE SEGUIMIENTO DE ANALYTICS*/

add_action('wp_head','du_google_analytics');
	function du_google_analytics() {

		echo '<!-- Global site tag (gtag.js) - Google Analytics -->';
		echo '<script async src="https://www.googletagmanager.com/gtag/js?id=UA-45993564-35"></script>';
		echo '<script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}';
  		echo "gtag('js', new Date());";
		echo "gtag('config', 'UA-45993564-35');</script>";

	}
