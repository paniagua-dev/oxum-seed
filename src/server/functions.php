<?php
require_once ('class/oxum.class.php');
$oxum = new WP_Oxum();
$oxum->preset_wordpress();
function enqueue_scripts() {
    global $oxum;
    $oxum->enqueue_style('vendor/css/bootstrap.min.css');
    $oxum->enqueue_style();
    $oxum->enqueue_external_script('uikit.min.js', 'https://cdn.jsdelivr.net/npm/uikit@3.5.10/dist/js/uikit.min.js');
}
add_action( 'init', [$oxum, 'no_more_jquery']); //Remove jQuery
add_action( 'wp_enqueue_scripts', 'enqueue_scripts');