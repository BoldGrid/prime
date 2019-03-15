<?php
/**
 * Class: Boldgrid_Crio_Welcome
 *
 * @since      x.x.x
 * @package    Boldgrid_Crio
 * @subpackage Boldgrid_Crio_Welcome
 * @author     BoldGrid <support@boldgrid.com>
 * @link       https://boldgrid.com
 */

// If this file is called directly, abort.
defined( 'WPINC' ) ? : die;

/**
 * Boldgrid_Crio_Welcome Class
 *
 * @since x.x.x
 */
class Boldgrid_Crio_Welcome {

	/**
	 * Menu slug for welcome page.
	 *
	 * @since  x.x.x
	 * @access protected
	 * @var    string
	 */
	protected $menu_slug = 'crio-welcome';

	/**
	 * Starter Content Slug
	 *
	 * For example, the "crio-starter-content" in admin.php?page=crio-starter-content.
	 *
	 * @since  x.x.x
	 * @access protected
	 * @var    string
	 */
	protected $starter_content_slug = 'crio-starter-content';

	/**
	 * Starter Content URL.
	 *
	 * @since  x.x.x
	 * @access protected
	 * @var    string
	 */
	protected $starter_content_url;

	/**
	 * URL to the welcome page.
	 *
	 * @since  x.x.x
	 * @access protected
	 * @var    string
	 */
	protected $welcome_url = '';

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since x.x.x
	 */
	public function __construct() {
		$this->starter_content_url = admin_url( 'admin.php?page=' . $this->starter_content_slug );
		$this->welcome_url = admin_url( 'admin.php?page=' . $this->menu_slug );
	}

	/**
	 * Add hooks.
	 *
	 * @since x.x.x
	 */
	public function add_hooks() {
		add_action( 'admin_menu', array( $this, 'add_admin_menu' ) );
	}

	/**
	 * Add menu items.
	 *
	 * @since x.x.x
	 */
	public function add_admin_menu() {

		// URL to the customizer.
		$customize_url = add_query_arg(
			'return',
			urlencode( wp_unslash( $_SERVER['REQUEST_URI'] ) ),
			admin_url( 'customize.php' )
		);

		add_theme_page(
			__( 'Crio', 'bgtfw' ),
			__( 'Crio', 'bgtfw' ),
			'manage_options',
			$this->menu_slug,
			array( $this, 'page_welcome' ),
			'none',
			2
		);
	}

	/**
	 * Connect Page Scripts.
	 *
	 * Hook into library's Boldgrid\Library\Library\Page\Connect\addScripts action and add js / css.
	 *
	 * @since 2.0.0
	 */
	public function connect_scripts() {

		// Set BoldGrid Crio > Registration as active menu item.
		wp_enqueue_script(
			'crio-welcome',
			get_template_directory_uri() . '/js/welcome.js',
			array( 'jquery' )
		);

		/*
		 * Hide notices on the Dashboard > BoldGrid Crio > Registration page. The user's primary
		 * goal on this page is to enter their key, and we do not want to distract them with other
		 * notices such as TGMPA notices.
		 */
		$css = '.wrap .notice {display: none;}';
		wp_add_inline_style( 'bglib-api-notice-css', $css );
	}

	/**
	 * Display Welcome page.
	 *
	 * @since x.x.x
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
