<div id="featured-th">
 <div class="grid_3 alpha">
     <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Column 1 Feature') ) : ?>
     <?php endif; ?>
 </div>
 <div class="grid_5 omega">
     <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Column 3 Feature') ) : ?>
     <?php else: ?>
        <?php fb_feed() ?>
     <?php endif; ?>

 </div>

</div><!--/featured-th-->