<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.jameswhayman.com
 * @since             1.0.0
 * @package           Super_Signup_Bar
 *
 * @wordpress-plugin
 * Plugin Name:       Super Signup Bar
 * Plugin URI:        http://www.jameswhayman.com/super-signup-bar
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            James Whayman
 * Author URI:        http://www.jameswhayman.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       super-signup-bar
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-super-signup-bar-activator.php
 */
function activate_super_signup_bar() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-super-signup-bar-activator.php';
	Super_Signup_Bar_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-super-signup-bar-deactivator.php
 */
function deactivate_super_signup_bar() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-super-signup-bar-deactivator.php';
	Super_Signup_Bar_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_super_signup_bar' );
register_deactivation_hook( __FILE__, 'deactivate_super_signup_bar' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-super-signup-bar.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_super_signup_bar() {

	$plugin = new Super_Signup_Bar();
	$plugin->run();

}
run_super_signup_bar();
