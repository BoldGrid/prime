<?php
/**
 * Prime Configuration File.
 *
 * This file contains the configuration options used in the Prime theme.
 *
 * @package Prime
 */

if ( ! function_exists( 'boldgrid_prime_framework_config' ) ) {
	/**
	 * Boldgrid Theme Framework Configs
	 *
	 * Filters the theme framework configurations.
	 *
	 * @since 1.0.0
	 */
	function boldgrid_prime_framework_config( $boldgrid_framework_configs ) {

		// Disable old typography controls in favor of new ones.
		$boldgrid_framework_configs['customizer-options']['typography']['controls']['main_text'] = false;
		$boldgrid_framework_configs['customizer-options']['typography']['controls']['subheadings'] = false;
		$boldgrid_framework_configs['customizer-options']['site-title']['site-title'] = false;

		// Waiting for all themes to opt in before removing switch.
		// Enable typography controls in the customizer.
		$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;

		// Enable Sticky Footer.
		$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;

		// Waiting for all themes to opt in before removing switch.
		// Remove the wrong attribution links from the footer.
		$boldgrid_framework_configs['temp']['attribution_links'] = true;

		// Waiting for all themes to opt in before removing switch.
		// Enable the color palettes in the customizer.
		$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;

		// Waiting for all themes to opt in before removing switch.
		// Enable Bootstrap SCSS Compiling.
		$boldgrid_framework_configs['bootstrap-compile'] = true;

		// Waiting for all themes to opt in before removing switch.
		// Turn on the parent theme template engine.
		$boldgrid_framework_configs['boldgrid-parent-theme'] = true;

		// Set Theme Name.
		$boldgrid_framework_configs['theme_name'] = 'prime';

		// This theme doesn't support a background image.
		$boldgrid_framework_configs['customizer-options']['background']['defaults']['background_image'] = false;

		// Disable Call to Action Widget.
		$boldgrid_framework_configs['template']['call-to-action'] = 'disabled';

		// Default Colors.
		$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array(
			array(
				'default' => true,
				'format' => 'palette-primary',
				'neutral-color' => '#ffffff',
				'colors' => array(
					'#f95b26',
					'#1a1a1a',
					'#efefef',
					'#fff7bd',
					'#1a1a1a',
				),
			),
			array(
				'format' => 'palette-primary',
				'neutral-color' => '#ffffff',
				'colors' => array(
					'#4392f1',
					'#1a1a1a',
					'#e8e9eb',
					'#ff5e5b',
					'#1a1a1a',
				),
			),
			array(
				'format' => 'palette-primary',
				'neutral-color' => '#6b6570',
				'colors' => array(
					'#b7f0ad',
					'#ffffff',
					'#4a314d',
					'#f0add9',
					'#6b6570',
				),
			),
			array(
				'format' => 'palette-primary',
				'neutral-color' => '#333333',
				'colors' => array(
					'#e1d89f',
					'#ffffff',
					'#494949',
					'#f07e13',
					'#333333',
				),
			),
			array(
				'format' => 'palette-primary',
				'neutral-color' => '#f1faee',
				'colors' => array(
					'#e3170a',
					'#1a1a1a',
					'#e3e4db',
					'#01baef',
					'#1a1a1a',
				),
			),
		);

		// Add container to header.
		$boldgrid_framework_configs['template']['header'] = 'container';

		// Configs above will override framework defaults.
		return $boldgrid_framework_configs;
	}
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_prime_framework_config' );

// Site Title & Logo Controls.
if ( ! function_exists( 'boldgrid_prime_filter_logo_controls' ) ) {
	/**
	 * Logo Filter Configs
	 *
	 * This filters the kirki controls for the logo defaults.
	 *
	 * @since 1.0.0
	 */
	function boldgrid_prime_filter_logo_controls( $controls ) {
		// Reset Site Title Margin.
		$controls['logo_margin_top']['default'] = '0';
		$controls['logo_margin_bottom']['default'] = '0';
		// Controls above will override framework defaults.
		return $controls;
	}
}
add_filter( 'kirki/fields', 'boldgrid_prime_filter_logo_controls' );

// Load the BoldGrid Library
if ( ! class_exists( 'Boldgrid_Premium_Loader' ) ) {
	require_once get_template_directory() . '/inc/class-boldgrid-premium-loader.php';
}

$loader = new Boldgrid_Premium_Loader();

// Enable the ClaimPremiumKey notice.
add_filter( 'Boldgrid\Library\Library\Notice\ClaimPremiumKey_enable', '__return_true' );
