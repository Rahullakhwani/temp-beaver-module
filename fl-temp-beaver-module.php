<?php
/**
 * Plugin Name: Temp beaver module
 * Plugin URI: http://example.com/
 * Description: An example plugin for beaver module.
 * Version: 1.0
 * Author: The temporary Team
 * Author URI: https://www.brainstormforce.com
 */

class temp_beaver_module_funtion {

	public static function init() {
	
		if( class_exists( 'FLBuilder' ) ) {
			require_once 'modules/infobox/infobox.php';
		}
	
	}

}
add_action( 'init', array( 'temp_beaver_module_funtion', 'init' ) );