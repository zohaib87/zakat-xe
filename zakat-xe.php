<?php
/**
 * Plugin Name: Zakat XE
 * Description: Calculate zakat in real-time using silver prices through API.
 * Version:     1.0.0
 * Author:      Muhammad Zohaib - XeCreators
 * Author URI:  https://www.xecreators.pk
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: zakat-xe
 */

if (!defined('ABSPATH')) exit; // Exit if accessed directly

require 'helpers/functions.php';

/**
 * Enqueue scripts and styles for admin and front end.
 */
require zakat_xe_directory() . '/includes/setup.php';

/**
 * Enqueue scripts and styles for admin and front end.
 */
require zakat_xe_directory() . '/includes/scripts.php';

/**
 * Calculator shortcode
 */
require zakat_xe_directory() . '/includes/class-shortcodes.php';