<?php
/**
 * This file contains the "Welcome" markup displayed after Crio is activated.
 *
 * @package Prime
 * @since 2.0.0
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

// Add SVGs to the wp_kses filtering.
$kses_defaults = wp_kses_allowed_html( 'post' );

$svg_args = array(
	'svg'   => array(
		'version'             => true,
		'preserveaspectratio' => true,
		'viewbox'             => true,
		'class'               => true,
		'style'               => true,
		'width'               => true,
		'height'              => true,
	),
	'g'     => array(
		'fill'  => true,
		'style' => true,
	),
	'title' => array(
		'title' => true,
		'style' => true,
	),
	'path'  => array(
		'xmlns:default' => true,
		'd'             => true,
		'fill'          => true,
		'style'         => true,
	),
);

$allowed_tags = array_merge( $kses_defaults, $svg_args );

// URL to our TMG Recommended Plugins page.
$crio_tgm_url = admin_url( 'admin.php?page=bgtfw-install-plugins' );

// Filters the 'Get Crio Pro' button on the welcome page.
$premium_url = apply_filters(
	'bgtfw_premium_url',
	'https://boldgrid.com/wordpress-themes/crio/?utm_source=Appearance_-_Crio&utm_medium=Button&utm_campaign=Crio_FTP&utm_content=Get_Crio_Pro'
);

// Filters the 'BoldGrid.com' link in the main panel of the Welcome page.
$boldgrid_link = apply_filters(
	'crio_welcome_boldgrid_link',
	'<a href="https://www.BoldGrid.com/" target="_blank">BoldGrid.com</a>'
);

// Filters the 'Post and Page Builder' link in the main panel of the Welcome page.
$boldgrid_ppb_link = apply_filters(
	'crio_welcome_boldgrid_ppb_link',
	'<a href="https://www.boldgrid.com/wordpress-page-builder-by-boldgrid/" target="_blank">Post and Page Builder</a>'
);

$boxes_array = require get_template_directory() . '/inc/partials/boxes.php';

/**
 * Filters the boxes of the 'Learning Resourcs' section of the welcome page.
 *
 * The array of boxes will be a key value array, with the key being the name
 * of the box, and the value being the html markup for the box. Keep in mind
 * that the html will later be filtered through wp_kses_post with 'svg' tags
 * added to the allowed tags.
 */
$boxes_array = apply_filters(
	'crio_welcome_boxes',
	$boxes_array
);

$boxes_string = implode( '', array_values( $boxes_array ) );

// URL to customizer with return to the current page.
global $wp;
$crio_current_page   = add_query_arg( $wp->query_string, '', home_url( $wp->request ) );
$crio_customizer_url = esc_url(
	add_query_arg(
		array(
			'url'    => urlencode( $crio_current_page ),
			'return' => $crio_current_page,
		),
		wp_customize_url()
	)
);
$crio_editor_file    = 'post-and-page-builder/post-and-page-builder.php';
?>

<div class="wrap about-wrap bgcrio-about-wrap">
	<div>
		<h1><?php esc_html_e( 'Welcome to Crio!', 'bgtfw' ); ?></h1>
		<p>
			<?php esc_html_e( 'Crio is a powerful theme that enables you to build beautiful websites without boundaries or limitations.', 'prime' ); ?>
		</p>
	</div>

	<div class="bgtfw-welcome-panel">
		<div class="bgtfw-welcome-panel-content">
			<div class="bgtfw-welcome-panel-column-container two-col">
				<?php if ( get_option( 'fresh_site' ) ) : ?>
					<div class="bgtfw-welcome-panel-column">
						<h2><?php esc_html_e( 'Getting Started', 'bgtfw' ); ?></h2>
						<p>
							<?php echo wp_kses_post( __( 'Welcome to BoldGrid Crio! In order to give you a head start editing and designing, we have provided starter content for you to customize.  You may edit any part of the content to suit your needs or delete content and pages you don\'t find valuable.  Our starter content works best with the <a href="https://wordpress.org/plugins/post-and-page-builder/" target="_blank">Post and Page Builder</a> by <a href="https://www.boldgrid.com/" target="_blank">BoldGrid</a>.', 'bgtfw' ) ); ?>
						</p>
						<?php if ( ! file_exists( WP_PLUGIN_DIR . DIRECTORY_SEPARATOR . $crio_editor_file ) ) : ?>
							<p>
								<a href="<?php echo esc_url( $crio_tgm_url ); ?>" class="button button-primary button-hero"><?php esc_html_e( 'Install Post and Page Builder', 'bgtfw' ); ?></a>
							</p>
							<p>
								<a href="<?php echo esc_url( $crio_customizer_url ); ?>"class="button button-secondary button-hero"><?php esc_html_e( 'Preview and Customize Starter Content', 'bgtfw' ); ?></a>
							</p>

						<?php elseif ( ! in_array( $crio_editor_file, apply_filters( 'active_plugins', get_option( 'active_plugins' ) ), true ) ) : ?>
							<p>
								<a href="<?php echo esc_url( add_query_arg( 'plugin_status', 'activate', $crio_tgm_url ) ); ?>" class="button button-primary button-hero crio-welcome-button"><?php esc_html_e( 'Activate Post and Page Builder', 'bgtfw' ); ?></a>
							</p>
							<p>
								<a href="<?php echo esc_url( $crio_customizer_url ); ?>"class="button button-secondary button-hero crio-welcome-button"><?php esc_html_e( 'Preview and Customize Starter Content', 'bgtfw' ); ?></a>
							</p>
						<?php else : ?>
							<p>
								<a href="<?php echo esc_url( $crio_customizer_url ); ?>"class="button button-primary button-hero crio-welcome-button"><?php esc_html_e( 'Preview and Customize Starter Content', 'bgtfw' ); ?></a>
							</p>
						<?php endif; ?>
					</div>
					<div class="bgtfw-welcome-panel-column">
						<img style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ) . '/screenshot.jpg'; ?>" />
					</div>
				<?php else : ?>
					<div class="bgtfw-welcome-panel-column">
						<h2><?php esc_html_e( 'Crio - The Theme with More', 'bgtfw' ); ?></h2>
						<p>
							<?php
							printf(
								wp_kses_post(
									/* translators: 1: BoldGrid.com Link, 2: BoldGrid.com PPB Link  */
									__(
										'Welcome to BoldGrid Crio! Crio means "I Create" in Portuguese and this is our aim: To give you the most powerful site creation tools you can use! Visit %1$s to learn about all the resources we offer. Be sure to install the recommended Post and Page Builder. Crio\'s unique Customizer was designed to integrate with the %2$s, so you can easily use your fonts and colors from the visual editor.',
										'bgtfw'
									)
								),
								$boldgrid_link,
								$boldgrid_ppb_link
							);
							?>
						</p>
					</div>
					<div class="bgtfw-welcome-panel-column">
						<img style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ) . '/images/welcome/bg-crio-pro.png'; ?>" />
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="bgtfw-welcome-panel">
		<div class="bgtfw-welcome-panel-content">
			<div class="bgtfw-welcome-panel-column-container">
				<h2><?php esc_html_e( 'Learning Resources', 'bgtfw' ); ?></h2>
				<div class="wrapper">
					<?php echo wp_kses( $boxes_string, $allowed_tags ); ?>
				</div>
			</div>
		</div>
	</div>
	<?php if ( ! class_exists( 'Crio_Premium' ) ) : ?>
	<div class="bgtfw-welcome-panel">
		<div class="bgtfw-welcome-panel-content">
			<div class="bgtfw-welcome-panel-column-container two-col">
				<div class="bgtfw-welcome-panel-column">
					<h2><?php esc_html_e( 'Go Pro', 'bgtfw' ); ?></h2>
					<p><?php esc_html_e( 'Looking for more? Upgrade to Crio Pro today to get over 150 additional Customizer controls, including Custom Page Headers and White Labeling options. For only $3.25 a month (billed annually) you can design your site with professional level confidence.', 'bgtfw' ); ?></p>
					<p>
						<a href="<?php echo esc_url( $premium_url ); ?>" target="_blank" class="button button-primary button-hero"><?php esc_html_e( 'Get Crio Pro', 'bgtfw' ); ?></a>
					</p>
				</div>
				<div class="bgtfw-welcome-panel-column">
					<img style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ) . '/images/welcome/custom-page-headers.png'; ?>" />
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
</div>
