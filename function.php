<?php

/**
 *  Boardwalk child functions and definitions
 *
 * @package   Boardwalk Child
 */

/**
 * Activates default theme features
 *
 * @since 1.0
 */
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

?>