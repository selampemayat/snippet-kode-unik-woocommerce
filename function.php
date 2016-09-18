<?php

function woo_add_cart_fee() {
 
  global $woocommerce;
	
  $woocommerce->cart->add_fee( __('Unique', 'woocommerce'), 5 );
	
}
add_action( 'woocommerce_cart_calculate_fees', 'woo_add_cart_fee' );
