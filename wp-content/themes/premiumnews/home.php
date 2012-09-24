<?php get_header(); ?>

		<div class="col1">
		<?php
			include( get_template_directory() . '/includes/featured.php' );
			
			if( get_option( 'woo_show_video' ) == 'true' ) { include( get_template_directory() . '/includes/video.php' ); }

			$layout = get_option( 'woo_layout' );
			if ( $layout == 'false' ) {
				include( 'layouts/default.php' );
			} else {
				include( 'layouts/blog.php' );
			}
		?>
		</div><!--/col1-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>