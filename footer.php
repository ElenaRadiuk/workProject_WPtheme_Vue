        </div>
        <!--close content class tag-->
        <footer class="page-footer" role="contentinfo">

            <div class="footer-info page-container-wide">
                <div class="footer-column1">

<!--                    <div class="ic-footer-logo"><img src="--><?php //echo get_template_directory_uri() ?><!--/src/assets/images/logo.svg"> </div>-->
<!--                    <div class="text">-->
<!--                        Pro lepší správu a organizaci ve stavebním řízení-->
<!--                    </div>-->

                    <?php dynamic_sidebar( 'footer-1' ); ?>

                </div>
                <div class="footer-column-nav">
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-footer1', 'menu_class' => 'main-nav__list', 'container' => false ) ); ?>
                </div>

                <div class="footer-column-nav">
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-footer2', 'menu_class' => 'main-nav__list', 'container' => false ) ); ?>
                </div>

                <div class="footer-column4">
                    <?php dynamic_sidebar( 'footer-4' ); ?>
                </div>

                <div class="footer-column5 main-nav-social">
                    <?php dynamic_sidebar( 'footer-5' ); ?>
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-social', 'menu_class' => 'social-nav__list', 'container' => false ) ); ?>
                </div>

            </div>

            <div class="page-footer__copyright page-container-wide">
                <p class="copyright">&copy; <?php echo date("Y"); ?> - Icea spo. s. r. o.</p>
                <p class="madeby">Made by <span>Soulmates</span></p>
            </div>

        </footer>
    </div>
    <!--close wrapper class tag-->
<?php wp_footer(); ?>

</body>
</html>
