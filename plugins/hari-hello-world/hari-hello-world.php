<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://localhost:8000/
 * @since             1.0.0
 * @package           Hari_Hello_World
 *
 * @wordpress-plugin
 * Plugin Name:       Hello from Hari
 * Plugin URI:        http://localhost:8000/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Hariharan
 * Author URI:        http://localhost:8000/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hari-hello-world
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'HARI_HELLO_WORLD_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-hari-hello-world-activator.php
 */
function activate_hari_hello_world() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hari-hello-world-activator.php';
	Hari_Hello_World_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-hari-hello-world-deactivator.php
 */
function deactivate_hari_hello_world() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hari-hello-world-deactivator.php';
	Hari_Hello_World_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_hari_hello_world' );
register_deactivation_hook( __FILE__, 'deactivate_hari_hello_world' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-hari-hello-world.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_hari_hello_world() {

	$plugin = new Hari_Hello_World();
	$plugin->run();

}
run_hari_hello_world();
