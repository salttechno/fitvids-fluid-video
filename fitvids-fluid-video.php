<?php
/**
 * Plugin Name:       Install FitVids - Embed fluid width Videos
 * Plugin URI:        https://wordpress.org/plugins/install-fitvids-embed-fluid-width-videos
 * Description:       The easiest & lightest WordPress plugin for fluid width video embeds. No extra settings required. Just install the plugin and enjoy responsive video embeds on your blog.
 * Version:           1.0.0
 * Author:            SaltTechno
 * Author URI:        https://themes.salttechno.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       fitvids-fluid-video
 * Domain Path:       /languages
 *
 * 'Install FitVids - Embed fluid width Videos' is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * 'Install FitVids - Embed fluid width Videos' is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with 'Install FitVids - Embed fluid width Videos'. If not, see http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'FITVIDS_FLUID_VIDEO_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-fitvids-fluid-video-activator.php
 */
function activate_fitvids_fluid_video() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fitvids-fluid-video-activator.php';
	Fitvids_Fluid_Video_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-fitvids-fluid-video-deactivator.php
 */
function deactivate_fitvids_fluid_video() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fitvids-fluid-video-deactivator.php';
	Fitvids_Fluid_Video_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_fitvids_fluid_video' );
register_deactivation_hook( __FILE__, 'deactivate_fitvids_fluid_video' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-fitvids-fluid-video.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_fitvids_fluid_video() {

	$plugin = new Fitvids_Fluid_Video();
	$plugin->run();

}
run_fitvids_fluid_video();
