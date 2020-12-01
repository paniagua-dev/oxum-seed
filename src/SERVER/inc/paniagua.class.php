<?php

/**
 * Class helper to handle Wordpress theme
 * @Important should be imported in the Wordpress file functions.php
 */

class WP_Paniagua {
    private $theme_path;

    function __construct($theme_path) {
        $this->theme_path = $theme_path;
    }

    public function enqueue_style($style_name, $dependencies = [], $version = '1.0.0', $media = 'all') {
        print_r($this->theme_path + $style_name);
        wp_enqueue_style($this->theme_path + $style_name, $dependencies, $version, $media);
    }
}