<?php get_header(); ?>

<p>This is single.php</p>

<?php the_post(); ?>

<h1><?php the_title(); ?></h1>

<p><?php the_content(); ?></p>

<?php get_footer(); ?>