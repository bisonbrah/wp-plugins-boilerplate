<?php
/**
 * Created by Nabeel
 * Date: 2016-01-22
 * Time: 2:38 AM
 *
 * @package WP_Plugins\Boilerplate
 */

use WP_Plugins\Boilerplate\Plugin;

if ( !function_exists( 'wp_plugin_boilerplate' ) ):
	/**
	 * Get plugin instance
	 *
	 * @return Plugin
	 */
	function wp_plugin_boilerplate()
	{
		return Plugin::get_instance();
	}
endif;

if ( !function_exists( 'wppb_view' ) ):
	/**
	 * Load view
	 *
	 * @param string $view_name
	 * @param array  $args
	 *
	 * @return void
	 */
	function wppb_view( $view_name, $args = null )
	{
		wp_plugin_boilerplate()->load_view( $view_name, $args );
	}
endif;

if ( !function_exists( 'wppb_version' ) ):
	/**
	 * Get plugin version
	 *
	 * @return string
	 */
	function wppb_version()
	{
		wp_plugin_boilerplate()->version;
	}
endif;