<footer>
    <p>this is my footer</p>
    <?php wp_nav_menu(array('theme_location'=>'FooterMenus', 'container_class' => 'my_extra_menu_class')); ?>
</footer>

<?php
    wp_footer();
?>

</body>
</html>