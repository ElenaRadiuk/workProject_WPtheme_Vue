<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php get_template_part( 'template-parts/head' ); ?>
</head>

<body <?php body_class("page-body"); ?>>
    <div class="wrapper" id="app">
        <div class="content">
            <header class="page-header">
                <div class="menu-container">
<!--                    --><?php //bloginfo( 'name' ); ?>
                    <div class="header-logo">
                        <div class="ic-footer-logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <img src="<?php echo get_template_directory_uri() ?>/src/assets/images/logo.svg">
                            </a>
                        </div>
                    </div>

                    <a id="hamburger-icon" href="#" title="Menu">
                        <span class="line line-1"></span>
                        <span class="line line-2"></span>
                        <span class="line line-3"></span>
                    </a>


                    <nav class="main-nav" role="navigation">
                        <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_class' => 'main-nav__list', 'container' => false ) ); ?>
                    </nav>

                    <nav class="main-nav-side main-nav-social" role="navigation">
                        <?php wp_nav_menu( array( 'theme_location' => 'menu-social', 'menu_class' => 'social-nav__list', 'container' => false ) ); ?>
                    </nav>
                </div>
            </header>


