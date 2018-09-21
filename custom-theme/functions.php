<?php
    /*
     * include wp-bootstrap-navwalker file
     */
    require_once ('wp-bootstrap-navwalker.php');
    /*
     * Add Feature Thumbnail
    */
    add_theme_support( 'post-thumbnails' );

/*
** ADD My Custom Styles Files
*/
        function code_add_style() {
            wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
            wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/style.css' );
        }

        function code_add_script() {
            wp_deregister_script( 'jquery' ); // remove register jquery
            wp_register_script( 'jquery', includes_url('/js/jquery/jquery.js'), false, '', true); //register a new jquery in footer
            //Enqueue the new jquery
            wp_enqueue_script('jquery');
            wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true );
            wp_enqueue_script( 'script-js', get_template_directory_uri() . '/js/script.js', array(), false, true );

        }
        /*
         ** Add Action
         */

        add_action( 'wp_enqueue_scripts', 'code_add_style' );
        add_action( 'wp_enqueue_scripts', 'code_add_script' );

        /**
         * Add Custom Menu
         */
       function code_custom_menu(){
            register_nav_menu( 'Primary', __('Navigation Bar') );
        }

        add_action( 'init', 'code_custom_menu' );


       function code_nav_menu(){
           wp_nav_menu(array('theme_location=>primary',
               'menu_class'=>'navbar-nav ',
               'container'=> false,
               'depth'=> 2,
               'walker'=> new wp_bootstrap_navwalker()
           ));
       }

