<?php
woo_add_cart_fee() {
global $woocommerce;
$unik = rand(100, 999);
$woocommerce->cart->add_fee( __('Unique Code', 'woocommerce'), $unik );
}
add_action( 'woocommerce_cart_calculate_fees', 'woo_add_cart_fee' );
?>
