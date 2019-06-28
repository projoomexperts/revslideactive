<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://github.com/projoomexperts/revslideactive
 * @since      1.0.0
 *
 * @package    Revslideactive
 * @subpackage Revslideactive/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Revslideactive
 * @subpackage Revslideactive/includes
 * @author     projoomexperts <projoomexperts@gmail.com>
 */
class Revslideactive_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		
		update_option('revslider-valid', 'false');
		update_option('revslider-temp-active', 'false');
		update_option('revslider-code', '');

	}

}
