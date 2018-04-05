<?php
if ( ! defined( 'ABSPATH' ) )
	exit; // Exit if accessed directly

if ( ! class_exists( 'DL_WC_Remove_Reviews' ) ) :

  /**
   * Main DL_WC_Remove_Reviews Class
   *
   * @class DL_WC_Remove_Reviews
   * @version	1.0.0
   */
  class DL_WC_Remove_Reviews {
    /**
     * @var string
     */
    public static $version = '1.0.0';
    public static $required_woo = '2.4.0';

    public static function init() {
      add_filter( "woocommerce_product_tabs", array(__CLASS__, woo_remove_reviews_tab), 98);
    } // init()

    public function woo_remove_reviews_tab($tabs) { 
      unset($tabs["reviews"]);
      return $tabs;
    }
  } // DL_WC_Remove_Reviews

endif; // class exists check
?>