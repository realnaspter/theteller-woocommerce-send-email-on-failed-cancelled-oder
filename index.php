<?php
/*

Plugin Name: WooCommerce PaySwitch Theteller Send Email on Cancelled or Failed Order Add-on
Plugin URI: https://wordpress.org/plugins/woocommerce-theteller-send-email-cancelled-failed-order/
Description: Send Email on Cancelled or Failed Order Woocommerce Theteller Payment Gateway Add-on
Version: 1.0
Author: Marc D Christopher AHOURE
Author URI: https://perfectplusventures.com

 */

function wc_cancelled_order_add_customer_email( $recipient, $order ){
     return $recipient . ',' . $order->billing_email;
 }
 add_filter( 'woocommerce_email_recipient_cancelled_order', 'wc_cancelled_order_add_customer_email', 10, 2 );
 add_filter( 'woocommerce_email_recipient_failed_order', 'wc_cancelled_order_add_customer_email', 10, 2 );

