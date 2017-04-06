<?php
/**
 * bao functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bao
 */

/**
 * Enqueue scripts and styles.
 */
 function my_theme_enqueue_styles() {
     wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

 }
 add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


 /**
  * Enqueue scripts and styles.
  */
 function bao_scripts() {

 	wp_enqueue_script( 'boa-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), '20151215', true );

 	wp_enqueue_script( 'bao-linkify', get_stylesheet_directory_uri() . '/assets/js/linkify.min.js', array(), '20151215', true );

 	wp_enqueue_script( 'bao-linkify_jQuery', get_stylesheet_directory_uri() . '/assets/js/linkify-jquery.min.js', array('jquery'), '20151215', true );

 	wp_enqueue_script( 'bao-clipboard', get_stylesheet_directory_uri() . '/assets/js/clipboard.min.js', array('jquery'), '20151215', true );

 }
 add_action( 'wp_enqueue_scripts', 'bao_scripts' );
