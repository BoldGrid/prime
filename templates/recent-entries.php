<?php
/**
 * Recent Entries Template
 *
 * This file contains the markup for recent entries displayed in the
 * 404 pages of the Prime theme.
 *
 * @package Prime
 */
?>
<?php
	$bgtfw_recent_posts = wp_get_recent_posts( array( 'numberposts' => '10', 'post_status' => 'publish' ) );
	$bgtfw_pages = get_pages( array( 'sort_column' => 'menu_order' ) );
?>

<?php if ( $bgtfw_recent_posts || $bgtfw_pages ) : ?>
	<div class="row">
		<?php if ( $bgtfw_recent_posts ) : ?>
			<div class="<?php echo ! $bgtfw_pages ? 'col-md-12' : 'col-md-6'; ?> search-posts">
				<h3><?php _e( 'Recent Articles', 'bgtfw' ); ?></h3>
				<ul class="list-group">
					<?php
						$bgtfw_args = array( 'numberposts' => '10', 'post_status' => 'publish' );
						$bgtfw_recent_posts = wp_get_recent_posts( $bgtfw_args );
					foreach ( $bgtfw_recent_posts as $bgtfw_recent ) {
						if ( $bgtfw_recent['post_title'] ) {
							echo '<li class="list-group-item"><a href="' . get_permalink( $bgtfw_recent['ID'] ) . '">' . $bgtfw_recent['post_title'] . '</a></li>';
						}
					}
					?>
				</ul>
			</div> <!-- .search-posts -->
		<?php endif; ?>
		<?php if ( $bgtfw_pages ) : ?>
			<div class="<?php echo ! $bgtfw_recent_posts ? 'col-md-12' : 'col-md-6'; ?> search-pages">
				<h3><?php _e( 'Page Sitemap', 'bgtfw' ); ?></h3>
				<ul class="list-group">
					<?php
						$count = 0;
					foreach ( $bgtfw_pages as $bgtfw_page ) {
						if ( $bgtfw_page->post_title && $count < 10 ) {
							echo '<li class="list-group-item"><a href="' . get_permalink( $bgtfw_page->ID ) . '">' . $bgtfw_page->post_title . '</a></li>';
						}
						$count++;
					}
					?>
				</ul>
			</div> <!-- .search-pages -->
		<?php endif; ?>
	</div> <!-- .row -->
<?php endif; ?>
