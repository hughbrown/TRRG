<div id="featured-th">
 <div class="grid_3 alpha">
     <p class="trrg-left">
     <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Column 1 Feature') ) : ?>
     <?php endif; ?>
     </p>
 </div>
 <div class="grid_5 omega">

     <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Column 3 Feature') ) : ?>

            <?php fb_feed() ?>

     <?php else: ?>

     <?php endif; ?>

 </div>

</div><!--/featured-th-->