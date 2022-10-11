<?php
/**
 * Include the BoldGrid Theme Framework
 *
 * @package Prime
 */
add_action( 'widgets_init', 'bgtfw_block_widgets' );

/**
 * Bgtfw Block Widgets.
 *
 * Disable block widget editor.
 */
function bgtfw_block_widgets() {
	remove_theme_support( 'widgets-block-editor' );
}

locate_template( '/inc/boldgrid-theme-framework-config/config.php', true, true );
require_once get_template_directory() . '/inc/boldgrid-theme-framework/boldgrid-theme-framework.php';
