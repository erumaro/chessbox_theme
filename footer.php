        </main><!-- .site-main -->
        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="wrapper">
            <?php get_sidebar( 'footer' ); ?>
            <div class="site-info">
                <?php do_action( 'chessbox_credits' ); ?>
                <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'chessbox' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'chessbox' ), 'WordPress' ); ?></a>
            </div><!-- .site-info -->
            </div>
        </footer><!-- #colophon .site-footer -->
        <?php wp_footer(); ?>
    </body>
</html>