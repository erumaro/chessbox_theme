<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <!-- Lets IE browsers older than IE9 recognize HTML5 code -->
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header id="masthead" class="site-header" role="banner">
            <h1 class="site-title">
                <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <img src="<?php bloginfo('template_directory'); ?>/images/logo.png"  alt="<?php bloginfo( 'name' ); ?>" />
                </a>
            </h1>
            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
        </header><!-- #masthead .site-header -->
        <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
            <a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'chessbox' ); ?></a>
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
        </nav>
        <main class="site-main" role="main">