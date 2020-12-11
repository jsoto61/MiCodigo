<?php

// Mostrar un aviso en el admin bar si no se está indexando el sitio
add_action('admin_bar_menu', 'du_site_indexation_warning', 999);
function du_site_indexation_warning($bar) {
	if (get_option('blog_public') == 0) {
		$icon = '"\f530"';
		$icon_color = 'red';
	}
	echo
	'<style>
	#wpadminbar #wp-admin-bar-site-indexation-warning .ab-icon:before {
	content: ' . $icon . '; color: ' . $icon_color . ';
	}
	</style>';
	$bar->add_menu(
	[
	'id' => 'site-indexation-warning',
	'title' => '<span class="ab-icon"></span>',
	'href' => '/wp-admin/options-reading.php',
	'meta' => [
		'target' => '_self',
		'title' => 'You have the option of discourage search engines from indexing this site activated',
	],
	]);
}

?>