<?php
/**
 * Footer Template
 *
 * This file contains the markup for the footer template.
 *
 * @since 2.0
 * @package Prime
 */

?>
<footer id="colophon" <?php bgtfw_footer_class( array( 'site-footer' ) ); ?> role="contentinfo" <?php BoldGrid_Framework_Schema::footer( true ); ?>>
	<?php do_action( 'boldgrid_footer_top' ); ?>
	<div <?php bgtfw_inner_footer_class( 'footer-content' ) ?>>
		<div class="social-menu-wrapper">
			<?php do_action( 'boldgrid_menu_social' ); ?>
		</div>
		<div class="footer-center-menu-wrapper">
			<?php do_action( 'boldgrid_menu_footer_center' ); ?>
		</div>
		<div class="attribution-theme-mods-wrapper">
			<?php do_action( 'boldgrid_display_attribution_links' ); ?>
		</div>
		<div class="contact-block-wrapper">
			<?php do_action( 'boldgrid_display_contact_block' ); ?>
		</div>
	</div>
	<?php do_action( 'boldgrid_footer_bottom' ); ?>
</footer><!-- #colophon -->
