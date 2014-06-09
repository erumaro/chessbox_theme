<?php get_header(); ?>
            <div id="content" class="site-content">
		<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );
				endwhile;
				// Previous/next post navigation.
				chessbox_paging_nav();
			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );
			endif;
		?>
            </div>
<?php get_footer(); ?>