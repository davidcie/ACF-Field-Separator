<?php
/*
	Plugin Name: ACF Field Separator
	Plugin URI: https://github.com/davidcie/ACF-Field-Separator
	Description: Allows you to insert a heading in between fields.
	Version: 1.0.0
	Author: Dawid Ciecierski
	Author URI: https://github.com/davidcie/
	GitHub Plugin URI: https://github.com/davidcie/ACF-Field-Separator
	License: GPL
*/

function include_field_types_field_separator( $version ) {
    include_once('acf-field_separator-v5.php');
}
add_action('acf/include_field_types', 'include_field_types_field_separator'); 

?>
