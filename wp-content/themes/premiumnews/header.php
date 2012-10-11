<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<title><?php woo_title(); ?></title>
<?php woo_meta(); ?>

<link rel="stylesheet" type="text/css"  href="<?php bloginfo( 'stylesheet_url' ); ?>" media="screen" />

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option( 'woo_feedburner_url' ) != '' ) { echo get_option( 'woo_feedburner_url' ); } else { echo get_bloginfo_rss( 'rss2_url' ); } ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<!--[if lte IE 6]>
<script defer type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/images/pngfix.js"></script>
<![endif]-->

<?php include( get_template_directory() . '/includes/stylesheet.php' ); ?>
</head>

<body <?php body_class(); ?>>

<?php
	$featuredcat = get_option( 'woo_featured_category' ); // ID of the Featured Category
	if ( $featuredcat != '' ) {
		$term_data = get_term_by( 'name', esc_attr( $featuredcat ), 'category' );
		if ( isset( $term_data->term_id ) ) { $GLOBALS['ex_feat'] = $term_data->term_id; }
	}

	$vidcat = get_option( 'woo_video_category' ); // ID of the Video Category
	if ( $vidcat != '' ) {
		$term_data = get_term_by( 'name', esc_attr( $vidcat ), 'category' );
		if ( isset( $term_data->term_id ) ) { $GLOBALS['ex_vid'] = $term_data->term_id; }
	}		
?>

<div id="page">
	
	<div id="nav"><!-- START TOP NAVIGATION BAR -->
	
		<div id="nav-left">
			<?php
			if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'primary-menu' ) ) {
				wp_nav_menu( array( 'depth' => 1, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => 'lavaLamp', 'theme_location' => 'primary-menu' ) );
			} else {
			?>
			<ul id="lavaLamp">
			<?php
			if ( get_option( 'woo_custom_nav_menu' ) == 'true' ) {
        		if ( function_exists( 'woo_custom_navigation_output' ) )
					woo_custom_navigation_output( 'depth=1' );

				} else { ?>		
				<li><a href="<?php echo get_option( 'home' ); ?>/"><?php _e( 'Home', 'woothemes' ); ?></a></li>
				<?php wp_list_pages( 'depth=1&sort_column=menu_order&title_li=' ); ?>
				<?php } ?>	
			</ul>
			<?php } ?>
		</div><!--/nav-left -->

		<div id="nav-right">		
		
			<form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>/">
				
				<div id="search">
					<input type="text" value="<?php _e('Enter your search keywords here...', 'woothemes' ); ?>" onclick="this.value='';" name="s" id="s" />
					<input name="" type="image" src="<?php echo get_template_directory_uri(); ?>/styles/<?php echo "$style_path"; ?>/ico-go.gif" value="<?php _e('Go', 'woothemes' ); ?>" class="btn"  />
				</div><!--/search -->
				
			</form>
		
		</div><!--/nav-right -->
		
	</div><!--/nav-->
	
	<div id="header"><!-- START LOGO LEVEL WITH RSS FEED -->
		
		<h1><a href="<?php echo home_url( '/' ); ?>/" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"><img src="<?php if ( get_option( 'woo_logo' ) != '' ) {  echo get_option( 'woo_logo' ); } else { ?><?php echo get_template_directory_uri(); ?>/images/logo.gif<?php } ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" /></a></h1>
		

			<div id="social-connect">
				<ul>
					<li><a href="http://www.facebook.com/TRRGcom"><img src ="<?php echo get_template_directory_uri(); ?>/images/social/facebook.png" /></a></li>
					<li><a href="https://twitter.com/TRRGcom"><img src ="<?php echo get_template_directory_uri(); ?>/images/social/twitter.png" /></a></li>
					<li><a href="http://www.linkedin.com/pub/brenda-ryan/3/2a3/232"><img src ="<?php echo get_template_directory_uri(); ?>/images/social/linkedin.png" /></a></li>
					<li><a href=""><img src ="<?php echo get_template_directory_uri(); ?>/images/social/youtube.png" /></a></li>
					<li><a href=""><img src ="<?php echo get_template_directory_uri(); ?>/images/social/rss.png" /></a></li>
				</ul>
			</div>			
		<div id="header-sub">
			<img src ="<?php echo get_template_directory_uri(); ?>/images/integrity_header_960.png" />
		</div>
	</div><!--/header -->
	
	<div id="suckerfish"><!-- START CATEGORY NAVIGATION (SUCKERFISH CSS) -->
			<?php
			if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'secondary-menu' ) ) {
				wp_nav_menu( array( 'depth' => 3, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_class' => 'nav2', 'theme_location' => 'secondary-menu' ) );
			} else {
			?>
			<ul class="nav2">
			<?php
			if ( get_option( 'woo_custom_nav_menu' ) == 'true' ) {
        		if ( function_exists( 'woo_custom_navigation_output' ) )
					woo_custom_navigation_output( 'name=Woo Menu 2&depth=3' );

			} else { ?>
				<?php wp_list_categories( 'title_li=' ); ?>	
			<?php } ?>
			</ul>
			<?php } ?>
					
	</div><!--/nav2-->
	
	<div id="columns"><!-- START MAIN CONTENT COLUMNS -->