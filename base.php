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
global $post;

if ( ! empty( $post ) && class_exists( 'SI_Invoice' ) ) {
	$is_sa_invoice  = SI_Invoice::is_invoice_query();
	$is_sa_estimate = 'sa_estimate' === $post->post_type;
} else {
	$is_sa_invoice  = false;
	$is_sa_estimate = false;
}

$bgtfw_configs = $boldgrid_theme_framework->get_configs();

$has_header_template = apply_filters( 'crio_premium_get_page_header', get_the_ID() );
$has_header_template = get_the_ID() === $has_header_template ? false : $has_header_template;
$template_has_title  = get_post_meta( $has_header_template, 'crio-premium-template-has-page-title', true );

$has_sticky_template = apply_filters( 'crio_premium_get_sticky_page_header', get_the_ID() );
$has_sticky_template = get_the_ID() === $has_sticky_template ? false : $has_sticky_template;

?>
<!doctype html>
<!-- BGTFW Version: <?php echo esc_html( $bgtfw_configs['framework-version'] ); ?> -->
<html <?php language_attributes(); ?>>
<?php
if ( $is_sa_estimate ) {
	$template = SI_Templating_API::override_template( 'estimate' );
	load_template( $template );
} elseif ( $is_sa_invoice ) {
	$template = SI_Templating_API::override_template( 'invoice' );
	load_template( $template );
} else {
	get_template_part( 'templates/head' );
	?>
	<body
	<?php
	body_class();
	$container_type = apply_filters( 'bgtfw_get_container_type', $post );
	echo ( ! empty( $container_type ) && $post !== $container_type ? 'data-container="' . esc_attr( $container_type ) . '"' : '' );

	$max_width_attributes = apply_filters( 'bgtfw_get_max_width', $post );
	if ( ! empty( $max_width_attributes ) && $post !== $max_width_attributes ) {
		foreach ( $max_width_attributes as $attribute => $value ) {
			echo ' data-' . esc_attr( $attribute ) . '="' . esc_attr( $value ) . '"';
		}
	}
	?>
		>
		<?php
			// Invoking core hook for plugins to hook first in place on the body content. Ref: https://core.trac.wordpress.org/ticket/46679.
			do_action( 'wp_body_open' ); // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound
		?>
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'prime' ); ?></a>
		<?php do_action( 'boldgrid_header_before' ); ?>
		<div <?php BoldGrid::add_class( 'site_header', array( 'bgtfw-header', 'site-header' ) ); ?>>
			<?php
				// Invoking core hook for plugins to hook into header.
				do_action( 'get_header' ); // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound
				do_action( 'crio_premium_remove_redirect' );
			?>
			<?php

			if ( ! $has_header_template ) {
				get_template_part( 'templates/header/header', $bgtfw_configs['template']['header'] );
				?>
			</div><!-- /.header -->
				<?php
			}
			?>
		<?php do_action( 'boldgrid_header_after', $has_sticky_template ); ?>
		<?php do_action( 'boldgrid_content_before' ); ?>

		<?php if ( ! $template_has_title ) : ?>
		<div id="content" <?php BoldGrid::add_class( 'site_content', array( 'site-content' ) ); ?> role="document">
			<?php do_action( 'bgtfw_page_header' ); ?>
			<?php if ( 'above' === get_theme_mod( 'bgtfw_global_title_position' ) && ! $boldgrid_theme_framework->woo->is_shop_page() && ! $template_has_title ) : ?>
				<?php get_template_part( 'templates/page-headers' ); ?>
			<?php endif; ?>
		<?php endif; ?>
			<div id="main-wrapper" <?php BoldGrid::add_class( 'main_wrapper', array( 'main-wrapper' ) ); ?>>
				<main <?php BoldGrid::add_class( 'main', array( 'main' ) ); ?>>

					<?php if ( 'above' !== get_theme_mod( 'bgtfw_global_title_position' ) && ! $boldgrid_theme_framework->woo->is_shop_page() && ! $template_has_title ) : ?>
						<?php get_template_part( 'templates/page-headers' ); ?>
					<?php endif; ?>
					<?php do_action( 'boldgrid_main_top' ); ?>
					<?php require Boldgrid_Framework_Wrapper::boldgrid_template_path(); ?>
					<?php do_action( 'boldgrid_main_bottom' ); ?>
				</main><!-- /.main -->
				<?php if ( BoldGrid::display_sidebar() && ( ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) || 'above' !== get_theme_mod( 'bgtfw_global_title_position' ) ) ) : ?>
					<?php include BoldGrid::boldgrid_sidebar_path(); ?>
				<?php endif; ?>
			</div>
		</div><!-- /.content -->
		<?php do_action( 'boldgrid_content_after' ); ?>
		<?php do_action( 'boldgrid_footer_before' ); ?>
		<?php
			// Invoking core hook for plugins to hook into footer.
			do_action( 'get_footer' ); // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound
		?>
		<?php get_template_part( 'templates/footer/footer', $bgtfw_configs['template']['footer'] ); ?>
		<?php wp_footer(); ?>
		<?php do_action( 'boldgrid_footer_after' ); ?>
	</body>
				<?php } ?>
</html>
