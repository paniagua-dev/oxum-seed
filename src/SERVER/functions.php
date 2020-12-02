<?php
require_once ('inc/paniagua.class.php');

$paniagua = new WP_Paniagua();
$paniagua->preset_wordpress();

function enqueue_scripts() {
    global $paniagua;
    $paniagua->enqueue_style('vendor/css/bootstrap.min.css');
    $paniagua->enqueue_style();
    $paniagua->enqueue_script('vendor/js/bootstrap.min.js');
}

add_action( 'init', [$paniagua, 'no_more_jquery']); //Remove jQuery
add_action( 'wp_enqueue_scripts', 'enqueue_scripts');