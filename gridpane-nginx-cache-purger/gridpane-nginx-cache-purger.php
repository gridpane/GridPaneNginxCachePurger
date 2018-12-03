<?php
/**
 * GridPane Nginx Cache Purger
 *
 * @package         LearningCurve\GridPaneNginxCachePurger
 * @since           1.0.0
 * @author          Jeff Cleverley
 * @license         GNU-2.0+
 *
 * @wordpress-plugin
 * Plugin Name:     GridPane Nginx Cache Purger
 * Description:     Plugin to initiate the FastCGI Cache Purge on the GridPane OpenResty Nginx Stack
 * Version:         1.0.0
 * Author:          Jeff Cleverley
 * Author URI:      https://github.com/JeffCleverley/GridPaneCachePurger
 * License:         GPL-2.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:     gridpane-nginx-cache-purger
 * Domain Path:     /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Hello, Hello, Hello, what\'s going on here then?' );
}

define( 'GPCP_VERSION', '1.0.0' );
define( 'GPCP_TEXT_DOMAIN', 'gridpane-nginx-cache-purger' );
define( 'GPCP_DIR_URL', plugin_dir_url( __FILE__ ) );
define( 'GPCP_DIR_PATH', plugin_dir_path( __FILE__ ) );

function activate_plugin_name() {
	require_once GPCP_DIR_PATH . 'src/class-gpcp-activator.php';
	GridPane_Cache_Purger_Plugin_Activator::activate();
}

function deactivate_plugin_name() {
	require_once GPCP_DIR_PATH . 'src/class-gpcp-deactivator.php';
	GridPane_Cache_Purger_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_plugin_name' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );

function autoload_files() {
	$files = array(
		'class-gpcp.php',
	);
	foreach ( $files as $file ) {
		require GPCP_DIR_PATH . '/src/' . $file;
	}
}

function launch() {
	autoload_files();
}
launch();
