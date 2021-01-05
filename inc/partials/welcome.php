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

// URL to our TMG Recommended Plugins page.
$crio_tgm_url = admin_url( 'admin.php?page=bgtfw-install-plugins' );

// URL to customizer with return to the current page.
global $wp;
$crio_current_page = add_query_arg( $wp->query_string, '', home_url( $wp->request ) );
$crio_customizer_url = esc_url(
	add_query_arg(
		array(
			'url' => urlencode( $crio_current_page ),
			'return' => $crio_current_page,
		),
		wp_customize_url()
	)
);
$crio_editor_file = 'post-and-page-builder/post-and-page-builder.php';
?>

<div class="wrap about-wrap bgcrio-about-wrap">
	<div>
		<h1><?php esc_html_e( 'Welcome to Crio!', 'bgtfw' ); ?></h1>
		<p>
			<?php esc_html_e( 'Crio is a powerful theme that enables you to build beautiful websites without boundaries or limitations.', 'prime' ); ?>
		</p>
	</div>

	<div class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-column-container two-col">
				<?php if ( get_option( 'fresh_site' ) ) : ?>
					<div class="welcome-panel-column">
						<h2><?php esc_html_e( 'Getting Started', 'bgtfw' ); ?></h2>
						<p>
							<?php echo wp_kses_post( __( 'Welcome to BoldGrid Crio! In order to give you a head start editing and designing, we have provided starter content for you to customize.  You may edit any part of the content to suit your needs or delete content and pages you don\'t find valuable.  Our starter content works best with the <a href="https://wordpress.org/plugins/post-and-page-builder/" target="_blank">Post and Page Builder</a> by <a href="https://www.boldgrid.com/" target="_blank">BoldGrid</a>.', 'bgtfw' ) ); ?>
						</p>
						<?php if ( ! file_exists( WP_PLUGIN_DIR . DIRECTORY_SEPARATOR . $crio_editor_file ) ) : ?>
							<p>
								<a href="<?php echo esc_url( $crio_tgm_url ) ?>" class="button button-primary button-hero"><?php esc_html_e( 'Install Post and Page Builder', 'bgtfw' ); ?></a>
							</p>
							<p>
								<a href="<?php echo esc_url( $crio_customizer_url ); ?>"class="button button-secondary button-hero"><?php esc_html_e( 'Preview and Customize Starter Content', 'bgtfw' ); ?></a>
							</p>

						<?php elseif ( ! in_array( $crio_editor_file, apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) : ?>
							<p>
								<a href="<?php echo esc_url( add_query_arg( 'plugin_status', 'activate', $crio_tgm_url ) ) ?>" class="button button-primary button-hero crio-welcome-button"><?php esc_html_e( 'Activate Post and Page Builder', 'bgtfw' ); ?></a>
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
					<div class="welcome-panel-column">
						<img style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ) . '/screenshot.png'; ?>" />
					</div>
				<?php else : ?>
					<div class="welcome-panel-column">
						<h2><?php esc_html_e( 'Crio - The Theme with More', 'bgtfw' ); ?></h2>
						<p>
							<?php echo wp_kses_post( __( 'Welcome to BoldGrid Crio! Crio means "I Create" in Portuguese and this is our aim: To give you the most powerful site creation tools you can use! Visit <a href="https://www.BoldGrid.com/" target="_blank">BoldGrid.com</a> to learn about all the resources we offer. Be sure to install the recommended Post and Page Builder. Crio\'s unique Customizer was designed to integrate with the <a href="https://www.boldgrid.com/wordpress-page-builder-by-boldgrid/" target="_blank">Post and Page Builder</a>, so you can easily use your fonts and colors from the visual editor.', 'bgtfw' ) ); ?>
						</p>
					</div>
					<div class="welcome-panel-column">
						<img style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ) . '/images/welcome/bg-crio-pro.png'; ?>" />
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-column-container">
				<h2><?php esc_html_e( 'Learning Resources', 'bgtfw' ); ?></h2>
				<div class="wrapper">
					<div class="box a">
						<div class="learning-item">
							<div class="learning-image">
							<svg version="1.2" preserveAspectRatio="none" viewBox="0 0 24 24" class="ng-element" style="opacity: 1; mix-blend-mode: normal; fill: rgb(249, 91, 38); width: 79px; height: 79px;"><g><path xmlns:default="http://www.w3.org/2000/svg" d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z" style="fill: rgb(249, 91, 38);"></path></g></svg>
							</div>
							<div class="learning-text">
								<h3><?php esc_html_e( 'Crio Documentation and Tutorials', 'bgtfw' ); ?></h3>
								<p><?php esc_html_e( 'Step by Step tutorials and easy to follow documentation!', 'bgtfw' ); ?></p>
							</div>
						</div>
					</div>
					<div class="box b">
						<div class="learning-item">
							<div class="learning-image">
								<svg version="1.2" preserveAspectRatio="none" viewBox="0 0 24 24" class="ng-element" style="opacity: 1; mix-blend-mode: normal; fill: rgb(249, 91, 38); width: 79px; height: 79px;"><g><path xmlns:default="http://www.w3.org/2000/svg" d="M20 15.5c-1.25 0-2.45-.2-3.57-.57-.35-.11-.74-.03-1.02.24l-2.2 2.2c-2.83-1.44-5.15-3.75-6.59-6.59l2.2-2.21c.28-.26.36-.65.25-1C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.5c0-.55-.45-1-1-1zM19 12h2c0-4.97-4.03-9-9-9v2c3.87 0 7 3.13 7 7zm-4 0h2c0-2.76-2.24-5-5-5v2c1.66 0 3 1.34 3 3z" style="fill: rgb(249, 91, 38);"></path></g></svg>
							</div>
							<div class="learning-text">
								<h3><?php esc_html_e( '1 on 1 Support', 'bgtfw' ); ?></h3>
								<p><?php esc_html_e( 'Need help with Crio that you don\'t see in our Docs or user groups? Contact our Support Team (Premium Feature)', 'bgtfw' ); ?></p>
							</div>
						</div>
					</div>
					<div class="box c">
						<div class="learning-item">
							<div class="learning-image">
								<svg version="1.2" preserveAspectRatio="none" viewBox="0 0 24 24" class="ng-element" style="opacity: 1; mix-blend-mode: normal; fill: rgb(249, 91, 38); width: 82px; height: 82px;"><g><path xmlns:default="http://www.w3.org/2000/svg" d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" style="fill: rgb(249, 91, 38);"></path></g></svg>
							</div>
							<div class="learning-text">
								<h3><?php esc_html_e( 'Team Orange', 'bgtfw' ); ?></h3>
								<p><?php esc_html_e( 'An active and helpful place to get answers and tips from users like you!', 'bgtfw' ); ?></p>
							</div>
						</div>
					</div>
					<p class="box">
						<a href="http://boldgrid.com/support/boldgrid-crio" target="_blank" class="button button-secondary"><?php esc_html_e( 'Browse Docs', 'bgtfw' ); ?></a>
					</p>
					<p class="box">
						<a href="https://www.boldgrid.com/central/account/help/premium" target="_blank" class="button button-secondary"><?php esc_html_e( 'Get Support', 'bgtfw' ); ?></a>
					</p>
					<p class="box">
						<a href="https://www.facebook.com/groups/BGTeamOrange" target="_blank" class="button button-secondary"><?php esc_html_e( 'Join Us', 'bgtfw' ); ?></a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<?php if ( ! class_exists( 'Crio_Premium' ) ) : ?>
	<div class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-column-container two-col">
				<div class="welcome-panel-column">
					<h2><?php esc_html_e( 'Go Pro', 'bgtfw' ); ?></h2>
					<p><?php esc_html_e( 'Looking for more? Upgrade to Crio Pro today to get over 150 additional Customizer controls, including Custom Page Headers and White Labeling options. For only $3.25 a month (billed annually) you can design your site with professional level confidence.', 'bgtfw' ); ?></p>
					<p>
						<a href="https://boldgrid.com/wordpress-themes/crio/?utm_source=Appearance_-_Crio&utm_medium=Button&utm_campaign=Crio_FTP&utm_content=Get_Crio_Pro" target="_blank" class="button button-primary button-hero"><?php esc_html_e( 'Get Crio Pro', 'bgtfw' ); ?></a>
					</p>
				</div>
				<div class="welcome-panel-column">
					<img style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ) . '/images/welcome/custom-page-headers.png'; ?>" />
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
</div>
