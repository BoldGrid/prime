<?php
/**
 * Class: Boldgrid_Crio_Welcome
 *
 * @since      x.x.x
 * @package    Prime
 * @subpackage Boldgrid_Crio_Welcome
 * @author     BoldGrid <support@boldgrid.com>
 * @link       https://boldgrid.com
 */

// If this file is called directly, abort.
defined( 'WPINC' ) ? : die;

/**
 * Boldgrid_Crio_Welcome Class
 *
 * @since 2.0.0
 */
class Boldgrid_Crio_Welcome {

	/**
	 * Add hooks.
	 *
	 * @since 2.0.0
	 */
	public function add_hooks() {
		add_action( 'admin_menu', array( $this, 'add_admin_menu' ) );
	}

	/**
	 * Add menu items.
	 *
	 * @since 2.0.0
	 */
	public function add_admin_menu() {
		add_theme_page(
			__( 'Crio', 'bgtfw' ),
			__( 'Crio', 'bgtfw' ),
			'manage_options',
			'crio',
			array( $this, 'page_welcome' ),
			'none',
			2
		);
	}

	/**
	 * Display Welcome page.
	 *
	 * @since 2.0.0
	 */
	public function page_welcome() {
		$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

		// Enqueue style used for Welcome Panel on the Dashboard.
		wp_enqueue_style(
			'wp-dashboard',
			admin_url( 'css/dashboard' . $suffix . '.css' )
		);

		wp_enqueue_style(
			'prime-welcome',
			get_template_directory_uri() . '/css/welcome.css'
		);

		include get_template_directory() . '/inc/partials/welcome.php';
	}
}
