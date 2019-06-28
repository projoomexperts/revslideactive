<?php

/**
 * Fired during plugin activation
 *
 * @link       https://github.com/projoomexperts/revslideactive
 * @since      1.0.0
 *
 * @package    Revslideactive
 * @subpackage Revslideactive/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Revslideactive
 * @subpackage Revslideactive/includes
 * @author     projoomexperts <projoomexperts@gmail.com>
 */
class Revslideactive_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		
		
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < 37; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		
		update_option('revslider-valid', 'true');
		update_option('revslider-code', $randomString);
		//update_option('revslider-email', $data['email']);
		update_option('revslider-temp-active-notice', 'false');
		
	}

}
