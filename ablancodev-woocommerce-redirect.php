<?php
/**
 * Plugin Name: ablancodev WooCommerce Redirect
 */

/* Login */
add_filter( 'woocommerce_login_redirect', 'ablancodev_woocommerce_login_redirect' );
function ablancodev_woocommerce_login_redirect ($redirect) {
    // return your custom url.
    return 'https://domain.com/destination';
}

/* Register */
add_filter( 'woocommerce_registration_redirect', 'ablancodev_woocommerce_registration_redirect' );
function ablancodev_woocommerce_registration_redirect ($redirect) {
    // return your custom url.
    return 'https://domain.com/destination';
}
/* We need to enable this flag for register redirect */
add_filter( 'woocommerce_registration_auth_new_customer', 'ablancodev_woocommerce_registration_auth_new_customer' );
function ablancodev_woocommerce_registration_auth_new_customer( $value ) {
    return true;
}
