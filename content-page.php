<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h2 class="entry-title"><?php the_title(); ?></h2>
    </header><!-- .entry-header -->
 
    <div class="entry-content">
        <?php the_content();
        wp_link_pages( array(
                'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'chessbox' ) . '</span>',
                'after'       => '</div>',
                'link_before' => '<span>',
                'link_after'  => '</span>',
        ) );
        
        edit_post_link( __( 'Edit', 'chessbox' ), '<span class="edit-link">', '</span>' ); ?>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->