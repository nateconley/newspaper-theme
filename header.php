<!DOCTYPE html>
<html>
	<head>
		<title><? wp_title(); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
	<body>
	<header>
		<a href="<?php bloginfo('url'); ?>"><h1><?php bloginfo('name'); ?></h1></a>
	</header>