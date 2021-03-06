<?php

    // Load CSS
    function wtapp_load_styles() {
        // Register Styles
        wp_register_style('font-awesome_style', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_register_style('wtapp_main_style', get_template_directory_uri() . '/assets/styles/main.css');

        // Enqueue Styles
        wp_enqueue_style( 'wp-theme-boilerplate-style', get_stylesheet_uri() );
        wp_enqueue_style( 'font-awesome_style' );
        wp_enqueue_style( 'wtapp_main_style' );
    }
    add_action('wp_enqueue_scripts', 'wtapp_load_styles');

    // Load Javascript
    function wtapp_load_scripts() {

        wp_deregister_script( 'jquery' );
        wp_deregister_script( 'jquery-migrate.min' );

        wp_register_script('jquery', ("//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"), false, '1.12.4', true);
        wp_register_script('jquery-migrate.min', ("//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.0/jquery-migrate.min.js"), false, '3.0.0', true);

        wp_enqueue_script('jquery');
        wp_enqueue_script('jquery-migrate.min');

        // Bootstrap
        // wp_register_script('bootstrap-scripts', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'), null, true);
        // wp_enqueue_script('bootstrap-scripts');

        // Vendor Scripts
        wp_register_script('wtapp_vendor_script', get_template_directory_uri() . '/assets/scripts/vendor.js', array('jquery'), null, true);
        wp_enqueue_script('wtapp_vendor_script');

        // User Scripts
        wp_register_script('wtapp_user_script', get_template_directory_uri() . '/assets/scripts/user.js', array('jquery'), null, true);
        wp_enqueue_script('wtapp_user_script');

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
    add_action('wp_enqueue_scripts', 'wtapp_load_scripts');
?>
