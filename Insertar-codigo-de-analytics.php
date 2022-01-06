<?php

/*INSERTA EL CÓDIGO DE SEGUIMIENTO DE ANALYTICS*/

add_action('wp_head','du_google_analytics');
	function du_google_analytics() {

		echo '<!-- Global site tag (gtag.js) - Google Analytics -->';
		echo '<script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXXX"></script>';
		echo '<script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}';
  		echo "gtag('js', new Date());";
		echo "gtag('config', 'UA-XXXXXXXXX');</script>";

	}
	
//	
//	add_action('wp_head','du_google_analytics');
//	function du_google_analytics() {
//		echo '<!-- Global site tag (gtag.js) - Google Analytics -->';
//		echo '<script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXX"></script>';
//		echo '<script>';
//		echo 'window.dataLayer = window.dataLayer || [];';
//		echo 'function gtag(){dataLayer.push(arguments);}';
//		echo "gtag('js', new Date());";
//		echo "gtag('config', 'G-XXXXXXXXX');";
//		echo '</script>';
//	}