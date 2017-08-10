<?php
/*
	Plugin Name: ACF Field Separator
	Plugin URI: https://github.com/tybruffy/ACF-Field-Separator
	Description: Allows you to insert a heading in between fields.
	Version: 1.0.0
	Author: tybruffy
	Author URI: https://github.com/tybruffy/
	GitHub Plugin URI: https://github.com/tybruffy/ACF-Field-Separator
	License: GPL
*/

if ( !defined( 'ABSPATH' ) ) exit;

if ( !class_exists('acf_plugin_separator') ) :

class acf_plugin_separator {
	
	/*
	*  __construct
	*
	*  This function will setup the class functionality
	*
	*  @type	function
	*  @date	17/02/2016
	*  @since	1.0.0
	*
	*  @param	n/a
	*  @return	n/a
	*/
	
	function __construct() {
		
		// vars
		$this->settings = array(
			'version'	=> '1.0.0',
			'url'		=> plugin_dir_url( __FILE__ ),
			'path'		=> plugin_dir_path( __FILE__ )
		);
		
		// set text domain
		// https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
		load_plugin_textdomain( 'acf-FIELD_NAME', false, plugin_basename( dirname( __FILE__ ) ) . '/lang' ); 
		
		// include field
		add_action('acf/include_field_types', 	array($this, 'include_field_types')); // v5
		add_action('acf/register_fields', 		array($this, 'include_field_types')); // v4
	}
	
	
	/*
	*  include_field_types
	*
	*  This function will include the field type class
	*
	*  @type	function
	*  @date	17/02/2016
	*  @since	1.0.0
	*
	*  @param	$version (int) major ACF version. Defaults to false
	*  @return	n/a
	*/
	
	function include_field_types( $version = false ) {
		
		// support empty $version
		if( !$version ) $version = 4;
		
		// include
		include_once('acf-field-separator-v' . $version . '.php');
		
	}
}

new acf_plugin_separator();

endif;

?>
