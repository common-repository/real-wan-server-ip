<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://swit.hr
 * @since      1.0.0
 *
 * @package    Real_Wan_Server_Ip
 * @subpackage Real_Wan_Server_Ip/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Real_Wan_Server_Ip
 * @subpackage Real_Wan_Server_Ip/includes
 * @author     switcorp <sandi@swit.hr>
 */
class Real_Wan_Server_Ip_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'real-wan-server-ip',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
