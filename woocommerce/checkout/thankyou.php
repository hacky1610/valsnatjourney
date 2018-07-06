<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.2.0
 */
require_once(__DIR__.'/../../inc/MailChimp.php');
use \DrewM\MailChimp\MailChimp;
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="woocommerce-order">

	<?php if ( $order ) : ?>
	


		<?php if ( $order->has_status( 'failed' ) ) : ?>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php _e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
				<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php _e( 'Pay', 'woocommerce' ) ?></a>
				<?php if ( is_user_logged_in() ) : ?>
					<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php _e( 'My account', 'woocommerce' ); ?></a>
				<?php endif; ?>
			</p>

		<?php else : ?>

			<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'woocommerce' ), $order ); ?></p>

			<ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">

				<li class="woocommerce-order-overview__order order">
					<?php _e( 'Order number:', 'woocommerce' ); ?>
					<strong><?php echo $order->get_order_number(); ?></strong>
				</li>

				<li class="woocommerce-order-overview__date date">
					<?php _e( 'Date:', 'woocommerce' ); ?>
					<strong><?php echo wc_format_datetime( $order->get_date_created() ); ?></strong>
				</li>

				<?php if ( is_user_logged_in() && $order->get_user_id() === get_current_user_id() && $order->get_billing_email() ) : ?>
					<li class="woocommerce-order-overview__email email">
						<?php _e( 'Email:', 'woocommerce' ); ?>
						<strong><?php echo $order->get_billing_email(); ?></strong>
					</li>
				<?php endif; ?>

				<li class="woocommerce-order-overview__total total">
					<?php _e( 'Total:', 'woocommerce' ); ?>
					<strong><?php echo $order->get_formatted_order_total(); ?></strong>
				</li>

				<?php if ( $order->get_payment_method_title() ) : ?>
					<li class="woocommerce-order-overview__payment-method method">
						<?php _e( 'Payment method:', 'woocommerce' ); ?>
						<strong><?php echo wp_kses_post( $order->get_payment_method_title() ); ?></strong>
					</li>
				<?php endif; ?>

			</ul>

		<?php endif; ?>

	
		<?php do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); 
		
		?>
		<?php 

		do_action( 'woocommerce_thankyou', $order->get_id() ); ?>
		

	<?php else : ?>

		<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'woocommerce' ), null ); ?></p>

	<?php endif; ?>

	<form action="#" method="post" class="vnj_register_after_checkout">

	<input type="hidden" value="<?php echo $order->get_billing_email()?>" name="EMAIL">
	<input type="hidden" value="<?php echo $order->get_billing_first_name()?>" name="FNAME" >
	<input type="hidden" value="<?php echo $order->get_billing_country()?>" name="PAYS" >
	<input type="hidden" value="true" name="SENDMAIL">
	<input type="submit" value="Inscrivez-vous pour des conseils gratuits pour des cheveux en bonne santé" name="subscribe" id="mc-embedded-subscribe" class="button">
	<?php

	include 'wp-content/themes/hamzahshop/inc/MailChimpFunctions.php';

	#Register for newsletter if button is clicked
	if (isset($_POST["EMAIL"])) {

		$MailChimp = new MailChimp('20908b3fa54b62ed523a94cb430eab8f-us13');
		$mail = $_POST["EMAIL"];
		$fname = $_POST["FNAME"];
		$pays = $_POST["PAYS"];
		
		$result = AddToList($mail, $fname, $pays, "1ff12ab63e");

		echo "<p class='register_label'>Vous avez été enregistré!</p>";
	}
	
	#Register as customer 
	$mail = $order->get_billing_email();
	$fname = $order->get_billing_first_name();
	$pays =  WC()->countries->countries[$order->get_billing_country()];		

	$result = AddToList($mail, $fname, $pays, "978f47800f");
	
	
	
	#Ask customer if he got the ebook?
	if($order->get_payment_method() !== "bacs")
	{
		$downloadableItems = $order->get_items();
		foreach ($downloadableItems as $item)
		{
			if($item["product_id"] == 512)
			{
				#Send E Book
				SendMail($mail,"automations/b1d7c9c924/emails/964101d9d5/queue");
			}
			if($item["product_id"] == 881)
			{
				#Send Mp3
				SendMail($mail,"automations/1c31cdc3e6/emails/15b610e7e6/queue");
			}
			if($item["product_id"] == 1390)
			{
				#Send Creme
				SendMail($mail,"automations/a78c5fe40b/emails/be3e4bc5f5/queue");
			}
		}
	}

	

?>
	</form>
	
		

	
</div>
