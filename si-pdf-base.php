<?php
/**
 * File: pdf.php
 *
 * This file is used when sprout invoices generates a pdf.
 */
global $post;
error_log( 'si-pdf-base loaded' );
if ( ! empty( $post ) && class_exists( 'SI_Invoice' ) ) {
	$is_sa_invoice  = SI_Invoice::is_invoice_query();
	$is_sa_estimate = 'sa_estimate' === $post->post_type;
} else {
	$is_sa_invoice  = false;
	$is_sa_estimate = false;
}

if ( $is_sa_estimate ) {
	error_log( 'is sa estimate' );
	$template = SI_Templating_API::override_template( 'estimate' );
	error_log( 'template: ' . $template );
	load_template( $template );
} elseif ( $is_sa_invoice ) {
	$template = SI_Templating_API::override_template( 'invoice' );
	load_template( $template );
}
