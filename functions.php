<?php
/**
 * Include the BoldGrid Theme Framework
 *
 * @package Prime
 */

locate_template( '/inc/boldgrid-theme-framework-config/config.php', true, true );
require_once get_template_directory() . '/inc/boldgrid-theme-framework/boldgrid-theme-framework.php';

function wpb_add_google_fonts() {
 
wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i', false ); 
}
 
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
