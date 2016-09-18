<?php
woo_add_cart_fee() {
global $woocommerce;
$_SESSION['unik'] = 'date (i)';
$woocommerce->cart->add_fee( __('Unique Code', 'woocommerce'), $_SESSION['unik'] );
}
add_action( 'woocommerce_cart_calculate_fees', 'woo_add_cart_fee' );
?>
