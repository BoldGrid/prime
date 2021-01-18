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

/**
 * This filter is added in the Boldgrid_Framework class and
 * it's function is defined in the class
 * Boldgrid_Framework_Pro_Feature_Cards.
 */
$go_pro_url = 'https://www.boldgrid.com/central/checkout/crio?utm_source=Crio_-_Pro_Features&utm_medium=CTA_Button&utm_campaign=Crio_Pro_Features';

?>

<div class="wrap about-wrap bgcrio-about-wrap">
	<div>
		<h1><?php esc_html_e( 'Create More with Crio Pro!', 'bgtfw' ); ?></h1>
		<p>
			<?php esc_html_e( 'Upgrade to Crio Pro today to get over 150 additional Customizer controls, Custom Page Headers, and more.', 'prime' ); ?>
		</p>
	</div>
	<div class="pro-feature-image">
		<img src="<?php echo esc_url( get_template_directory_uri() ) . '/images/welcome/custom-page-headers.png'; ?>"></img>
		<div class="cta-heading-container">
			<h2 class="cta-heading">Crio Pro</h2>
			<a class="cta-button" href="<?php echo esc_url( $go_pro_url ); ?>&utm_content=Upgrade_Now " target="_blank">Upgrade Now</a>
		</div>
	</div>
<?php
/**
 * This action prints the card container and the individual
 * cards dynamically based on the bgtfw configs. This action is added in
 * the class Boldgrid_Framework, and the action's callback is defined in
 * the class Boldgrid_Framework_Pro_Feature_Cards.
 */
do_action( 'bgtfw_pro_feature_cards' );
?>
</div>
