<?php get_header(); ?>
        <div id="contentwrap" class="grid_12">
            <?php get_sidebar('left'); ?>
            <div class="grid_8 trrg-mid">
            	<div id="content" class="content">
                    <!-- Content Entry -->
                    <?php $recent = new WP_Query("cat=1&showposts=1"); while($recent->have_posts()) : $recent->the_post();?>
                        <h2 class="title"><?php the_title(); ?></h2>
                        <?php the_content(__('Read the story &raquo;'));?><div style="clear:both;"></div>
                    <?php endwhile; ?>


                    <!-- Content Entry End-->


                </div> <!-- content end -->
                <?php if(is_home()) { include (TEMPLATEPATH . '/featured.php'); } ?>
            </div> <!-- grid_8 end -->
            <?php get_sidebar('right'); ?>
        </div> <!-- contentwrap end -->
<?php get_footer(); ?>