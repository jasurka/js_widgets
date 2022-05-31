<?php
/**
 * Plugin Name: JS Elementor Widgets
 * Author: StylemixThemes
 * Author URI: https://stylemixthemes.com/
 * Description: Road to Senior developer.
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Version: 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define('JS_ELEMENTOR_VERSION', '1.0.0');
define('JS_ELEMENTOR_PATH', dirname(__FILE__));
define('JS_ELEMENTOR_FILES_PATH', plugins_url('/', __FILE__));



// Check if elementor installed

if ( ! function_exists('js_elementor_installed' ) ) {

    function js_elementor_installed() {
        $elementor_path    = 'elementor/elementor.php';
        $installed_plugins = get_plugins();
    } 

    return isset( $installed_plugins[ $elementor_path ] );

}

if ( ! class_exists( 'JS_Elementor_Widgets' ) ) {
    require JS_ELEMENTOR_PATH . '/includes/class-js-elementor-widgets.php';;
}