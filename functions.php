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
 function bao_scripts() {

  wp_enqueue_style( 'ba-style',  get_stylesheet_directory_uri() . '/style.css?v=101' );

 	wp_enqueue_script( 'boa-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), '20151215', true );

 }
 add_action( 'wp_enqueue_scripts', 'bao_scripts' );







require get_stylesheet_directory() . '/upload-form.php';





function custom_redirect($url, $post_id, $form_data)
{
    if ($form_data['id']==1764)
        return 'https://badassofficial.com/app/submitted/';

    return $url;
}
add_filter('cred_success_redirect', 'custom_redirect',10,3);




 //
 //
 //
 //
 // /**
 //  * Add a filter to stylesheet_uri, which appends a query string to it automagically.
 //  */
 // add_filter('stylesheet_uri', 'zk_css_versioner');
 // /**
 //  * the goal of this method is to append a query string to the css url for the site.
 //  * the query string currently is determined by the last time the css file was modified
 //  * the theory is that if the file is modified, change the value of v=, which should
 //  * force the CDN to pull a new version from the origin server. This could be a
 //  * a hit on performance, not sure yet. Let's get it working first.
 //  *
 //  * @return string
 //  */
 // function zk_css_versioner() {
 //     $cssfile = get_stylesheet_directory() . "/style.css";
 //     $turi = get_template_directory_uri();
 //     if (file_exists($cssfile)) {
 //         $cssuri = "$turi/style.css?v=" . filemtime($cssfile);
 //     }
 //     echo $cssuri;
 // }
