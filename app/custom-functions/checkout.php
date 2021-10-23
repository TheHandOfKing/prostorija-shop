<?php

function getPaymentMethodTemplate($depricated = false)
{
  wc_get_template(
    'checkout/payment.php',
    array(
      'checkout' => WC()->checkout(),
    )
  );
}

add_action('woocommerce_checkout_after_customer_details', 'getPaymentMethodTemplate');

// Keep this function as it is very handy to list all the possible functions nested within a hook, add to readme
// TODO Create a readme for this, remember what priorities are
add_action('wp_head', 'wp_filter_for_one_action');
function wp_filter_for_one_action()
{
  global $wp_filter;
  echo '<!-- ', var_export($wp_filter['woocommerce_checkout_order_review'], true), ' -->';
}


function remove_checkout()
{
  remove_action('woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20);
}


add_action('woocommerce_checkout_order_review', 'remove_checkout', 1);
