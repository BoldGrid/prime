<?php
/**
 * Base Template.
 *
 * This file contains the base structure of a BoldGrid Theme.
 *
 * @since 2.0
 * @package Prime
 */

global $boldgrid_theme_framework;

$bgtfw_configs = $boldgrid_theme_framework->get_configs();

?>
<!doctype html>
<!-- BGTFW Version: <?php echo esc_html( $bgtfw_configs['framework-version'] ); ?> -->
<html <?php language_attributes(); ?>>
<?php
	$template = SI_Templating_API::override_template( 'invoice' );
	load_template( $template );
?>
</html>
