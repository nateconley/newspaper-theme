<?php
/*
Template Name: Blog Home
*/
?>
<?php get_header(); ?>

<?php if(have_posts()) : while ( have_posts() ) : the_post(); ?>

	<h3><?php the_title(); ?></h3>
	<p><?php the_excerpt(); ?></p>
	<a href="<?php the_permalink(); ?>">Read more</a>

<?php endwhile; endif; ?>

<?php get_footer(); ?>