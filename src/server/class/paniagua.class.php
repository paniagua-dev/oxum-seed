<?php

	/**
	 * Class helper to handle Wordpress theme
	 * @Important should be imported in the Wordpress file functions.php
	 */

	class WP_Paniagua {
		public $theme_path;

		function __construct() {
		}

		/**
		 * Enable basic Wordpress supports
		 */
		public function preset_wordpress() {
			//Add Featured Images & Post Thumbnails support
			add_theme_support('post-thumbnails');

			//Add <title> tag support in the header
			add_theme_support( 'title-tag' );
		}

		private function get_theme_path() {
			return (isset($this->theme_path)) ? $this->theme_path : get_template_directory_uri() . '/';
		}

		public function enqueue_style($style_name = 'main.css', $dependencies = [], $version = '1.0.0', $media = 'all') {
			wp_enqueue_style($style_name, $this->get_theme_path() . $style_name, $dependencies, $version, $media);
		}

		public function enqueue_script($script_name = 'main.js', $path, $dependencies = [], $version = '1.0.0', $in_footer = true) {
			if(!isset($path)) {
				$path = $this->get_theme_path() . $script_name;
			}
			wp_enqueue_script($script_name, $path, $dependencies, $version, $in_footer);
		}

		public function enqueue_external_script($script_name, $script_url, $dependencies = [], $version = '1.0.0', $in_footer = true) {
			$this->enqueue_script($script_name, $script_url, $dependencies = [], $version = '1.0.0', $in_footer = true);
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