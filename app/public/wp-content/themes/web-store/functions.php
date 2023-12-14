<?php

    /** Web Store functions and definitions
     * @link https://tiagozanarde.dev
     *
     * @package Web Store
     */

    function web_store_scripts() {
        wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array('jquery'), '5.3.2', true);

        wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '5.3.2', 'all');

        wp_enqueue_style('web-store-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
    }

    add_action('wp_enqueue_scripts', 'web_store_scripts');

    function web_store_config() {
        register_nav_menus(
            array('web_store_main_menu' => 'Web Store Main Menu',
                  'web_store_footer_menu' => 'Web Store Footer Menu')
        );
    }

    add_action('after_setup_theme', 'web_store_config');
