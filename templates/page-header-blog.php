<?php
/**
 * Blog Page Entry Header Template
 *
 * This file contains the markup for the blog page's entry header.
 *
 * @package Prime
 */
?>
<div <?php BoldGrid::add_class( 'page_header_wrapper', [ 'page-header-wrapper' ] ); ?>>
	<header <?php BoldGrid::add_class( 'blog_page_title', [ 'page-header', has_post_thumbnail( get_option( 'page_for_posts', true ) ) ? 'has-featured-image-header' : '' ] ) ?> <?php bgtfw_featured_img_bg( get_option( 'page_for_posts', true ), true ); ?>>
		<div <?php BoldGrid::add_class( 'featured_image', [ 'featured-imgage-header' ] ); ?>>
			<?php
				printf(
					'<h1 class="page-title %1$s"><a %2$s href="%3$s" rel="bookmark">%4$s</a></h1>',
					esc_attr( get_theme_mod( 'bgtfw_global_title_size' ) ),
					BoldGrid::add_class( 'pages_title', [ 'link' ], false ),
					esc_url( get_permalink( get_option( 'page_for_posts', true ) ) ),
					wp_kses_post( get_the_title( get_option( 'page_for_posts', true ) ) )
				);
			?>
		</div>
	</header>
</div>
