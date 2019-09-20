<?php
/**
 * Plugin Name: MASHING UP Custom Fields
 * Version: {release version}
 * Author: Digitalcube
 * Author URI: https://en.digitalcube.jp
 * Text Domain: mashing_up_custom_fields
 * Domain Path: /languages
 * @package MASHING UP Custom Fields
 */

class MashingUpCustomFieldsInit {

	public function __construct() {
		$this->basename        = plugin_basename( __FILE__ );
		$this->plugin_name     = dirname( $this->basename );
		$this->dir             = plugin_dir_path( __FILE__ );
		$this->url             = plugin_dir_url( __FILE__ );
		$headers               = array(
			'name'        => 'Plugin Name',
			'version'     => 'Version',
			'domain'      => 'Text Domain',
			'domain_path' => 'Domain Path',
		);
		$data                  = get_file_data( __FILE__, $headers );
		$this->name            = $data['name'];
		$this->version         = $data['version'];
		$this->domain          = $data['domain'];
		$this->domain_path     = $data['domain_path'];
	}

}

new MashingUpCustomFieldsSet();
class MashingUpCustomFieldsSet extends MashingUpCustomFieldsInit {

	public function __construct() {
		parent::__construct();
		add_action( 'plugins_loaded', array( $this, 'plugins_loaded' ), 0 );
	}

	public function plugins_loaded() {
		load_plugin_textdomain( $this->domain, false, $this->plugin_name . $this->domain_path );

		if ( true === function_exists('acf_add_local_field_group') )
			require_once( $this->dir . 'admin/acf.php' );
	}

}
