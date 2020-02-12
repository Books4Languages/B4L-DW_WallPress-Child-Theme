<?php

/**
 * dw-wallpress child functions and definitions
 *
 * @package dw-wallpress child
 */

/**
 * Activates default theme features
 *
 * @since 1.0
 */


 include_once plugin_dir_path( __FILE__ ) . "lib/wallpress-child-admin-bar.php";
 include_once plugin_dir_path( __FILE__ ) . "lib/wallpress-child-custom-taxonomies.php";
 // include_once plugin_dir_path( __FILE__ ) . "lib/wallpress-child-custom-widget-taxonomies.php";
 include_once plugin_dir_path( __FILE__ ) . "lib/wallpress-child-custom-widgets.php";
 // include_once plugin_dir_path( __FILE__ ) . "lib/wallpress-child-login.php";

// include_once plugin_dir_path( __FILE__ ) . "symbionts/featured-audio/featured-audio.php";
// include_once plugin_dir_path( __FILE__ ) . "symbionts/search-filter-pro/search-filter-pro.php";

//include metabox file php
  include_once plugin_dir_path( __FILE__) . "metabox.php";
