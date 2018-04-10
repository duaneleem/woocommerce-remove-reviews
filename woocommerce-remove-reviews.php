<?php
/*
  Plugin Name: WooCommerce Disable Reviews
  Plugin URI: https://blog.duaneleem.com/disabling-woocommerce-reviews/
  Description: Disable the reviews tab across WooCommerce.
  Version: 1.0
  Author: Duane Leem
  Author URI: https://duaneleem.com
  License: GPLv2+
  Text Domain: woocommerce-remove-reviews
*/

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

// Quit right now if WooCommerce is not active
if ( ! is_woocommerce_active() )
  return;

// Execute plugin functionality.
function dl_wc_remove_reviews_init() {
  require_once("includes/class-wc-remove-reviews.php");
  DL_WC_Remove_Reviews::init();
}
add_action("woocommerce_loaded", "dl_wc_remove_reviews_init");
?>