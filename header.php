<!doctype html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>myTheme</title>
        <?php wp_head(); ?>
    </head>
    <?php
        if(is_front_page()):
            $myTheme_classes = array('myTheme-class', 'my-class');
        else:
            $myTheme_classes = array('no_myTheme-class');
        endif;
    ?>
    <body <?php body_class($myTheme_classes) ?> >

    <?php wp_nav_menu(array('theme_location'=>'HeaderMenus', 'container_class' => 'myMenuClass')); ?>