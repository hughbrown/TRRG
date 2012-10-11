<?php get_header(); ?>
<div id="contentwrap" class="grid_12">
    <?php get_sidebar('left'); ?>
    <div class="grid_8">
        <div id="content" class="content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post" id="post-<?php the_ID(); ?>">
                <h2 class="title"><?php the_title(); ?></h2>
                <div class="breadcrumb">
                    <a href="<?php echo get_option('home'); ?>/">Home</a> | <?php the_title(); ?>
                </div> <!-- breadcrumb end -->
                    <?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(300,225), array("class" => "alignleft post_thumbnail")); } ?>
                    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

                    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

                </div> <!-- post end -->
            </div> <!-- content end -->
            <?php endwhile; endif; ?>
            <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

        </div> <!-- grid8 end -->
    <?php get_sidebar('right'); ?>
    </div><!-- contentwrap end -->

</div>
<?php get_footer(); ?>