<?php
require_once ('inc/paniagua.class.php');

$paniagua = new WP_Paniagua();

function enqueue_scripts() {
    global $paniagua;
    $paniagua->enqueue_style();
}

add_action( 'init', [$paniagua, 'no_more_jquery']); //Remove jQuery
add_action( 'wp_enqueue_scripts', 'enqueue_scripts');