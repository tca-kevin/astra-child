<?php
/**
 * Customer processing order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-processing-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 3.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<?php

/* Izzy MG - Custom Unlimited Learning emails */
$is_unlimited_learning = false;
$is_annual = false;

// Iterate order items and find unlimited learning product ID
foreach( $order->get_items() as $item_id => $item ) {
	$product_id = $item->get_product_id();
    // 59314 - caietest sub product
	if($product_id == 27078 || $product_id == 27747 || $product_id == 59314) {
		$is_unlimited_learning = true;
	}
    if($product_id == 27747) {
        $is_annual = true;
    }
}

// Only display order info for Non unlimited learning products
if(!$is_unlimited_learning) {
    ?>
    <p><?php printf( esc_html__( 'Hi %s,', 'woocommerce' ), esc_html( $order->get_billing_first_name() ) ); ?></p>
    <p><?php printf( esc_html__( 'Just to let you know &mdash; we\'ve received your order #%s, and it is now being processed.', 'woocommerce' ), esc_html( $order->get_order_number() ) ); ?></p>
    <?php

	/*
	 * @hooked WC_Emails::order_details() Shows the order details table.
	 * @hooked WC_Structured_Data::generate_order_data() Generates structured data.
	 * @hooked WC_Structured_Data::output_structured_data() Outputs structured data.
	 * @since 2.5.0
	 */
	do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email );

	/*
	 * @hooked WC_Emails::order_meta() Shows order meta data.
	  */
	do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email );
} else {

    ?>
    <p><?php printf( esc_html__( 'Hi %s,', 'woocommerce' ), esc_html( $order->get_billing_first_name() ) ); ?></p>
    <p><?php printf( esc_html( 'Thank you for signing up to Unlimited Learning! We\'re glad to have you on board. You\'ll receive your login details in an email in the following days.', 'woocommerce' )); ?></p>
    <p><?php printf( esc_html__( 'Your order number is #%s &mdash; You\'ll be billed %s after your 14 day trial period.', 'woocommerce' ), esc_html( $order->get_order_number() ), esc_html( $is_annual ? "$300" : "$50" ) ); ?></p>

    <img width="120" src="https://www.thecareeracademy.com/wp-content/uploads/2019/07/tca-logo-square_800.png" alt="TCA Logo">

    <?php
}



/*
 * @hooked WC_Emails::customer_details() Shows customer details
 * @hooked WC_Emails::email_address() Shows email address
 */
do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email );

/**
 * Show user-defined additional content - this is set in each email's settings.
 */
if ( $additional_content ) {
	echo wp_kses_post( wpautop( wptexturize( $additional_content ) ) );
}

/*
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action( 'woocommerce_email_footer', $email );
