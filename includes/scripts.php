<?php
/**
 * Enqueue scripts and styles for admin panel and front end.
 *
 * @package Zakat XE
 */

function zakat_xe_scripts() {

  /**
   * Styles
   */
  wp_enqueue_style( 'zakat-xe-main', zakat_xe_directory_uri() . '/assets/css/main.css' );

  /**
   * Scripts
   */
  wp_enqueue_script( 'zakat-xe-main', zakat_xe_directory_uri() . '/assets/js/main.js', array('jquery'), '20212306', true );

}
add_action('wp_enqueue_scripts', 'zakat_xe_scripts');