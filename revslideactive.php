<?php

/**
 * @link              https://github.com/projoomexperts/revslideactive
 * @since             1.0.0
 * @package           Revslideactive
 *
 * @wordpress-plugin
 * Plugin Name:       RevSlideActive
 * Plugin URI:        https://github.com/projoomexperts/revslideactive
 * Description:       A Simple plugin that activates Revolution Slider with random generated key.
 * Version:           1.0.0
 * Author:            projoomexperts
 * Author URI:        https://github.com/projoomexperts/revslideactive
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       revslideactive
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


define( 'REVSLIDEACTIVE_VERSION', '1.0.0' );

function activate_revslideactive() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-revslideactive-activator.php';
	Revslideactive_Activator::activate();
}

function deactivate_revslideactive() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-revslideactive-deactivator.php';
	Revslideactive_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_revslideactive' );
register_deactivation_hook( __FILE__, 'deactivate_revslideactive' );


