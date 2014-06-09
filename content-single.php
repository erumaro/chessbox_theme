<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
    <?php
    if ( has_post_thumbnail()) : the_post_thumbnail('full');
    endif;
    ?>
    <div class="entry-container">
        <header class="entry-header">
            <h2 class="entry-title"><?php the_title(); ?></h2>
            <div class="entry-meta">
                <?php chessbox_posted_on(); ?><span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'chessbox' ) ); ?></span>
            </div><!-- .entry-meta -->
        </header><!-- .entry-header -->
        <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'erumasan' ), 'after' => '</div>' ) ); ?>
        </div><!-- .entry-content -->
        <?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->