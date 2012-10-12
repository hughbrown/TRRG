<div class="grid_2 alpha">
    <div class="sidebar sidebar-left">
        <div id="main_nav">

            <h3>Main Menu</h3>
           <!-- Code Insert -->
            <?php
            if(function_exists('wp_nav_menu')) {
                //wp_nav_menu( 'depth=1&theme_location=menu_1&menu_id=pagemenu&container=&fallback_cb=menu_1_default');
                wp_nav_menu( 'depth=1&theme_location=menu_1&container=&fallback_cb=menu_1_default');
            } else {
                menu_1_default();
            }

            function menu_1_default()
            {
                ?>
                <ul>
                    <li <?php if(is_home()) { ?> class="current_page_item" <?php } ?>><a href="<?php echo get_option('home'); ?>/">Home</a></li>
                    <?php wp_list_pages('depth=1&sort_column=menu_order&title_li=' ); ?>
                </ul>
                <?php
            }

            ?>

           <!-- end -->

        </div>
        <hr />
        <div id="service_listings">


            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Sidebar') ) : ?>
            <?php endif; ?>
        </div>
    </div>
</div>