<?php
/**
 * This file contains the "Pro Features" markup.
 *
 * @package Prime
 * @since 2.0.0
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}
?>

<div class="wrap about-wrap bgcrio-about-wrap">
	<div>
		<h1><?php esc_html_e( 'Create More with Crio Pro!', 'bgtfw' ); ?></h1>
		<p>
			<?php esc_html_e( 'Upgrade to Crio Pro today to get over 150 additional Customizer controls, Custom Page Headers, and more.', 'prime' ); ?>
		</p>
	</div>
	<div class="pro-feature-image" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ) . '/images/welcome/custom-page-headers.png'; ?>)"></div>
<?php do_action( 'bgtfw_pro_feature_cards' ); ?>
</div>
