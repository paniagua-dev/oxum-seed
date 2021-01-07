<?php
require_once ('class/oxum.class.php');
$oxum = new WP_Oxum();
$oxum->preset_wordpress();
function enqueue_scripts() {
    global $oxum;
    $oxum->enqueue_style('css/bootstrap.min.css');
    $oxum->enqueue_style('js/artwork-ui/artwork-ui.css');
    $oxum->enqueue_style('js/artwork-ui/artwork-ui.core.css');
    //@TODO: Find a way to include artwork-ui.js in the UI build
    $oxum->enqueue_script('artwork-ui.js','js/artwork-ui/');
    $oxum->enqueue_script('artwork-ui.core.js', 'js/artwork-ui/');
    $oxum->enqueue_script('vendors.min.js', 'js/');
	$oxum->enqueue_style('css/main.css');
	$oxum->enqueue_script('main.min.js', 'js/');
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts');
