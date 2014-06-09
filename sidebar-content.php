<?php
if (is_category( 'anime-manga' )) {
    if ( ! is_active_sidebar( 'sidebar-2' ) ) {
            return;
    }
    ?>
    <div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-2' ); ?>
    </div><!-- #content-sidebar -->
<?php } elseif (is_category( 'film-tv' )) {
    if ( ! is_active_sidebar( 'sidebar-3' ) ) {
            return;
    }
    ?>
    <div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-3' ); ?>
    </div><!-- #content-sidebar -->
<?php } elseif (is_category('musik')){
    if ( ! is_active_sidebar( 'sidebar-4' ) ) {
            return;
    }
    ?>
    <div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-4' ); ?>
    </div><!-- #content-sidebar -->
<?php } else {
    if ( ! is_active_sidebar( 'sidebar-5' ) ) {
            return;
    }
    ?>
    <div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-5' ); ?>
    </div><!-- #content-sidebar -->
<?php }
?>