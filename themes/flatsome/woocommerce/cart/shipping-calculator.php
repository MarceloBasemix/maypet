<?php
/**
 * Shipping Calculator
 *
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.0.8
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;

if ( 'no' == get_option('woocommerce_enable_shipping_calc') || ! $woocommerce->cart->needs_shipping() )
    return;
?>

<?php do_action( 'woocommerce_before_shipping_calculator' ); ?>

<form class="shipping_calculator" action="<?php echo esc_url( $woocommerce->cart->get_cart_url() ); ?>" method="post">

    <h2><a href="#" class="shipping-calculator-button"><?php _e( 'Calculate Shipping', 'woocommerce' ); ?> <span>&darr;</span></a></h2>

    <section class="shipping-calculator-form">
        <input type="hidden" name="calc_shipping_country" value="BR" />
        <input type="hidden" name="calc_shipping_state" value="SP" />
        <p class="form-row form-row-wide">
            <input type="text" class="input-text" value="<?php echo esc_attr( $woocommerce->customer->get_shipping_postcode() ); ?>" placeholder="<?php _e( 'Postcode / Zip', 'woocommerce' ); ?>" name="calc_shipping_postcode" id="calc_shipping_postcode" />
        </p>
        <p><button type="submit" name="calc_shipping" value="1" class="button"><?php _e( 'Update Totals', 'woocommerce' ); ?></button></p>

        <?php $woocommerce->nonce_field('cart') ?>
    </section>
</form>

<?php do_action( 'woocommerce_after_shipping_calculator' ); ?>
