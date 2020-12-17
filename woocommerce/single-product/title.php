<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @package    WooCommerce\Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$has_header_template = apply_filters( 'crio_premium_get_page_header', get_the_ID() );
$has_header_template = get_the_ID() === $has_header_template ? false : $has_header_template;
$template_has_title  = get_post_meta( $has_header_template, 'crio-premium-template-has-page-title', true );

if ( ! $template_has_title ) {
	the_title( '<h1 class="product_title entry-title">', '</h1>' );
}
