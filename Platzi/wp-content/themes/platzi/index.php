<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wordpress Test</title>
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url) ?>">
</head>
<body>
	<header>
		<h1 class="Header-title"><?php bloginfo('name'); ?></h1>
		<h2 class="Header-description"><?php bloginfo('description'); ?></h2>
	</header>
	<ul>
		<li><?php bloginfo('name'); ?></li>
		<li><?php bloginfo('description'); ?></li>
		<li><?php bloginfo('wpurl'); ?></li>
		<li><?php bloginfo('admin_email'); ?></li>
		<li><?php bloginfo('charset'); ?></li>
		<li><?php bloginfo('version'); ?></li>
		<li><?php bloginfo('html_type'); ?></li>
		<li><?php bloginfo('language'); ?></li>
		<li><?php bloginfo('stylesheet_directory'); ?></li>
		<li><?php bloginfo('stylesheet_url'); ?></li>
	</ul>
</body>
</html>