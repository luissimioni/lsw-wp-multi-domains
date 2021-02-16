<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Lsw_Wp_Multi_Domains
 * @subpackage Lsw_Wp_Multi_Domains/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Lsw_Wp_Multi_Domains
 * @subpackage Lsw_Wp_Multi_Domains/admin
 * @author     Your Name <email@example.com>
 */
class Lsw_Wp_Multi_Domains_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $lsw_wp_multi_domains    The ID of this plugin.
	 */
	private $lsw_wp_multi_domains;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $lsw_wp_multi_domains       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $lsw_wp_multi_domains, $version ) {

		$this->lsw_wp_multi_domains = $lsw_wp_multi_domains;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Lsw_Wp_Multi_Domains_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Lsw_Wp_Multi_Domains_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->lsw_wp_multi_domains, plugin_dir_url( __FILE__ ) . 'css/lsw-wp-multi-domains-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Lsw_Wp_Multi_Domains_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Lsw_Wp_Multi_Domains_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->lsw_wp_multi_domains, plugin_dir_url( __FILE__ ) . 'js/lsw-wp-multi-domains-admin.js', array( 'jquery' ), $this->version, false );

	}

}
