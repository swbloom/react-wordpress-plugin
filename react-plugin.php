<?php
/**
  * Plugin Name: React for Wordpress
  * Plugin URI: http://www.simonwbloom.com/
  * Description: This plugin is for adding React functionality to WordPress.
  * Version: 1.0.0
  * Author: Simon Bloom
  * Author URI: http://www.simonwbloom.com/
  * License: GPL2
  */




/**
 * Enqueue the bundle
 * @since React Plugin 1.0
 */
 function react_bundle() {
  $bundle_dir = get_template_directory_uri() . '/build/assets/js/bundle.js';
  wp_enqueue_script('react_bundle', $bundle_dir, array(), '1.0.0', $in_footer = true);
}
add_action( 'wp_enqueue_scripts', 'react_bundle' );
