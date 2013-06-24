<?php
/*
Plugin Name: MP6 Light
Plugin URI: http://wordpress.org/extend/plugins/mp6-light/
Description: This takes the MP6 color scheme and makes it a bit lighter.
Version: 1.0
Author: George Stephanis
Author URI: http://stephanis.info
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

add_action( 'init', 'mp6_light_register_styles' );
function mp6_light_register_styles() {
	wp_register_style(
		'mp6-light',
		plugins_url( 'mp6-light.css', __FILE__ ),
		false,
		filemtime( plugin_dir_path( __FILE__ ) . 'mp6-light.css' )
	);
}

add_action( 'admin_enqueue_scripts', 'mp6_light_enqueue_styles', 3000 );
function mp6_light_enqueue_styles() {
	if ( 'mp6' == get_user_option('admin_color') )
		wp_enqueue_style( 'mp6-light' );
}
