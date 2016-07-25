<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.jameswhayman.com
 * @since      1.0.0
 *
 * @package    Super_Signup_Bar
 * @subpackage Super_Signup_Bar/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Super_Signup_Bar
 * @subpackage Super_Signup_Bar/includes
 * @author     James Whayman <hello@jameswhayman.com>
 */
class Super_Signup_Bar_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'super-signup-bar',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
