<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://localhost:8000/
 * @since      1.0.0
 *
 * @package    Hari_Hello_World
 * @subpackage Hari_Hello_World/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Hari_Hello_World
 * @subpackage Hari_Hello_World/includes
 * @author     Hariharan <harithangavelu08@gmail.com>
 */
class Hari_Hello_World_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'hari-hello-world',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
