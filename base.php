<?php
/**
 * Base Template
 *
 * This file contains the base structure of a BoldGrid Theme.
 *
 * @since 2.0
 * @package Prime
 */

global $boldgrid_theme_framework;
$configs = $boldgrid_theme_framework->get_configs();
global $post;

$is_sa_invoice  = 'sa_invoice' === $post->post_type;
$is_sa_estimate = 'sa_estimate' === $post->post_type;

?>
<!doctype html>
<!-- BoldGrid Theme Framework Version: <?php echo $configs['framework-version']; ?> -->
<html <?php language_attributes(); ?>>
<?php
	if ( $is_sa_invoice ) {
		get_template_part( 'sa_templates/invoice' );
	} elseif ( $is_sa_estimate ) {
		get_template_part( 'sa_templates/estimate' );
	} else {
		get_template_part( 'templates/head' );
	?>
	<body <?php body_class(); ?>>
		<?php do_action( 'boldgrid_header_before' ); ?>
		<div class="site-header">
			<?php do_action( 'get_header' ); ?>
			<?php get_template_part( 'templates/header/header', $configs['template']['header'] ); ?>
		</div><!-- /.header -->
		<?php do_action( 'boldgrid_header_after' ); ?>
		<?php do_action( 'boldgrid_content_before' ); ?>
		<?php $column_class = method_exists( 'BoldGrid', 'is_blog' ) && BoldGrid::is_blog() ? 'col-md-12' : ''; ?>
		<div id="content" class="site-content" role="document">
			<main class="main <?php echo BoldGrid::print_container_class( 'blog' ); ?>">
				<div class="row">
					<div class="<?php echo ! BoldGrid::display_sidebar( ) ? $column_class : 'col-md-9'; ?>">
						<?php include Boldgrid_Framework_Wrapper::boldgrid_template_path(); ?>
					</div>
					<?php if ( BoldGrid::display_sidebar( ) ) : ?>
						<div class="col-md-3">
							<aside class="sidebar">
								<?php include BoldGrid::boldgrid_sidebar_path(); ?>
							</aside><!-- /.sidebar -->
						</div>
					<?php endif; ?>
				</div>
			</main><!-- /.main -->
		</div><!-- /.content -->
		<?php do_action( 'boldgrid_content_after' ); ?>
		<?php do_action( 'boldgrid_footer_before' ); ?>
		<div class="site-footer">
			<?php do_action( 'get_footer' ); ?>
			<?php get_template_part( 'templates/footer/footer', $configs['template']['footer'] ); ?>
			<?php wp_footer(); ?>
		</div>
		<?php do_action( 'boldgrid_footer_after' ); ?>
	</body>
	<?php } ?>
</html>
