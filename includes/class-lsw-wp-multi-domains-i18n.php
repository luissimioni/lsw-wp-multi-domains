<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Lsw_Wp_Multi_Domains
 * @subpackage Lsw_Wp_Multi_Domains/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Lsw_Wp_Multi_Domains
 * @subpackage Lsw_Wp_Multi_Domains/includes
 * @author     Your Name <email@example.com>
 */
class Lsw_Wp_Multi_Domains_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'lsw-wp-multi-domains',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
