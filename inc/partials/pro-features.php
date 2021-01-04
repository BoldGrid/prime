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

<?php do_action( 'bgtfw_pro_feature_cards' ); ?>
</div>
