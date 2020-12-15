<?php
require_once ('class/oxum.class.php');
$oxum = new WP_Oxum();
$oxum->preset_wordpress();
function enqueue_scripts() {
    global $oxum;
    $oxum->enqueue_style('css/bootstrap.min.css');
    $oxum->enqueue_style('js/artwork-ui/artwork-ui.css');
    $oxum->enqueue_style('js/artwork-ui/artwork-ui.core.css');
	$oxum->enqueue_style('css/main.css');
	$oxum->enqueue_script('main.js', 'js/');
    $oxum->enqueue_script('artwork-ui.js','js/artwork-ui/');
	$oxum->enqueue_script('artwork-ui.core.js', 'js/artwork-ui/');
    $oxum->enqueue_external_script('uikit.min.js', 'https://cdn.jsdelivr.net/npm/uikit@3.5.10/dist/js/uikit.min.js');
    $oxum->enqueue_external_script('uikit-icons.min.js', 'https://cdn.jsdelivr.net/npm/uikit@3.5.15/dist/js/uikit-icons.min.js');
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts');
