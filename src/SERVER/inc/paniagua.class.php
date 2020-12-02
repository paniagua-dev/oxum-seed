<?php

/**
 * Class helper to handle Wordpress theme
 * @Important should be imported in the Wordpress file functions.php
 */

class WP_Paniagua {
    public $theme_path;

    function __construct() {
    }

    private function get_theme_path() {
        return (isset($this->theme_path)) ? $this->theme_path : get_template_directory_uri() . '/';
    }

    public function enqueue_style($style_name = 'main.css', $dependencies = [], $version = '1.0.0', $media = 'all') {
        wp_enqueue_style($style_name, $this->get_theme_path() . $style_name, $dependencies, $version, $media);
    }

    public function enqueue_script($script_name = 'main.js', $dependencies = [], $version = '1.0.0', $in_footer = true) {
        wp_enqueue_script($script_name, $this->get_theme_path() . $script_name, $dependencies, $version, $in_footer);
    }

    /**
     * Remove JQuery from the front-end part of Wordpress
     * @import should be run in the hook 'init'
     */
    public function no_more_jquery() {
        if(!is_admin()) {
            wp_deregister_script('jquery');
            wp_register_script('jquery', false);
        }
    }
}