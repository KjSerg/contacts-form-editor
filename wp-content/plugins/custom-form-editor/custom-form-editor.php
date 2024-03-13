<?php
/*
Plugin Name: Custom Form Editor
Description: Візуальний редактор форм на основі carbonfields
Version: 1.0
Author: Каланджій Сергій
Author URI: https://web-mosaica.art/
Plugin URI: https://github.com/KjSerg/contacts-form-editor
*/

define( 'CFE__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'CFE__PLUGIN_NAME', 'custom-form-editor' );

require_once( CFE__PLUGIN_DIR . 'form-post-type.php' );
require_once( CFE__PLUGIN_DIR . 'form-short-code.php' );
require_once( CFE__PLUGIN_DIR . 'carbonfields-init.php' );

add_action( 'admin_notices', function () {
	echo '<div id="' . CFE__PLUGIN_NAME . '-notice" class="notice" style="">Custom Form Editor увімкнено</div>';
	if ( class_exists( 'Carbon_Fields\Carbon_Fields' ) ) {
		echo '<div id="' . CFE__PLUGIN_NAME . '-notice1" class="notice" style="">Carbon_Fields увімкнено</div>';
	}
} );

