<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
    <?php
    if ( '' != get_the_post_thumbnail() ) {
        ?><figure class="post-img">
        <?php the_post_thumbnail('large');
        ?></figure><?php
    } else {
        // some code
    }
    ?>
    <div class="post-format">
        <span></span>
    </div>
    <div class="entry-container">
    <header class="entry-header">
        <?php
        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        ?>
    </header>
    
    <div class="entry-summary">
            <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->

    <footer class="entry-meta">
        <?php
            if ( 'post' == get_post_type() )
                    chessbox_posted_on();

            if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
        ?>
        <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'chessbox' ), __( '1 Comment', 'chessbox' ), __( '% Comments', 'chessbox' ) ); ?></span>
        <?php
            endif;

            edit_post_link( __( 'Edit', 'chessbox' ), '| <span class="edit-link">', '</span>' );
        ?>
    </footer><!-- .entry-meta -->
    </div>
</article>