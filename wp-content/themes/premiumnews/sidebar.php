<div class="col2">

	<?php include( 'ads/ads-management.php' ); ?>

	<?php include( 'ads/ads-top.php' ); ?>
	
	<div class="sideTabs">
			
		<ul class="idTabs">
			<li><a href="#pop"><?php _e( 'POPULAR', 'woothemes' ); ?></a></li>
			<li><a href="#comm"><?php _e( 'COMMENTS', 'woothemes' ); ?></a></li>
			<li><a href="#feat"><?php _e( 'FEATURED', 'woothemes' ); ?></a></li>
			<?php if ( function_exists( 'wp_tag_cloud' ) ) { ?><li><a href="#tagcloud"><?php _e( 'TAG CLOUD', 'woothemes' ); ?></a></li><?php } ?>
		</ul><!--/idTabs-->
	
	</div><!--/sideTabs-->
	
	<div class="fix" style="height:2px;"></div>
	
	<div class="navbox">
		
		<ul class="list1" id="pop">
            <?php include( get_template_directory() . '/includes/popular.php' ); ?>                    
		</ul>

		<ul class="list3" id="comm">
            <?php include( get_template_directory() . '/includes/comments.php' ); ?>                    
		</ul>

		<ul class="list4" id="feat">
			<?php 
				$featuredcat = get_option('woo_featured_category'); // ID of the Featured Category				
				$the_query = new WP_Query('category_name=' . $featuredcat . '&showposts=10&orderby=post_date&order=desc');	
				while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;
			?>
			
				<li><a title="<?php _e( 'Permanent Link to', 'woothemes' ); ?> <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
			
			<?php endwhile; ?>		
		</ul>

		<?php if (function_exists('wp_tag_cloud')) { ?>
		
			<span class="list1" id="tagcloud">
				<?php wp_tag_cloud('smallest=10&largest=18'); ?>
			</span>
		
		<?php } ?>
		
	</div><!--/navbox-->
	
	<?php if (get_option('woo_flickr_id') != "") { ?>
	
		<div class="flickr">
			<h2><?php _e( 'Photos from our Flickr stream', 'woothemes' ); ?></h2>
			<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo get_option('woo_flickr_entries'); ?>&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=<?php echo get_option('woo_flickr_id'); ?>"></script>		
	        <div class="fix"></div>
			<?php $flickr_url = get_option('woo_flickr_url'); ?>			
            <h2 class="flickr-ar"><a href="<?php echo "$flickr_url"; ?>"><?php _e( 'See all photos', 'woothemes' ); ?></a></h2>
		</div><!--/flickr-->
	
	<?php } ?>
	
	<?php include('ads/ads-bottom.php'); ?>
	
	<div class="fix"></div>
	
	<div class="subcol fl hl3">
		
		<div class="catlist">

			<ul class="cats-list">
				<li>
					<h2><a href="#"><?php _e( 'CATEGORIES', 'woothemes' ); ?></a></h2>
					<ul class="list-alt">
					<?php wp_list_categories('title_li=&hierarchical=0&show_count=1') ?>	
					</ul>
				</li>
			</ul>				
		
		</div><!--/catlist-->

		<?php if (function_exists('woo_sidebar') && woo_sidebar( 'primary' ) ) : else : ?>		
		
			<div class="widget">

			
			</div><!--/widget-->
		
		<?php endif; ?>
	
	</div><!--/subcol-->
		
	<div class="subcol fr hl3">
	
		<div class="catlist">

			<ul class="cats-list">
				<li>
					<h2><a href="#"><?php _e( 'ARCHIVES', 'woothemes' ); ?></a></h2>
					<ul class="list-alt">
					<?php wp_get_archives('type=monthly&show_post_count=1') ?>	
					</ul>
				</li>
			</ul>		
		
		</div><!--/catlist-->

		<?php if (function_exists('woo_sidebar') && woo_sidebar( 'secondary' ) ) : else : ?>		
		
			<div class="widget">
				
				<h2 class="hl"><?php _e( 'SERVICE LISTINGS', 'woothemes' ); ?></h2>
				<ul>
					<li><?php echo wpbusdirman_the_listing_category() ?></li>
				</ul>

			</div><!--/widget-->
		
		<?php endif; ?>
			
	</div><!--/subcol-->
	
</div><!--/col2-->
