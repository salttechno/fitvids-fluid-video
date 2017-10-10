<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://themes.salttechno.com
 * @since      1.0.0
 *
 * @package    Fitvids_Fluid_Video
 * @subpackage Fitvids_Fluid_Video/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Fitvids_Fluid_Video
 * @subpackage Fitvids_Fluid_Video/includes
 * @author     SaltTechno <sales@salttechno.com>
 */
class Fitvids_Fluid_Video_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'fitvids-fluid-video',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
