<?php
/**
 * @package   cf_the_editor
 * @author    David Cramer <david@digilab.co.za>
 * @license   GPL-2.0+
 * @link      
 * @copyright 2015 David Cramer <david@digilab.co.za>
 *
 * @wordpress-plugin
 * Plugin Name: CF Visual Editor
 * Plugin URI:  http://CalderaWP.com
 * Description: Caldera Forms addon - Adds an option to set a paragraph element to a visual editor
 * Version: 1.0.0
 * Author:      David Cramer <david@digilab.co.za>
 * Author URI:  http://digilab.co.za/
 * Text Domain: cf-the-editor
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define('CF_THEEDITOR_PATH', plugin_dir_path(__FILE__));
define('CF_THEEDITOR_URL', plugin_dir_url(__FILE__));

function cf_the_editor_field_type($fields){

	$fields['visual_editor'] = array(
		"field"		=>	__("Visual Editor", "cf-the-editor"),
		"file"		=>	CF_THEEDITOR_PATH . "field.php",
		"category"	=>	__("Special", "caldera-forms") .','. __("Text Fields", "caldera-forms"),
		"description" => __('Use the WP Editor', "cf-the-editor"),
		"viewer"	=>	'cf_the_editor_viewer',
		"setup"		=>	array(
			"preview"	=>	CF_THEEDITOR_PATH . "preview.php",
		)
	);

	return $fields;
}
add_filter( 'caldera_forms_get_field_types', 'cf_the_editor_field_type' );

function cf_the_editor_viewer( $value ){
	return htmlspecialchars_decode( $value );
}