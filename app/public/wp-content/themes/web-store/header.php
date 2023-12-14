<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Web Store
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset=<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header>
            <section class="search">
                <div class="container">
                    Pesquisa
                </div>
            </section>
            <section class="top-bar">
                <div class="container">
                    <div class="row">
                    <div class="brand col-3">Logo</div>
                        <div class="second-column col-9">
                            <div class="account">Conta</div>
                            <nav class="main-menu">
                                <?php
                                    wp_nav_menu(
                                        array('theme_location' => 'web_store_main_menu')
                                    );
                                ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
        </header>
