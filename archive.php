<?php get_header(); ?>
            <div id="content" class="site-content">
			<?php if ( have_posts() ) : ?>
                        <header class="archive-header">
                                <h1 class="archive-title">
                                        <?php
                                                if ( is_day() ) :
                                                        printf( __( 'Daily Archives: %s', 'chessbox' ), get_the_date() );

                                                elseif ( is_month() ) :
                                                        printf( __( 'Monthly Archives: %s', 'chessbox' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'chessbox' ) ) );

                                                elseif ( is_year() ) :
                                                        printf( __( 'Yearly Archives: %s', 'chessbox' ), get_the_date( _x( 'Y', 'yearly archives date format', 'chessbox' ) ) );

                                                else :
                                                        _e( 'Archives', 'chessbox' );

                                                endif;
                                        ?>
                                </h1>
                        </header><!-- .archive-header -->

                        <?php
                                        // Start the Loop.
                                        while ( have_posts() ) : the_post();

                                                /*
                                                 * Include the post format-specific template for the content. If you want to
                                                 * use this in a child theme, then include a file called called content-___.php
                                                 * (where ___ is the post format) and that will be used instead.
                                                 */
                                                get_template_part( 'content', get_post_format() );

                                        endwhile;
                                        // Previous/next page navigation.
                                        chessbox_paging_nav();

                                else :
                                        // If no content, include the "No posts found" template.
                                        get_template_part( 'content', 'none' );

                                endif;
                        ?>
            </div>
<?php get_footer(); ?>