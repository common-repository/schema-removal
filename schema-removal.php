<?php
/**
 * Plugin Name: Schema Removal
 * Plugin URI: http://schema.press
 * Description: Remove Genesis theme Schema.org structured data markup from your WordPress site.
 * Author: Hesham
 * Author URI: http://zebida.com
 * Version: 1.1.1
 * Text Domain: schema-removal
 * Domain Path: languages
 *
 * Schema Removal is distributed under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Schema Removal is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Schema. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package Schema Removal
 * @category Core
 * @author Hesham Zebida
 * @version 1.1.1
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

register_activation_hook( __FILE__, 'genesis_schema_attributes_removal_activation' );
/**
 * Ensure Genesis is active, and that the version is not less than 2.0.0.
 *
 * If not, the plugin deactivates itself.
 *
 * @since 1.0
 */
function genesis_schema_attributes_removal_activation() {
	if ( ! defined( 'PARENT_THEME_VERSION' ) || version_compare( PARENT_THEME_VERSION, '2.0.0', '<' ) ) {
		deactivate_plugins( plugin_basename( __FILE__ ) );
		wp_die(
			sprintf(
				__( 'Sorry, you cannot run Genesis Schema Removal without <a href="%s">Genesis 2.0.0</a>, or greater.', 'genesis-schema-removal' ),
				'http://shrsl.com/?~cihq'
			)
		);
	}
}
add_action( 'genesis_init', 'genesis_schema_removal_functions_init', 15 );
/**
 * Load Genesis Schema Removal Functions
 *
 * @since 1.0
 */
function genesis_schema_removal_functions_init() {
		require_once plugin_dir_path( __FILE__ ) . '/functions.php';
}

