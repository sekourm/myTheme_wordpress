<?php
    function myTheme_script_enqueue()
    {
        wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/myTheme.css', array(), '1.0.0', 'all');

        wp_enqueue_script('customjs',  get_template_directory_uri(). '/js/myTheme.js', array(), '1.0.0', true);
        wp_enqueue_script('jqueryjs',  get_template_directory_uri(). '/js/jquery.js', array(), '2.2.0', true);
    }

    add_action('wp_enqueue_scripts', 'myTheme_script_enqueue');

    function myTheme_theme_setup()
    {
        add_theme_support('menus');
        register_nav_menu('HeaderMenus','Menu Header du site');
        register_nav_menu('FooterMenus','Menu Footer du site');
    }

    add_action('init', 'myTheme_theme_setup');
?>