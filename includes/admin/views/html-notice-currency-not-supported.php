<?php
/**
 * Admin View: Notice - Currency not supported.
 *
 * @package WooCommerce_PayMee/Admin/Notices
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<div class="error inline">
	<p><strong><?php _e('PayMee Disabled', 'woocommerce-paymee' ); ?></strong>: <?php printf( __( 'Currency <code>%s</code> is not supported. Works only with Brazilian Real.', 'woocommerce-paymee' ), get_woocommerce_currency() ); ?>
	</p>
</div>
