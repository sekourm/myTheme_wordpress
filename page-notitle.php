<?php

/*
    Template Name: Page No Title
*/

get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <h1>This is my static title</h1>
        <small>Cet article a été publié le <?php the_time('l, F j, Y') ?> et est classé dans <?php the_category(', ') ?>.</small>
        <p><?php the_content(); ?></p>
        <hr/>

    <?php endwhile;
endif
?>

<?php get_footer(); ?>