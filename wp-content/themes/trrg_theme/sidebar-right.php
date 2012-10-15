<div class="grid_2 omega">
    <div class="sidebar sidebar-right">
        <div id="social"></div>
        <div id="search">
            <form id="searchform" action="/" method="get">
                <input id="s" type="text" name="s" value="Search">
            </form>
        </div> <!-- search end -->
        <div class="sidebaradbox">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar') ) : ?>
            <?php endif; ?>
        </div> <!-- sideadbar end -->

    </div> <!-- sidebar end -->
    </div> <!-- grid_2 end -->