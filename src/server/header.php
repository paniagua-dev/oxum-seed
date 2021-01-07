<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-fixed-footer="<?php echo get_theme_mod('footer_fixed'); ?>">
<noscript>
    <strong>
        We're sorry but this website doesn't work properly without JavaScript enabled.
        Please enable it to continue.
    </strong>
</noscript>
<main class="main">
    <?php require_once('inc/navigation-menu.php'); ?>
    <header class="main-header container-fluid" uk-sticky="top: 120; cls-active: active; cls-inactive: inactive;">
        <?php require_once('inc/navbar.php'); ?>
    </header>
