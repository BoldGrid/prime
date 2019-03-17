<?php
/**
 * No Content Template
 *
 * This displayed if no page content exists.
 *
 * @package Prime
 */
?>
<section class="no-results not-found">
	<div class="jumbotron text-center">
		<div class="container">
			<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'bgtfw' ); ?></h1>
				<p><?php esc_html_e( 'The page you requested could not be found.', 'bgtfw' ); ?></p>
			<div class="row">
				<div class="col-md-12">
					<?php
					if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
						<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'bgtfw' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
					<?php elseif ( is_search() ) : ?>
						<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'bgtfw' ); ?></p>
						<?php
							get_search_form();
					else : ?>
						<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'bgtfw' ); ?></p>
						<?php
							get_search_form();
					endif; ?>
				</div>
			</div>
		</div> <!-- .container -->
	</div> <!-- .jumbotron -->
</section><!-- .no-results -->
