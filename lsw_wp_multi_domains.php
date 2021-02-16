<?php

/**
 * @since             1.0.0
 * @package           Lsw_Wp_Multi_Domains
 *
 * @wordpress-plugin
 * Plugin Name:       LSW WP Multi Domains
 * Plugin URI:        https://wordpress.org/plugins/lsw-wp-multi-domains/
 * Description:       Allow you to add multiple domains and set different wp_options, home pages, favicons, scripts and more, for each domain.
 * Version:           1.0.0
 * Author:            Luis Simioni
 * Author URI:        https://lsweb.dev
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       lsw_wp_multi_domains
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * SemVer Standards - https://semver.org
 */
define( 'LSW_WP_MULTI_DOMAINS_VERSION', '1.0.0' );

/**
 * Runs "includes/class-lsw-wp-multi-domains-activator.php" during plugin activation.
 */
function activate_lsw_wp_multi_domains() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-lsw-wp-multi-domains-activator.php';
	Lsw_Wp_Multi_Domains_Activator::activate();
}

/**
 * Runs "includes/class-lsw-wp-multi-domains-deactivator.php" during plugin activation.
 */
function deactivate_lsw_wp_multi_domains() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-lsw-wp-multi-domains-deactivator.php';
	Lsw_Wp_Multi_Domains_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_lsw_wp_multi_domains' );
register_deactivation_hook( __FILE__, 'deactivate_lsw_wp_multi_domains' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/lsw_wp_multi_domains.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_lsw_wp_multi_domains() {

	$plugin = new Lsw_Wp_Multi_Domains();
	$plugin->run();

}
run_lsw_wp_multi_domains();
