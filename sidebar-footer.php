<?php

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="supplementary">
	<div id="footer-sidebar" class="footer-sidebar widget-area clearfix" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #footer-sidebar -->
</div><!-- #supplementary -->