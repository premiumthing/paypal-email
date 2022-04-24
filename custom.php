<?php
//You can go to woocomerce settting
//Choose Email
//Choose new email
//Add flowwing code

$paypal_settings = array_filter( (array) get_option( 'woocommerce_paypal_settings', array() ) );
echo ' Paypal Email on this time is: '; echo esc_attr( isset( $paypal_settings['email'] ) ? $paypal_settings['email'] : '' );



?>
