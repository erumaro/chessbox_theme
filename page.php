<?php get_header(); ?>
 
            <div id="content" class="site-content">
 
                <?php while ( have_posts() ) : the_post(); ?>
 
                    <?php get_template_part( 'content', 'page' ); ?>
 
                <?php endwhile; // end of the loop. ?>
 
            </div><!-- #content .site-content -->
 
<?php get_footer(); ?>