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

        add_theme_support(
            'woocommerce',
            array(
                'thumbnail_image_width' => 255,
                'single_image_width' => 255,
                'product_grid' => array(
                    'default_rows' => 10,
                    'min_rows' => 5,
                    'max_rows' => 10,
                    'default_columns' => 1,
                    'min_columns' => 1,
                    'max_columns' => 4
                )
            )
        );

        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');

        if (!isset($content_width)) {
            $content_width = 600;
        }
    }

    add_action('after_setup_theme', 'web_store_config', 0);
