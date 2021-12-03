<?php
require_once('class/oxum.class.php');
$oxum = new WP_Oxum();
$oxum->preset_wordpress();
function enqueue_scripts() {
    global $oxum;
    $oxum->enqueue_style('css/bootstrap.min.css');
    $oxum->enqueue_script('vendors.min.js', 'js/');
    $oxum->enqueue_style('css/main.css');
    $oxum->enqueue_script('main.min.js', 'js/');
}

function print_processed_html($string) {
    $search = array("'");
    $replace = array("\'");

    return str_replace($search, $replace, $string);
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');
