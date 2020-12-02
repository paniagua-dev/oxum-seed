<?php
require_once ('class/paniagua.class.php');
$paniagua = new WP_Paniagua();
$paniagua->preset_wordpress();
function enqueue_scripts() {
    global $paniagua;
    $paniagua->enqueue_style('vendor/css/bootstrap.min.css');
    $paniagua->enqueue_style();
    $paniagua->enqueue_script('uikit.min.js', 'https://cdn.jsdelivr.net/npm/uikit@3.5.10/dist/js/uikit.min.js');
}
add_action( 'init', [$paniagua, 'no_more_jquery']); //Remove jQuery
add_action( 'wp_enqueue_scripts', 'enqueue_scripts');