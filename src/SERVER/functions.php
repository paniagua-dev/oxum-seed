<?php
require_once ('inc/paniagua.class.php');

$paniagua = new WP_Paniagua(get_template_directory_uri());

add_action( 'wp_enqueue_scripts', $paniagua->enqueue_style('main.css'));