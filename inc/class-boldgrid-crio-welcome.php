<?php
/**
 * Class: Boldgrid_Crio_Welcome
 *
 * @since      2.1.0
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
		// This needs to be a high priority, to be sure it runs before adding notice counts.
		add_action( 'admin_menu', array( $this, 'add_admin_menu' ), 1 );
	}

	/**
	 * Add menu items.
	 *
	 * @since 2.0.0
	 */
	public function add_admin_menu() {
		if ( is_plugin_active( 'crio-premium/crio-premium.php' ) && class_exists( 'Crio_Premium' ) ) {
			$crio_premium = new Crio_Premium();
			if ( $crio_premium->validate() ) {
				return;
			}
		}

		$menus    = $GLOBALS['menu'];
		$priority = array_filter( $menus, function( $item ) {
			return 'themes.php' === $item[2];
		} );
		$priority = ! empty( $priority ) && 1 === count( $priority ) ? key( $priority ) - 1 : null;

		add_menu_page(
			__( 'Crio', 'bgtfw' ),
			__( 'Crio', 'bgtfw' ),
			'edit_theme_options',
			'crio',
			array( $this, 'page_welcome' ),
			get_template_directory_uri() . '/images/crio_logo.svg',
			$priority
		);

		add_submenu_page(
			'crio',
			'Pro Features',
			'Pro Features',
			'edit_theme_options',
			'crio_pro_features',
			array( $this, 'page_pro_features' )
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

	/**
	 * Display Welcome page.
	 *
	 * @since 2.0.0
	 */
	public function page_pro_features() {
		$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

		// Enqueue style used for Premium Features Panel on the Dashboard.
		wp_enqueue_style(
			'wp-dashboard',
			admin_url( 'css/dashboard' . $suffix . '.css' )
		);

		wp_enqueue_style(
			'prime-pro-features',
			get_template_directory_uri() . '/css/pro-features.css'
		);

		include get_template_directory() . '/inc/partials/pro-features.php';
	}
}
