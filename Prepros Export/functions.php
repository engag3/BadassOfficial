<?php
/**
 * engag3 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package engag3
 */


/**
 * Enqueue scripts and styles.
 */
 function engag3_stylesheet() {

   $cssfile = get_stylesheet_directory() . "/style.css";
   $turi = get_stylesheet_directory_uri();
   if (file_exists($cssfile)) {
       $cssuri = "$turi/style.css?v=100";
   }

   wp_enqueue_style( 'engag3-style', $cssuri, array('engine-style') );

 }
 add_action( 'wp_enqueue_scripts', 'engag3_stylesheet' );





function woocommerce_button_proceed_to_checkout() {
   $checkout_url = WC()->cart->get_checkout_url();
   ?>
   <a href="<?php echo $checkout_url; ?>" class="checkout-button button alt wc-forward"><?php _e( 'Checkout', 'woocommerce' ); ?></a>
   <?php
}



// hide coupon field on checkout page
function hide_coupon_field_on_checkout( $enabled ) {
	if ( is_checkout() ) {
		$enabled = false;
	}
	return $enabled;
}
add_filter( 'woocommerce_coupons_enabled', 'hide_coupon_field_on_checkout' );



function agentwp_dequeue_stylesandscripts() {
  if ( class_exists( 'woocommerce' ) ) {
    wp_dequeue_style( 'select2' );
    wp_deregister_style( 'select2' );
    wp_dequeue_script( 'select2');
    wp_deregister_script('select2');
  }
} add_action( 'wp_enqueue_scripts', 'agentwp_dequeue_stylesandscripts', 100 );
