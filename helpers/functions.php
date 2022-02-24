<?php
/**
 * Functions that helps to ease plugin development.
 *
 * @package Zakat XE
 */

function zakat_xe_directory() {
	return ABSPATH . 'wp-content/plugins/zakat-xe';
}

function zakat_xe_directory_uri() {
	return plugins_url() . '/zakat-xe';
}

function zakat_xe_file() {
	return zakat_xe_directory() . '/zakat-xe.php';
}

function zakat_xe_data() {
	return get_plugin_data( zakat_xe_file() );
}
