<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Web Store
 */

?>

            <footer>
                <section class="footer-widgets">
                <div class="container">
                    <div class="row">
                        Widgets do Rodapé
                    </div>
                </div>
                </section>
                <section class="copyright">
                    <div class="container">
                        <div class="row">
                            <div class="copyright col-12 col-md-6">Copyright</div>
                            <div class="footer-menu col-12 col-md-6 text-left text-md-right">
                                <?php
                                    wp_nav_menu(
                                        array('theme_location' => 'web_store_footer_menu')
                                    );
                                ?>
                            </div>
                        </div>
                    </div>
                </section>
            </footer>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>
