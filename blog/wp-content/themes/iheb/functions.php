<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

/**
 * Twenty Nineteen only works in WordPress 4.7 or later.
 */

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
   

   
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );