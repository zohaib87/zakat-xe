<?php
/**
 * Plugin setup functions and definitions.
 *
 * @package Zakat XE
 */

/**
 * Translate plugin
 */
function zakat_xe_load_textdomain() {
  load_plugin_textdomain( 'xe-plugin', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}
add_action('plugins_loaded', 'zakat_xe_load_textdomain');
