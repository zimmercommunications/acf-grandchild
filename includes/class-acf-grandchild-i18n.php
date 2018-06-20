<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/nboaldin
 * @since      1.0.0
 *
 * @package    Acf_Grandchild
 * @subpackage Acf_Grandchild/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Acf_Grandchild
 * @subpackage Acf_Grandchild/includes
 * @author     Nathan Boaldin <nboaldin@gmail.com>
 */
class Acf_Grandchild_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'acf-grandchild',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
