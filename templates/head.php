<?php
/**
 * Head Template
 *
 * This file contains the markup for head tag used in the base.php of
 * a prime theme.
 *
 * @package Prime
 * @license GPL-3.0-or-later
 */
global $post;

if ( ! empty( $post ) && class_exists( 'SI_Invoice' ) ) {
	$is_sa_invoice  = SI_Invoice::is_invoice_query();
	$is_sa_estimate = 'sa_estimate' === $post->post_type;
} else {
	$is_sa_invoice  = false;
	$is_sa_estimate = false;
}

?>
<head>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php wp_head();
	if ( $is_sa_invoice || $is_sa_estimate ) {
		do_action( 'si_head', true );
	}
	?>
</head>
